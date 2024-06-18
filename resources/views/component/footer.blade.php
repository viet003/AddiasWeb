<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALADIN Stores</title>
    {{-- <link rel="icon" href="Infoproduct/logo.png" type="image/x-icon"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<body class="body">
    <footer>
        <div class="members">
            <div class="over">
                <h1>TRỞ THÀNH HỘI VIÊN & HƯỞNG ƯU ĐÃI 15%</h1>
                <div class="button-dk">
                    <a href="{{ route('product.show') }}">
                        <div class="_main_button">
                            <p>ĐĂNG KÝ MIỄN PHÍ <i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="opinion">
            <div class="wrap" style="padding: 0 50px">
                <h1 style="font-size: 20px;">Ý KIẾN CỦA BẠN</h1>
                <p>
                    Chúng tôi cố gắng phục vụ bạn tốt hơn và đánh giá cao phản hồi của bạn
                </p>
            </div>
        </div>
        <div class="FAQ">
            <div class="wrap">
                <ul class="FAQ_UL">
                    <li><a href="">Công cụ của cửa hàng</a></li>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Cơ hội nghề nghiệp</a></li>
                    <li><a href="">Trình theo dõi đơn hàng</a></li>
                    <li><a href="">Trợ Giúp Dịch Vụ Khách Hàng</a></li>
                    <li><a href="">Sơ đồ trang web</a></li>
                    <li><a href="">Giao hàng</a></li>
                </ul>
            </div>
        </div>
        <div class="info">
            <div class="over">
                <div class="properties">
                    <h1>SẢN PHẨM</h1>
                    <a href="" class="a_hover">Giày</a>
                    <a href="" class="a_hover">Quần áo</a>
                    <a href="" class="a_hover">Phụ kiện</a>
                    <a href="" class="a_hover">Hàng Mới Về</a>
                    <a href="" class="a_hover">Release Dates</a>
                    <a href="" class="a_hover">Member exclusives</a>
                    <a href="" class="a_hover">Outlet</a>
                </div>
                <div class="properties">
                    <h1>THỂ THAO</h1>
                    <a href="" class="a_hover">Chạy</a>
                    <a href="" class="a_hover">Đánh Gold</a>
                    <a href="" class="a_hover">Tập luyện</a>
                    <a href="" class="a_hover">Bóng đá</a>
                    <a href="" class="a_hover">Bóng rổ</a>
                    <a href="" class="a_hover">Quần vợt</a>
                    <a href="" class="a_hover">Ngoài trời</a>
                    <a href="" class="a_hover">Bơi lội</a>
                </div>
                <div class="properties">
                    <h1>BỘ SƯU TẬP</h1>
                    <a href="" class="a_hover">IVY PARK</a>
                    <a href="" class="a_hover">Giày adidas Pharrell Williams</a>
                    <a href="" class="a_hover">Giày Ultra Boost</a>
                    <a href="" class="a_hover">Giày Pureboost</a>
                    <a href="" class="a_hover">Predator</a>
                    <a href="" class="a_hover">X</a>
                    <a href="" class="a_hover">Copa</a>
                    <a href="" class="a_hover">Continental 80</a>
                    <a href="" class="a_hover">Giày Superstar</a>
                    <a href="" class="a_hover">Giày Stan Smith</a>
                    <a href="" class="a_hover">nmd</a>
                    <a href="" class="a_hover">ZX</a>
                </div>
                <div class="properties">
                    <h1>THÔNG TIN VỀ CÔNG TY</h1>
                    <a href="" class="a_hover">Giới Thiệu Về Chúng Tôi</a>
                    <a href="" class="a_hover">Cơ Hội Nghề Nghiệp</a>
                    <a href="" class="a_hover">Tin tức</a>
                    <a href="" class="a_hover">adidas Blog</a>
                </div>
                <div class="properties">
                    <h1>HỖ TRỢ</h1>
                    <a href="" class="a_hover">Trợ Giúp Dịch Vụ Khách Hàng</a>
                    <a href="" class="a_hover">Công cụ tìm kiếm cửa hàng</a>
                    <a href="" class="a_hover">Biểu Đồ Kích Cỡ</a>
                    <a href="" class="a_hover">Thanh toán</a>
                    <a href="" class="a_hover">Giao hàng</a>
                    <a href="" class="a_hover">Trả Hàng & Hoàn Tiền</a>
                    <a href="" class="a_hover">khuyến mãi</a>
                    <a href="" class="a_hover">Sơ đồ trang web</a>
                </div>
                <div class="properties flex flex-col gap-3">
                    <h1>THEO DÕI CHÚNG TÔI</h1>
                    <a href="" class="a_hover"><i class="fa-brands fa-facebook"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-twitter"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-telegram"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="" class="a_hover"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="policy">
            <ul>
                <li><a href="">Cài Đặt Cookie</a></li>
                <li><a href="">Chính sách Bảo mật</a></li>
                <li><a href="">Điều Khoản và Điều Kiện</a></li>
                <li><a href="">XUẤT BẢN BỞI</a></li>
                <li><a href="">© 2020 Công ty TNHH Team 15 Việt Nam</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>