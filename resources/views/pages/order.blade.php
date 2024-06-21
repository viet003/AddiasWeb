<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cart.css')}}">
    <title>V3Shop</title>
    <link rel="icon" href=" {{ asset('frontend/images/logo.png') }} " type="image/x-icon">
</head>

<body class="bg-light">

    {{-- header --}}
    @include('component.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto" style="">
                <div class="row mt-5 mb-5 gx-3">
                    <!-- left side div -->
                    <h2 class="py-4 font-weight-bold bg-light">Thanh toán</h2>
                    <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">

                        <div class="card p-4">
                            <div class="row">
                                <!-- cart images div -->
                                <div
                                    class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                                    <img src="{{ $item->product->images->first()->path }}" class="img-fluid"
                                        alt="cart img">
                                </div>

                                <!-- cart product details -->
                                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                    <div class="row">
                                        <!-- product name  -->
                                        <div class="col-6 card-title">
                                            <h1 class="mb-4 product_name">{{ $item->product->name_product }}</h1>
                                            <p class="mb-2">GIỚI TÍNH: {{ $item->product->gender }}</p>
                                            <p class="mb-2">COLOR: {{ $item->color }}</p>
                                            <p class="mb-3">SIZE: {{ $item->size }}</p>
                                        </div>
                                        <!-- quantity inc dec -->
                                        <div class="col-6">
                                            <ul class="pagination justify-content-end set_quantity">
                                                <li class="page-item">
                                                    <button class="page-link"
                                                        onclick="decreaseNumber('textbox{{ $item->id }}', 'itemval{{ $item->id }}')">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </li>
                                                <li class="page-item">
                                                    <input type="text" name="" class="page-link count-total" value="0"
                                                        id="textbox{{ $item->id }}">
                                                </li>
                                                <li class="page-item">
                                                    <button class="page-link"
                                                        onclick="increaseNumber('textbox{{ $item->id }}', 'itemval{{ $item->id }}')">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- //remover move and price -->
                                    <div class="row">
                                        <div class="col-8 d-flex justify-content-between remove_wish">
                                            <p><i class="fas fa-heart"></i> THÊM VÀO FAVORITE</p>
                                        </div>
                                        <div class="col-4 d-flex justify-content-end price_money">
                                            <h3>$<span id="itemval{{ $item->id }}">0.00</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                        function decreaseNumber(inputId, valueId) {
                            var input = document.getElementById(inputId);
                            var value = document.getElementById(valueId);
                            var total = document.getElementById('sanpham');
                            var totals = document.getElementById('total');

                            var currentValue = parseInt(input.value);

                            if (currentValue > 0) {
                                input.value = parseInt(currentValue - 1);
                                value.textContent = (input.value * "{{ $item->product->price }}").toFixed(2);
                                total.textContent = (input.value * "{{ $item->product->price }}").toFixed(2);
                                totals.textContent = (input.value * "{{ $item->product->price }}" + 50).toFixed(2);
                            }
                        }
                    
                        function increaseNumber(inputId, valueId) {
                            var input = document.getElementById(inputId);
                            var value = document.getElementById(valueId);
                            var total = document.getElementById('sanpham')
                            var totals = document.getElementById('total');

                            var currentValue = parseInt(input.value);
                            input.value = parseInt(currentValue + 1);
                            value.textContent = (input.value  * "{{ $item->product->price }}").toFixed(2);
                            total.textContent = (input.value * "{{ $item->product->price }}").toFixed(2);
                            totals.textContent = (input.value * "{{ $item->product->price }}" + 50).toFixed(2);
                        }
                    </script>
                    <!-- right side div -->
                    <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                        <div class="right_side p-3 shadow bg-white">
                            <h2 class="product_name mb-5">Tổng thanh toán</h2>
                            <div class="price_indiv d-flex justify-content-between">
                                <p>Giá trị sản phẩm</p>
                                <p id="sanpham">$<span id="product_total_amt">0.00</span></p>
                            </div>
                            <div class="price_indiv d-flex justify-content-between">
                                <p>Phí vận chuyển</p>
                                <p>$<span id="shipping_charge">50.0</span></p>
                            </div>
                            <hr />
                            <div class="total-amt d-flex justify-content-between font-weight-bold">
                                <p>Tổng thanh toán (bao gồm VAT)</p>
                                <p id="total">$<span id="total_cart_amt">0.00</span></p>
                            </div>
                            <button id="payOrder" class="btn btn-primary text-uppercase" id="thanhtoan">Thanh
                                toán</button>
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
                                <p>Từ 20/6/2024 - đến 25/6/2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- header --}}
    @include('component.footer')

    <script>
        $(document).ready(function() {
            var authToken = @json(Auth::check() ? Auth::user()->accesToken : '');
    
            $('#payOrder').on('click', function() {
                var product_id = "{{ $item->product->id }}";
                var color = "{{ $item->color }}";
                var size = "{{ $item->size }}";
                var customer_id = "{{ Auth::user()->customer->id }}";
                var total = $('#total').text();
                var quantity = $('.count-total').val();
    
                // console.log(product_id, color, size, customer_id, total, quantity);
    
                if (parseInt(quantity) != 0) {
                    $.ajax({
                        url: '/api/checkout',
                        type: 'POST',
                        headers: {
                            'Authorization': authToken ? 'Bearer ' + authToken : '',
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: JSON.stringify({
                            product_id: product_id,
                            customer_id: customer_id,
                            color: color,
                            size: size,
                            quantity: quantity,
                            total: total
                        }),
                        success: function(response) {
                            if (response.status === 200) {
                                deletefromcart();
                            } else {
                                alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                            if (xhr.status === 401) {
                                alert('Bạn cần đăng nhập để thanh toán.');
                                window.location.href = "{{ route('login') }}";
                            } else if(xhr.status === 422) { 
                                alert('Vui lòng cập nhật thông tin giao hàng!.');
                                window.location.href = "{{ route('user.show') }}";
                            } else {
                                alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                            }
                        }
                    });
                } 
            });
    
            function deletefromcart() {
                var itemId = "{{ $item->id }}";
    
                $.ajax({
                    url: '/api/deletefromcart',
                    type: 'POST',
                    headers: {
                        'Authorization': authToken ? 'Bearer ' + authToken : '',
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: JSON.stringify({ id: itemId }),
                    success: function(response) {
                        if (response.status === 200) {
                            alert('Thành công!');
                            window.location.href = "{{ route('shop') }}";
                        } else {
                            alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                        if (xhr.status === 401) {
                            alert('Bạn cần đăng nhập để tiếp tục thực hiện!.');
                            window.location.href = "{{ route('login') }}";
                        } else {
                            alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                        }
                    }
                });
            }
        });
    </script>
    


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/cart.js') }}" />


</body>

</html>