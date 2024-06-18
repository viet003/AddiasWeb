<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cart.css')}}">
    <title>Giỏ hàng</title>
</head>

<body class="bg-light">

    {{-- header --}}
    @include('component.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">
                <div class="row mt-5 mb-5 gx-3">
                    <!-- left side div -->
                    <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                        <div class="card p-4">
                            <h2 class="py-4 font-weight-bold">Giỏ hàng</h2>
                            <div class="row">
                                <!-- cart images div -->
                                <div
                                    class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                                    <img src="images/img2.png" class="img-fluid" alt="cart img">
                                </div>




                                <!-- cart product details -->
                                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                    <div class="row">
                                        <!-- product name  -->
                                        <div class="col-6 card-title">
                                            <h1 class="mb-4 product_name">Blue Zara Shirt</h1>
                                            <p class="mb-2">SHIRT - BLUE</p>
                                            <p class="mb-2">COLOR: BLUE</p>
                                            <p class="mb-3">SIZE: M</p>
                                        </div>
                                        <!-- quantity inc dec -->
                                        <div class="col-6">
                                            <ul class="pagination justify-content-end set_quantity">
                                                <li class="page-item">
                                                    <button class="page-link "
                                                        onclick="decreaseNumber('textbox','itemval')">
                                                        <i class="fas fa-minus"></i> </button>
                                                </li>
                                                <li class="page-item"><input type="text" name="" class="page-link"
                                                        value="0" id="textbox">
                                                </li>
                                                <li class="page-item">
                                                    <button class="page-link"
                                                        onclick="increaseNumber('textbox','itemval')"> <i
                                                            class="fas fa-plus"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- //remover move and price -->
                                    <div class="row">
                                        <div class="col-8 d-flex justify-content-between remove_wish">
                                            <p><i class="fas fa-trash-alt"></i> REMOVE ITEM</p>
                                            <p><i class="fas fa-heart"></i>MOVE TO WISH LIST </p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end price_money">
                                            <h3>$<span id="itemval">0.00 </span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <!-- 2nd cart product -->
                        <div class="card p-4">
                            <div class="row">
                                <!-- cart images div -->
                                <div
                                    class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                                    <img src="images/img3.png" class="img-fluid" alt="cart img">
                                </div>




                                <!-- cart product details -->
                                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                    <div class="row">
                                        <!-- product name  -->
                                        <div class="col-6 card-title">
                                            <h1 class="mb-4 product_name">Green Zara Shirt</h1>
                                            <p class="mb-2">SHIRT - Green</p>
                                            <p class="mb-2">COLOR: Green</p>
                                            <p class="mb-3">SIZE: M</p>
                                        </div>
                                        <!-- quantity inc dec -->
                                        <div class="col-6">
                                            <ul class="pagination justify-content-end set_quantity">
                                                <li class="page-item">
                                                    <button class="page-link "
                                                        onclick="decreaseNumber('textbox1','itemval1')"> <i
                                                            class="fas fa-minus"></i> </button>
                                                </li>
                                                <li class="page-item"><input type="text" name="" class="page-link"
                                                        value="0" id="textbox1">
                                                </li>
                                                <li class="page-item">
                                                    <button class="page-link"
                                                        onclick="increaseNumber('textbox1','itemval1')"> <i
                                                            class="fas fa-plus"></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- //remover move and price -->
                                    <div class="row">
                                        <div class="col-8 d-flex justify-content-between remove_wish">
                                            <p><i class="fas fa-trash-alt"></i> REMOVE ITEM</p>
                                            <p><i class="fas fa-heart"></i>MOVE TO WISH LIST </p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end price_money">
                                            <h3>$<span id="itemval1">0.00 </span> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- right side div -->
                    <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                        <div class="right_side p-3 shadow bg-white">
                            <h2 class="product_name mb-5">Tổng thanh toán</h2>
                            <div class="price_indiv d-flex justify-content-between">
                                <p>Giá trị sản phẩm</p>
                                <p>$<span id="product_total_amt">0.00</span></p>
                            </div>
                            <div class="price_indiv d-flex justify-content-between">
                                <p>Phí vận chuyển</p>
                                <p>$<span id="shipping_charge">50.0</span></p>
                            </div>
                            <hr />
                            <div class="total-amt d-flex justify-content-between font-weight-bold">
                                <p>Tổng thanh toán (bao gồm VAT)</p>
                                <p>$<span id="total_cart_amt">0.00</span></p>
                            </div>
                            <button class="btn btn-primary text-uppercase">Checkout</button>
                        </div>
                        <!-- discount code part -->
                        <div class="discount_code mt-3 shadow">
                            <div class="card">
                                <div class="card-body">
                                    <a class="d-flex justify-content-between" data-toggle="collapse"
                                        href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Thêm voucher
                                        <span><i class="fas fa-chevron-down pt-1"></i></span>
                                    </a>
                                    <div class="collapse" id="collapseExample">
                                        <div class="mt-3">
                                            <input type="text" name="" id="discount_code1"
                                                class="form-control font-weight-bold"
                                                placeholder="Thêm voucher tại đây">
                                        </div>
                                        <button class="btn btn-primary btn-sm mt-3"
                                            onclick="discount_code()">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <!-- discount code ends -->
                        <div class="mt-3 shadow p-3 bg-white">
                            <div class="pt-4">
                                <h5 class="mb-4">Ngày giao hàng dự kiến</h5>
                                <p>July 27th 2020 - July 29th 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- header --}}
    @include('component.footer')


    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>


    <script type="text/javascript" src="{{ asset('frontend/js/cart.js')}}">
       
    </script>
</body>

</html>