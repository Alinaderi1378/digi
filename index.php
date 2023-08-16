<?php
require_once 'Includes.php';
require_once  'Requests.php';
use Digistyle\Includes;
use Digistyle\Requests;

Includes::getHeader();

$dataProductItem=[];
$resProduct=Requests::selectproducts();
if ($resProduct->status = 200) {
    $dataProductItem = $resProduct->response;
}


?>

    <section class="index-products  mb-5  ">
        <div class="container-fluid">
            <ul class="nav nav-pills mb-4  justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">پربازدیدترین</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="false">پرفروش‌ ترین</button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false">گران‌ترین</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="true">ارزان ترین</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false">مرتبط‌ ترین</button>
                </li>
            </ul>




            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active"
                     id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <?php
                        foreach ($dataProductItem as $item) {
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-2">

                                <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                    <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                        <img src="<?=$item->image?>"  alt="<?=$item->name?>"  class="d-table  mx-auto">
                                        <figcaption class="position-absolute w-100  h-100  text-center">
                                            <ul class="p-0">
                                                <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                     data-bs-placement="top" title="مشاهده محصول">
                                                    <a href="#" class="d-inline-block">
                                                        <i class="bi bi-eye"></i></a></li>
                                                <li class="d-inline-block "data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                            </ul>
                                        </figcaption>


                                    </figure>
                                    <h5 class="m-0 py-2 text-center  overflow-hidden"><?=$item->name?></h5>
                                    <p class="text-center overflow-hidden  mt-3"><?=$item->description?></p>
                                    <div class="product-rate  text-center  mb-2">
                                        <i class="bi bi-star  text-warning"></i>
                                        <i class="bi bi-star  text-warning"></i>
                                        <i class="bi bi-star  text-warning"></i>
                                        <i class="bi bi-star  text-warning"></i>
                                        <i class="bi bi-star  text-dark"></i>
                                    </div>
                                    <div class="product-price  d-flex">

                                        <span class="d-inline-block  w-100  text-start"><?php echo $item->price / $item->sold?> تومان </span>
                                        <del  class="d-inline-block w-100 text-end"><?=$item->price?> تومان </del>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>






                    </div>



                </div>

                <div class="tab-pane fadeone" id="pills-one" role="tabpanel"
                     aria-labelledby="pills-one-tab">
                    <div class="col-lg-3 col-md-4 col-sm-2">

                        <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                            <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                <img src="image/آشپزخانه/اجاق0.jpg"  alt=""  class="d-table  mx-auto">
                                <figcaption class="position-absolute w-100  h-100  text-center">
                                    <ul class="p-0">
                                        <li  class="d-inline-block "data-bs-toggle="tooltip"
                                             data-bs-placement="top" title="مشاهده محصول">
                                            <a href="#" class="d-inline-block">
                                                <i class="bi bi-eye"></i></a></li>
                                        <li class="d-inline-block "data-bs-toggle="tooltip"
                                            data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                    </ul>
                                </figcaption>


                            </figure>
                            <h5 class="m-0 py-2 text-center  overflow-hidden">اجاق گاز بوش مدل-657</h5>
                            <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            <div class="product-rate  text-center  mb-2">
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-dark"></i>
                            </div>
                            <div class="product-price  d-flex">

                                <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="tab-pane fadetwo" id="pills-two" role="tabpanel"
                     aria-labelledby="pills-two-tab">
                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق0.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق.jfif"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>

                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>

                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block ">
                                                    <i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق4.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر3.jpeg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر4.jpeg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 3.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن3.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن 4.png"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن5.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن 6.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="tab-pane fadethree"
                     id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق0.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق.jfif"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>

                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>

                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block ">
                                                    <i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق4.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر3.jpeg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر4.jpeg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 3.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن3.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن 4.png"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن5.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن 6.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                            "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>

                <div class="tab-pane fadefour" id="pills-four" role="tabpanel"
                     aria-labelledby="pills-four-tab">
                    <div class="row">

                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق0.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden"></h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق.jfif"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>

                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>

                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block ">
                                                    <i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/اجاق4.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر3.jpeg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/توستر4.jpeg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/ساندویج 3.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن3.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن 4.png"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن5.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/سرخ کن 6.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-2">

                            <div class="product-item  p-4 bg-white rounded  overflow-hidden my-3">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز2.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


            </div>
        </div>
    </section>

    <section class="index-services  mb-3">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="item  text-center">
                        <span class="d-block w-100">
                            <i class="bi bi-chat-left-text">
                                <span class="title d-block w-100 py-1 mb-3">پشتیبانی ۲۴ ساعته</span>
                                <p >طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید
                                    ، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>
                            </i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="item  text-center">
                        <span class="d-block w-100">
                            <i class="bi bi-geo-alt">
                                <span class="title d-block w-100 py-1 mb-3">تحویل فوری</span>
                                <p >طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید
                                    ، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>
                            </i>
                            </i>
                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="item  text-center">
                        <span class="d-block w-100">
                            <i class="bi bi-file-earmark-check">
                                <span class="title d-block w-100 py-1 mb-3">گارانتی محصول</span>
                                <p >طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید
                                    ، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>
                            </i>

                        </span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4  col-sm-6">
                    <div class="item  text-center">
                        <span class="d-block w-100">
                            <i class="bi bi-patch-check">
                                <span class="title d-block w-100 py-1 mb-3">ضمانت بازگشت وجه</span>
                                <p >طراح گرافیک از این متن به عنوان عنصری از ترکیب بندی برای پر کردن صفحه و ارایه اولیه شکل ظاهری و کلی طرح سفارش گرفته شده استفاده می نماید
                                    ، تا از نظر گرافیکی نشانگر چگونگی نوع و اندازه فونت و ظاهر متن باشد.</p>
                            </i>
                        </span>
                    </div>
                </div>
            </div>
        </div>




    </section>

    <section class="product-view  ">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="slider-item  bg-white p-3  owl-carousel  owl-item ">
                        <div class="product-img  bg-white  p-3  rounded ">
                            <a href="#">
                                <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                    <img src="image/آشپزخانه/پلوپز1.jpg"  alt=""  class="d-table  mx-auto">
                                    <figcaption class="position-absolute w-100  h-100  text-center">
                                        <ul class="p-0">
                                            <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                 data-bs-placement="top" title="مشاهده محصول">
                                                <a href="#" class="d-inline-block">
                                                    <i class="bi bi-eye"></i></a></li>
                                            <li class="d-inline-block "data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                    "><i class="bi bi-heart"></i></a></li>
                                        </ul>
                                    </figcaption>


                                </figure>
                            </a>

                            <a href="#">
                                <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                            </a>
                            <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                            <div class="product-rate  text-center  mb-2">
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-warning"></i>
                                <i class="bi bi-star  text-dark"></i>
                            </div>
                            <div class="product-price  d-flex">

                                <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                            </div>


                            <div class="product-item  p-4 bg-white rounded my-3">
                                <a href="#">
                                    <figure  class="w-100  position-relative  overflow-hidden  border-bottom">
                                        <img src="image/آشپزخانه/پلوپز2.jpg"  alt=""  class="d-table  mx-auto" id="zoomb"
                                             data-zoom-image="image/آشپزخانه/پلوپز2.jpg">
                                        <figcaption class="position-absolute w-100  h-100  text-center">
                                            <ul class="p-0">
                                                <li  class="d-inline-block "data-bs-toggle="tooltip"
                                                     data-bs-placement="top" title="مشاهده محصول">
                                                    <a href="#" class="d-inline-block">
                                                        <i class="bi bi-eye"></i></a></li>
                                                <li class="d-inline-block "data-bs-toggle="tooltip"
                                                    data-bs-placement="left" title="افزودن به علاقمندی"><a href="#" class="d-inline-block
                                                            "><i class="bi bi-heart"></i></a></li>
                                            </ul>
                                        </figcaption>


                                    </figure>
                                </a>

                                <a href="#">
                                    <h5 class="m-0 py-2 text-center  overflow-hidden">سینک گرانیتی تست مدل k-454</h5>
                                </a>
                                <p class="text-center overflow-hidden  mt-3">لورم ایپسوم متن ساختگی با تولید سادگی
                                    نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                                <div class="product-rate  text-center  mb-2">
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-warning"></i>
                                    <i class="bi bi-star  text-dark"></i>
                                </div>
                                <div class="product-price  d-flex">

                                    <span class="d-inline-block  w-100  text-start">2.250.000 تومان</span>
                                    <del  class="d-inline-block w-100 text-end">2.450.000 تومان</del>
                                </div>

                            </div>


                        </div>

                    </div>
                </div>
    </section>
<?php
Includes::getFooter();
