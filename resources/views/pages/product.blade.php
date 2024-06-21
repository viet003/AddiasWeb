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
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7477b277ec6647919fa241a78609964a_9366/Giay_Alphaboost_V1_mau_xanh_la_IG3129_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Adizero Adios 8</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/eb1e2d9fd65242d588bddc35bd66e61e_9366/Giay_X_PLR_Boost_Mau_xanh_da_troi_ID9580_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Chạy Giày Adizero Adios 8</p>
                                <p>Nữ Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3c43063276d94cbbb23a74dcd292bd3c_9366/Giay_X_PLR_Boost_mau_xanh_la_ID9579_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày Alphaboost V1</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/91fa955f44f54f3bb9f3634bca6ecb5f_9366/GAZELLE_DJo_IE8503_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af6af2de73824e3bbbe435933a357fde_9366/Giay_Chay_Bo_Switch_FWD_mau_xanh_la_IG0676_HM1.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/520fd9246c6d439eb1d5a9f0842e4976_9366/Giay_X_PLR_Boost_Hong_IF2954_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Originals GAZELLE</p>
                                <p>Nam Originals</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/841d520758dc46879a708b4e316e6691_9366/Giay_X_PLR_Boost_Xam_IF2953_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>NNữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e711a37af3424846b5470558bcd2bcb7_9366/Giay_Ultraboost_Light_Xam_IE1759_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>Nữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/316297fac2c54c689ec192e376e79540_9366/gi%C3%A0y-ultraboost-light.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Ultraboost Light</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="more_product">
                <h1>
                    YOU MAY ALSO LIKE
                </h1>
                <div class="image-slider">
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7477b277ec6647919fa241a78609964a_9366/Giay_Alphaboost_V1_mau_xanh_la_IG3129_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Adizero Adios 8</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/eb1e2d9fd65242d588bddc35bd66e61e_9366/Giay_X_PLR_Boost_Mau_xanh_da_troi_ID9580_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Chạy Giày Adizero Adios 8</p>
                                <p>Nữ Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3c43063276d94cbbb23a74dcd292bd3c_9366/Giay_X_PLR_Boost_mau_xanh_la_ID9579_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày Alphaboost V1</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/91fa955f44f54f3bb9f3634bca6ecb5f_9366/GAZELLE_DJo_IE8503_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/af6af2de73824e3bbbe435933a357fde_9366/Giay_Chay_Bo_Switch_FWD_mau_xanh_la_IG0676_HM1.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Sportswear Giày X_PLR Boost</p>
                                <p>Nam Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/520fd9246c6d439eb1d5a9f0842e4976_9366/Giay_X_PLR_Boost_Hong_IF2954_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Originals GAZELLE</p>
                                <p>Nam Originals</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/841d520758dc46879a708b4e316e6691_9366/Giay_X_PLR_Boost_Xam_IF2953_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>NNữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/e711a37af3424846b5470558bcd2bcb7_9366/Giay_Ultraboost_Light_Xam_IE1759_01_standard.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nữ Sportswear Giày X_PLR Boost</p>
                                <p>Nữ Sportswear</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="image-item">
                            <div class="image">
                                <img src="https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/316297fac2c54c689ec192e376e79540_9366/gi%C3%A0y-ultraboost-light.jpg"
                                    alt="" />
                                <p>3.600.000<sup>đ</sup></p>
                            </div>
                            <div class="cost">
                                <p>Nam Chạy Giày Ultraboost Light</p>
                                <p>Nam Chạy</p>
                                <p>New</p>
                            </div>
                            <div class="_border">

                            </div>
                        </div>
                    </a>
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