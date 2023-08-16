<?php

namespace Digistyle;

class Includes
{
    private static function loadStylesheets($stylesheets)
    {
        foreach ($stylesheets as $stylesheet) {
            ?>
            <link href="<?= SITE_URL . '/' . $stylesheet['src'] ?>" rel="<?= $stylesheet['rel'] ?>"
                  type="<?= $stylesheet['type'] ?>" id="<?= $stylesheet['name'] ?>">
            <?php
        }
    }


    private static function loadScripts($scripts)
    {
        foreach ($scripts as $script) {
            ?>
            <script src="<?= SITE_URL . '/' . $script['src'] ?>" type="<?= $script['type'] ?>"
                    id="<?= $script['type'] ?>"></script>
            <?php
        }
    }
public static function getHeader(){
    ?>
    <!doctype html>
    <html lang="fa"  dir="rtl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.rtl.css">
        <link rel="stylesheet" href="css/bootstrap-icons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="style.css">

        <title> Digi Home</title>



    </head>
    <body>


    <header   class="mb-5">

        <div class="top-menu">

            <div class="container">

                <div class="row">
                    <div class="col-md-3  text-center"></div>
                    <div class="col-md-6">
                        <div class="main-menu">
                            <ul>
                                <li><b><a href="#">خانه</a></b></li>
                                <li>
                                    <b><a href="#">محصولات</a></b>
                                    <ul>
                                        <li><a href="#">آلوبخارا</a>
                                            <ul>

                                                <li><a href="#">آلوبخارای طربقه</a></li>
                                                <li><a href="#">آلوبخارای آذربایجان</a></li>
                                                <li><a href="#">آلوبخارای ارگانیک خوانسار</a></li>

                                            </ul>

                                        </li>
                                        <li><a href="#">آلوچه</a>
                                            <ul>
                                                <li><a href="#">آلوچه‌سیاه</a></li>
                                                <li><a href="#">آلوچه‌زرد‌طلایی</a></li>
                                                <li><a href="#">آلوچه‌شرابی</a></li>
                                                <li><a href="#">آلوچه‌سیاه</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="#">آلو</a>
                                            <ul>
                                                <li><a href="#">آلوسیاه</a></li>
                                                <li><a href="#">آلوسانتریزه</a></li>
                                                <li><a href="#">آلوشابلون</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="#">برگه‌و‌قیسی</a>
                                            <ul>
                                                <li><a href="#">برگه‌زردآلو</a></li>
                                                <li><a href="#">برگه‌هلو</a></li>
                                                <li><a href="#">برگه‌شابلون</a></li>
                                                <li><a href="#">قیسی‌طلایی</a></li>
                                                <li><a href="#">قیسی‌آفتابی</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="#">کشمش</a>
                                            <ul>
                                                <li><a href="#">کشمش پلویی سیاه</a></li>
                                                <li><a href="#">کشمش پلویی طلایی</a></li>
                                                <li><a href="#">کشمش آفتابی</a></li>
                                                <li><a href="#">کشمش سایه خشک</a></li>
                                                <li><a href="#">فخری(مویزمراغه)</a></li>
                                            </ul>

                                        </li>
                                        <li><a href="#">ترشک‌و‌لواشک</a>
                                            <ul>
                                                <li><a href="#">ترشک‌آلبالو</a></li>
                                                <li><a href="#">ترشک‌آلوچه‌جنگلی</a></li>
                                                <li><a href="#">ترشک‌زغال‌اخته</a></li>
                                                <li><a href="#">ترشک‌زردآلو</a></li>
                                                <li><a href="#">ترشک‌دانه‌انار</a></li>
                                                <li><a href="#">ترشک‌هفت‌میوه</a></li>
                                                <li><a href="#">لواشک‌متری</a></li>
                                                <li><a href="#">سس لواشک</a></li>
                                            </ul>


                                        </li>
                                    </ul>

                                </li>
                                <li><b><a href="#">اصطلاحات</a></b></li>
                                <li><b><a href="#">خدمات پس‌از‌فروش</a></b>
                                    <ul>
                                        <li><a href="#">چای‌ ماسالا</a></li>
                                        <li><a href="#">چای‌ ماسالای‌ رژیمی</a></li>
                                        <li><a href="#">دان‌ قهوه بلند‌ سامبا‌ دارک</a></li>
                                        <li><a href="#">دان ‌قهوه‌ بلند‌ سامبا‌ شکلاتی</a></li>
                                        <li><a href="#">دان‌ قهوه‌ ربوستا‌ اوگاندا</a></li>
                                        <li><a href="#">دان قهوه‌ عربیکا‌ برزیل</a></li>
                                        <li><a href="#">دان‌ قهوه‌ عربیکا‌ کلمبیا</a></li>
                                        <li><a href="#">دان‌ قهوه‌ ربوستا چریAA</a></li>
                                        <li><a href="#">قهوه‌ ترک‌ ویژه</a></li>
                                        <li><a href="#">قهوه‌ فوری‌ گلد‌ برزیل</a></li>
                                        <li><a href="#">قهوه فوری گلد هند</a></li>
                                        <li><a href="#">پودر اسپرسو فوری</a></li>
                                        <li><a href="#">پودر کاپوچینو</a></li>
                                        <li><a href="#">پودر کافی میت</a></li>
                                        <li><a href="#">پودر کافی میکس</a></li>
                                        <li><a href="#">پودر هات چاکلت</a></li>
                                    </ul>

                                </li>
                                <li><b><a href="#">درباره ما</a></b>
                                    <ul>
                                        <li><a href="#">نحوه ثبت سفارش</a></li>
                                    </ul>
                                <li><b><a href="#">ارتباط‌ با ما</a></b>


                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="top-access">
                            <ul class="text-center">

                                <li class="d-inline-block"data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="سبدخرید">
                                    <a href="#"  class="text-light  d-inline-block">
                                        <i class="bi bi-bag"></i></a></li>

                                <li class="d-inline-block"data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="حساب کاربری">
                                    <a href="#"  class="text-light  d-inline-block">
                                        <i class="bi bi-person"></i></a></li>

                                <li class="d-inline-block"data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="علاقمندی‌ها">
                                    <a href="#"  class="text-light  d-inline-block"
                                    ><i class="bi bi-heart"></i></a></li>

                                <li class="d-inline-block"data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="جستجو">
                                    <a href="#"  class="text-light  d-inline-block">
                                        <i class="bi bi-search"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid p-0 ">

            <div class="slider-box">

                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

                    </div>
                    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/آشپزخانه/خانگی.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">

                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="image/آشپزخانه/خانگی.jpg" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block"></div>
                            </div>

                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                    </div>



                </div>
            </div>
        </div>


    </header>

    <?php
}
public  static  function  getFooter(){
    ?>
    <footer  class="py-4 mt-5  position-relative">
        <span class="scrooltop  position-absolute"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-menu">
                        <ul  class="p-0  my-3  text-center ">
                            <li><a href="#">مشتریان</a></li>
                            <li><a href="#">قوانین</a></li>
                            <li><a href="#">خریدکالا</a></li>
                            <li><a href="#">درباره فروشگاه</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="footer-box">
                        <span class="title  py-2 pb-4 d-block  position-relative">دوره طراحی قالب فروشگاهی</span>
                        <ul class="p-0 ">
                            <li class="d-block w-100  py-2 ">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                                چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع
                                با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد
                                تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.

                            </li>

                            <li class="d-block w-100  py-2">
                                معمولا طراحان گرافیک برای صفحه‌آرایی، نخست از متن‌های آزمایشی
                                و بی‌معنی استفاده می‌کنند تا صرفا
                                به مشتری یا صاحب کار خود نشان دهند که صفحه طراحی یا صفحه بندی شد
                            </li>


                        </ul>
                    </div>
                </div>







                <div class="col-md-4">
                    <div class="footer-box  text-center">
                        <span class="title title-center  py-2 pb-4 d-block  position-relative">مارادنبال کنید</span>
                        <ul class="p-0   social-ul ">
                            <li  class="d-inline-block"><a href="" class="d-inline-block  p-2"><i class="bi bi-instagram "></i></a></li>
                            <li  class="d-inline-block"><a href="" class="d-inline-block  p-2"><i class="bi bi-linkedin "></i></a></li>
                            <li  class="d-inline-block"><a href="" class="d-inline-block  p-2"><i class="bi bi-twitter "></i></a></li>



                        </ul>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="footer-box ">
                        <span class="title   py-2  pb-4 d-block  position-relative">تماس با‌ ما</span>
                        <ul class="p-0 ">
                            <li class="d-block w-100  py-2 ">
                                <span><i class="bi bi-telephone-inbound"></i>&nbsp;04133254789</span>
                            </li>

                            <li class="d-block w-100  py-2">
                                <span><i class="bi bi-geo-alt"></i>&nbsp;تبریز،خیابان المهدی،کوی المهدی،جنب بیمارستان،پلاک 5</span>
                            </li>

                            <li class="d-block w-100  py-2">
                                <span><i class="bi bi-envelope-at"></i>&nbsp;info@.34.gmail.com</span>
                            </li>


                        </ul>
                    </div>
                </div>







            </div>
        </div>
    </footer>





    <script src="js/jQuery.js"></script>
    <script src="js/popper.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.elevatezoom.js"></script>
    <script src="js/login.js"></script>

    <script src="js/index.js"></script>



    </body>
    </html>



    <?php
}
}