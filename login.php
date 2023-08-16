<?php
require_once 'Includes.php';
require_once 'Requests.php';
use Digistyle\Includes;
use Digistyle\Requests;
Includes::getHeader();

?>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="login-register-div bg-white rounded p-3">
                        <span class="d-block text-center display-3"><i class="bi bi-house"></i></span>
                        <span class="d-block text-center my-3">ورود به حساب</span>
                        <div class="form-div">
                            <form action="" method="post" name="form_log" id="form_log">
                                <input type="text" name="username_log" id="username_log" placeholder="نام کاربری یا ایمیل">
                                <input type="password" name="password_log" id="password_log" placeholder="کلمه عبور">

                                <button type="submit" id="btn_log">ورود</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="login-register-div bg-white rounded p-3">
                        <span class="d-block text-center display-3"><i class="bi bi-person"></i></span>
                        <span class="d-block text-center my-3   pt-1">ثبت نام</span>
                        <div class="form-div">
                            <form action="" method="post" name="form_sign" id="form_sign">
                                <input type="text" id="username_sign" placeholder="نام کاربری یا ایمیل">
                                <input type="password" id="pass_sing" placeholder="کلمه عبور">
                                <input type="password" id="pass2_sign" placeholder="تکرار کلمه عبور">
                                <button type="submit" id="btn_sign">ثبت نام</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<?php
Includes::getFooter(
    ['src' => 'js/login.js', 'type' => 'text/javascript', 'name' => 'login']);
