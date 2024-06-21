<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>V3Shop</title>
    <link rel="icon" href="Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/product.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href=" {{ asset('frontend/images/logo.png') }} " type="image/x-icon">
</head>

<body class="body">
    {{-- header --}}
    @include('component.header')

    <div class="main_info">
        <div class="left_content">
            <div class="parent">
                <ul class="back">
                    <li>
                        <a href="#"><i class="fa-solid fa-arrow-left"></i> Trở lại</a>
                    </li>
                    <li>
                        <a href="#">Trang chủ</a>
                    </li>
                    <li>
                        <a href="#">Original</a>
                    </li>
                    <li>
                        <a href="#">Giày</a>
                    </li>
                </ul>
                <div class="im">
                    @foreach ($images->take(4) as $image)
                        <div class="cover">
                            <img src="{{ $image->path }}"
                                alt="">
                        </div>
                    @endforeach
                </div>
                <div class="toggle">
                    <div class="im">
                        @foreach ($images->slice(4) as $image)
                            <div class="cover">
                                <img src="{{ $image->path }}"
                                    alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="show_more">
                    <p>Hiện thêm</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
            </div>
            <div class="wrap_n">
                <div class="title_1">
                    <p>Mô tả</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="Ds_info_1">
                    <div>
                        <div class="text">
                            <h1>
                                ĐÔI GIÀY PHONG CÁCH GOLF HỢP TÁC THIẾT KẾ CÙNG BAPE, CÓ SỬ DỤNG CHẤT LIỆU
                                TÁI CHẾ.
                            </h1>
                            <span>
                                Dòng giày adidas Stan Smith đặc trưng khám phá thế giới bất tận của BAPE —
                                kết quả là một thiết kế dành cho sân golf. Với thiết kế phù hợp ở cả sân
                                golf và clubhouse, đôi giày này hòa trộn phong cách tennis cổ điển với các
                                chi tiết phù hợp với bộ môn golf. Thân giày bằng chất liệu tổng hợp và đế
                                ngoài đinh liền bằng cao su cho cảm giác thoải mái và độ bám suốt ngày dài,
                                cùng ba tùy chọn dây giày cho phép bạn thỏa sức thay đổi phong cách tùy tâm
                                trạng. Tất cả đi kèm hộp giày đặc biệt mà bạn sẽ muốn nhìn ngắm mãi về sau.

                                Làm từ một loạt chất liệu tái chế, thân giày có chứa tối thiểu 50% thành
                                phần tái chế. Sản phẩm này đại diện cho một trong số rất nhiều các giải pháp
                                của chúng tôi hướng tới chấm dứt rác thải nhựa.
                            </span>
                        </div>
                        <div class="img_Ds">
                            <img src="{{ $images->first()->path }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="title_2">
                    <p>Thông tin chi tiết</p>
                    <i class="fa-solid fa-chevron-down"></i>
                </div>
                <div class="Ds_info_2">
                    <div class="text">
                        <h1>
                            ĐÔI GIÀY PHONG CÁCH GOLF HỢP TÁC THIẾT KẾ CÙNG BAPE, CÓ SỬ DỤNG CHẤT LIỆU
                            TÁI CHẾ.
                        </h1>
                        <span>
                            Dòng giày adidas Stan Smith đặc trưng khám phá thế giới bất tận của BAPE —
                            kết quả là một thiết kế dành cho sân golf. Với thiết kế phù hợp ở cả sân
                            golf và clubhouse, đôi giày này hòa trộn phong cách tennis cổ điển với các
                            chi tiết phù hợp với bộ môn golf. Thân giày bằng chất liệu tổng hợp và đế
                            ngoài đinh liền bằng cao su cho cảm giác thoải mái và độ bám suốt ngày dài,
                            cùng ba tùy chọn dây giày cho phép bạn thỏa sức thay đổi phong cách tùy tâm
                            trạng. Tất cả đi kèm hộp giày đặc biệt mà bạn sẽ muốn nhìn ngắm mãi về sau.

                            Làm từ một loạt chất liệu tái chế, thân giày có chứa tối thiểu 50% thành
                            phần tái chế. Sản phẩm này đại diện cho một trong số rất nhiều các giải pháp
                            của chúng tôi hướng tới chấm dứt rác thải nhựa.
                        </span>
                    </div>
                </div>
            </div>
            <div class="more_product">
                <h1>
                    COMPLETE THE LOOK
                </h1>
                <div class="image-slider">
                    @if (count($products) != 0)
                        @foreach ($products as $product)
                            <a href="{{ url('/product/' . $product->id) }}">
                                <div class="image-item">
                                    @if ($product->images->first())
                                        <div class="image">
                                            <img src="{{ $product->images->first()->path }}"
                                                alt="" />
                                            <p>{{ $product->price }}<sup>đ</sup></p>
                                        </div>
                                    @else
                                        <div class="image">
                                            <img src=""
                                                alt="nope" />
                                            <p>{{ $product->price }}<sup>đ</sup></p>
                                        </div>
                                    @endif
                                    <div class="cost">
                                        <p>{{ $product->name_product }}</p>
                                        <p>{{ $product->gender }} Chạy</p>
                                        <p>New</p>
                                    </div>
                                    <div class="_border">

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif                   
                </div>
            </div>
            <div class="more_product">
                <h1>
                    YOU MAY ALSO LIKE
                </h1>
                <div class="image-slider">
                    @if (count($new_products) != 0)
                        @foreach ($new_products as $item)
                            <a href="{{ url('/product/' . $item->id) }}">
                                <div class="image-item">
                                    @if ($item->images->first())
                                        <div class="image">
                                            <img src="{{ $item->images->first()->path }}"
                                                alt="" />
                                            <p>{{ $item->price }}<sup>đ</sup></p>
                                        </div>
                                    @else
                                        <div class="image">
                                            <img src=""
                                                alt="nope" />
                                            <p>{{ $item->price }}<sup>đ</sup></p>
                                        </div>
                                    @endif
                                    <div class="cost">
                                        <p>{{ $item->name_product }}</p>
                                        <p>{{ $item->gender }} Chạy</p>
                                        <p>New</p>
                                    </div>
                                    <div class="_border">

                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="right_content">
            <div>
                <p>{{ $product->brand }}</p>
                <h1>{{ $product->name_product }}</h1>
                <p>{{ $product->price}}₫</p>
            </div>
            <div>
                <p style="font-weight: 300;">
                    Đơn hàng được xác nhận sau khi xác nhận thanh toán. Không đổi hàng, trả hàng hay hoàn tiền trừ
                    trường hợp pháp luật có quy định khác. Sản phẩm này không áp dụng bất kỳ chương trình ưu đãi và
                    khuyến mãi nào. Giới hạn số lượng 1 sản phẩm trên mỗi đơn hàng.
                </p>
            </div>
            <div class="product-color">
                <button class="color-option" value="white">Cloud White</button>
                <button class="color-option" value="black">Cloud Black</button>
                <button class="color-option" value="green">Green</button>
            </div>
            <div class="product-size" id="product-size">
                <button class="size-option" value="36">Size 36</button>
                <button class="size-option" value="37">Size 37</button>
                <button class="size-option" value="38">Size 38</button> 
                <button class="size-option" value="39">Size 39</button>
                <button class="size-option" value="40">Size 40</button>
                <button class="size-option" value="41">Size 41</button>
                <button class="size-option" value="42">Size 42</button>
                <button class="size-option" value="43">Size 43</button>
                <button class="size-option" value="44">Size 44</button>
                <button class="size-option" value="45">Size 45</button>
            </div>
            <div class="add-to-cart">
                <h3>
                    ĐÃ MỞ BÁN TRÊN TOÀN QUỐC, OCTOBER 21ST TẠI 10:00
                </h3>
                <div class="button-dk">
                    <div>
                        <div class="_main_button" id="submit-button">
                            <p href="">THÊM VÀO GIỎ HÀNG <i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                    </div>
                </div>
            </div>

            <div  class="add-to-cart">
                <span>
                    <i class="fa-solid fa-truck-fast"></i> <a href=""> FREE SHIPPING CHO THÀNH VIÊN ADCLUB</a>
                </span>
                <span>
                    <i class="fa-solid fa-right-left"></i> <a href=""></i> HOÀN TRẢ DỄ DÀNG</a>
                </span>
            </div>
        </div>
    </div>
    
    {{-- footer --}}
    @include('component.footer')

    <script>
        $(document).ready(function() {
            let selectedColor = '';
            let selectedSize = '';
            var authToken = @json(Auth::check() ? Auth::user()->accesToken : '');
            var user_id = @json(Auth::check() ? Auth::user()->id : '');

            $('.color-option').on('click', function() {
                selectedColor = $(this).val();
                $('.color-option').removeClass('active-button-size-color');
                $(this).addClass('active-button-size-color');
            });
    
            $('.size-option').on('click', function() {
                selectedSize = $(this).val();
                $('.size-option').removeClass('active-button-size-color');
                $(this).addClass('active-button-size-color');
            });
    
            $('#submit-button').on('click', function() {
                const data = {
                    user_id : user_id,
                    product_id: "{{ $product->id }}",
                    color: selectedColor,
                    size: selectedSize,
                };
    
                $.ajax({
                    url: '/api/addtocart',
                    type: 'POST',
                    headers: authToken ? { 'Authorization': 'Bearer ' + authToken } : {},
                    data: JSON.stringify(data),
                    contentType: 'application/json',
                    success: function(response) {
                        if(response.status === 200) {
                            console.log('Success:', response);
                            alert('Thêm sản phẩm thành công!');
                            window.location.href = "{{ route('cart.show') }}";
                        }
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status === 401) { 
                            alert('Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.');
                            window.location.href = "{{ route('login') }}"; 
                        } else {
                            alert('Vui lòng lựa chọn đầy đủ thông tin!');
                        }
                    }
                });
            });
        });
    </script>

    <script src="{{ asset('frontend/js/product.js') }}"></script>

</body>

</html>