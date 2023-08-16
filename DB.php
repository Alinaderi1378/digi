<?php

namespace Digistyle;
require_once 'config.php';
use Digistyle\config;
use PDO;
use PDOException;
use stdClass;

class DB
{
    private static function connectDB()
    {
        try {
            $dbh = "mysql:host=%HOST%;dbname=%DBNAME%";
            $dbh = str_replace('%HOST%', config::$host, $dbh);
            $dbh = str_replace('%DBNAME%', config::$dbName, $dbh);
            $connection = new PDO($dbh, config::$dbUserName, config::$dbPassword);
            $connection->exec("SET character_set_connection = 'utf8'");
            $connection->exec("SET NAMES 'UTF8'");
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        } catch (PDOException $err) {
            return null;
        }
    }

    public static function select($table, $columns = [], $conditions = [], $conditionsOperators = [], $conditionsArgs = [], $groupBy = null, $having = null, $orderBy = [], $limit = 1000)
    {
        $queryColumns = self::columnsToQuery($columns);
        $queryCondition = self::conditionToQuery($conditions, $conditionsOperators, $conditionsArgs);
        $queryGroupBy = self::groupByToQuery($groupBy);
        $queryHaving = self::havingToQuery($having);
        $queryOrderBy = self::orderByToQuery($orderBy);
        $queryLimit = self::limitToQuery($limit);
        $query = "select {$queryColumns} from {$table}{$queryCondition}{$queryGroupBy}{$queryHaving}{$queryOrderBy}{$queryLimit};";

        return self::rawQuery($query);
    }


    public static function rawQuery($query, $bindings = [])
    {
        $connection = self::connectDB();
        $response = self::sendResponse(-1, "Couldn't connect to database.");

        if (!empty($connection)) {
            try {
                $response = self::sendResponse(204, 'No records found.');

                $statement = $connection->prepare($query);
                $statement->execute($bindings);
                $result = $statement->fetchAll(PDO::FETCH_OBJ);
                if (count($result) > 0) {
                    $response = self::sendResponse(200, count($result) . " Records found.", $result);
                }
            } catch (PDOException $err) {
                $response = self::sendResponse(-2, "Your SQL statement have errors.");
            }
        }

        return $response;
    }

    public static function insert($query, $bindings = [])
    {
        $connection = self::connectDB();
        $response = self::sendResponse(-1, "Couldn't connect to database.");

        if (!empty($connection)) {
            try {
                $response = self::sendResponse(202, 'No row added.');

                $statement = $connection->prepare($query);
                $statement->execute($bindings);
                if ($connection->lastInsertId()) {
                    $response = self::sendResponse(200, 'New row created successfully.', $connection->lastInsertId());
                }
            } catch (PDOException $err) {
                $response = self::sendResponse(-2, "Your SQL statement have errors.");
            }
        }

        return $response;
    }


    public static function update($query, $bindings = [])
    {
        $connection = self::connectDB();
        $response = self::sendResponse(-1, "Couldn't connect to database.");

        if (!empty($connection)) {
            try {
                $response = self::sendResponse(208, 'Changes have already applied.');

                $statement = $connection->prepare($query);
                $statement->execute($bindings);
                if ($statement->rowCount() > 0) {
                    $response = self::sendResponse(200, 'Changes applied successfully.');
                }
            } catch (PDOException $err) {
                $response = self::sendResponse(-2, "Your SQL statement have errors.");
            }
        }

        return $response;
    }

    public static function delete($query, $bindings = [])
    {
        $connection = self::connectDB();
        $response = self::sendResponse(-1, "Couldn't connect to database.");

        if (!empty($connection)) {
            try {
                $response = self::sendResponse(203, 'No row to delete found.');

                $statement = $connection->prepare($query);
                $statement->execute($bindings);
                if ($statement->rowCount() > 0) {
                    $response = self::sendResponse(200, 'Row deleted successfully.');
                }
            } catch (PDOException $err) {
                $response = self::sendResponse(-2, "Your SQL statement have errors.");
            }
        }

        return $response;
    }

    private static function columnsToQuery($columns = [])
    {
        $queryColumns = "";

        if (!empty($columns) && is_array($columns)) {
            $queryColumns .= implode(', ', $columns);
        } else {
            $queryColumns .= "*";
        }

        return $queryColumns;
    }

    private static function conditionToQuery($conditions, $conditionsOperators, $conditionsArgs)
    {
        $queryConditions = "";

        if (!empty($conditions) && !empty($conditionsArgs)) {
            $queryConditions = " where ";
            for ($i = 0; $i < count($conditions); $i++) {
                $queryConditions .= "{$conditions[$i]} = '{$conditionsArgs[$i]}' ";
                if (isset($conditionsOperators[$i])) {
                    $queryConditions .= "{$conditionsOperators[$i]} ";
                }
            }
        }

        return $queryConditions;
    }

    private static function groupByToQuery($groupBy)
    {
        $queryGroupBy = "";

        if (!empty($groupBy)) {
            $queryGroupBy = " group by {$groupBy}";
        }

        return $queryGroupBy;
    }

    private static function havingToQuery($having)
    {
        $queryHaving = "";

        if (!empty($having)) {
            $queryHaving = " having {$having}";
        }

        return $queryHaving;
    }

    private static function orderByToQuery($orderBy)
    {
        $queryOrderBy = "";

        if (!empty($orderBy)) {
            $queryOrderBy = " order by " . implode(', ', $orderBy);
        }

        return $queryOrderBy;
    }

    private static function limitToQuery($limit)
    {
        $queryLimit = "";

        if (!empty($limit)) {
            $queryLimit = " limit {$limit}";
        }

        return $queryLimit;
    }

    private static function sendResponse(...$opts)
    {
        $response = new stdClass();
        $response->status = $opts[0];
        $response->message = $opts[1];
        if (isset($opts[2])) {
            $response->response = $opts[2];
        }

        return $response;
    }
}