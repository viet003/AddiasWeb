<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V3Shop</title>
    <link rel="icon" href="Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="icon" href=" {{ asset('frontend/images/logo.png') }} " type="image/x-icon">
</head>

<body class="body">
    <div class="no">
    </div>
    <div class="ship">
        <div class="wrap">
            <div>
                <div class="x">
                    <p style="font-size: 20px;"><i class="fa-solid fa-x"></i></p>
                </div>
            </div>
            <div class="aboutship">
                <div>
                    <h1>GIAO HÀNG MIỄN PHÍ CHO THÀNH VIÊN CỦA ADICLUB</h1>
                    <br>
                    <p>Đăng ký thành viên adiClub để hưởng thụ dịch vụ giao hàng miễn phí! Hoặc bạn chỉ được nhận ưu đãi
                        miễn phí giao hàng với hóa đơn có trị giá ít nhất 1.6 triệu đồng</p>
                    <br>
                    <a href="">THAM GIA NGAY</a>
                </div>
                <div>
                    <h1>TRẢ HÀNG DỄ DÀNG</h1>
                    <br>
                    <p>Nếu bạn không hài lòng với đơn hàng của mình, bạn có thể được hoàn lại tiền. Vui lòng xem Chính
                        Sách Trả Hàng của chúng tôi để biết thêm chi tiết.</p>
                    <br>
                    <a href="">TRẢ HÀNG DỄ DÀNG</a>
                </div>
            </div>
        </div>
    </div>
    <header class="title">
        <div class="text_animation">
            <p style="cursor: pointer; text-align:center; height:5px; color:#fff">GIAO HÀNG MIỄN PHÍ CHO CÁC THÀNH VIÊN CỦA ADICLUB&nbsp&nbsp<i
                    class="fa-solid fa-chevron-down"></i></p>
        </div>
        <div class="navbar">
            <a href="{{ route('shop') }}">
                <div class="logo">
                    <div class="_logo">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiC0McdOqapsnG4dNrKc4ZfVy-2ffgBThzph2K26c8oQ&s"
                            alt="">
                    </div>
                </div>
            </a>
            <div class="main">
                <ul class="subnav">
                    <li>
                        <a href="{{ route('male') }}"><b>NAM</b></a>
                        <div class="sub_content">
                            <div class="content_link">
                                <div class="content_1">
                                    <a href="" class="a_hover"><b>NỔI BẬT</b></a>
                                    <a href="" class="a_hover">Hàng mới về</a>
                                    <a href="" class="a_hover">Member excluslves</a>
                                    <a href="" class="a_hover">Những mặt hàng bán chạy nhất tuần</a><br>
                                    <a href="" class="a_hover">Adizero</a>
                                    <a href="" class="a_hover">Samba</a>
                                    <a href="" class="a_hover">Gazelle</a>
                                    <a href="" class="a_hover">Ultraboost</a>
                                    <a href="" class="a_hover">Stan Smith</a>
                                    <a href="" class="a_hover">Superstar</a>
                                    <a href="" class="a_hover">Adilette</a>
                                </div>
                                <div class="content_2">
                                    <a href="Male/Shoemale.html" class="a_hover"><b>GIÀY</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Bóng đá</a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">NGoài trời</a>
                                    <a href="" class="a_hover">Bóng rổ</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="Male/Fashionmale.html" class="a_hover"><b>QUẦN ÁO</b></a>
                                    <a href="" class="a_hover">Áo phông & Áo polo</a>
                                    <a href="" class="a_hover">Áo Jersay</a>
                                    <a href="" class="a_hover">Áo hodie & Áo khoác</a>
                                    <a href="" class="a_hover">Áo nỉ và Bộ đồ thể thao</a>
                                    <a href="" class="a_hover">Quần</a>
                                    <a href="" class="a_hover">Quần bò</a>
                                    <a href="" class="a_hover">Quần sóoc</a>
                                    <a href="" class="a_hover">Áo thun Compression layers</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>PHỤ KIỆN</b></a>
                                    <a href="" class="a_hover">Tất Cả Túi</a>
                                    <a href="" class="a_hover">Ba lô</a>
                                    <a href="" class="a_hover">Túi Tập Luyện</a>
                                    <a href="" class="a_hover">Tất</a>
                                    <a href="" class="a_hover">Mũ Lưỡi Trai & Đội Đầu</a>
                                    <a href="" class="a_hover">Găng Tay</a>
                                    <a href="" class="a_hover">Bóng</a>
                                    <a href="" class="a_hover">Nẹp ỐNg Chân & Băng Buộc</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>GIẢM GIÁ</b></a>
                                    <a href="" class="a_hover">Giày</a>
                                    <a href="" class="a_hover">Quần áo</a>
                                    <a href="" class="a_hover">Phụ kiện</a>
                                </div>
                                <div class="content_3">
                                    <a href="" class="a_hover"><b>THỂ THAO</b></a>
                                    <a href="" class="a_hover">Bóng đá</a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Basketball</a>
                                    <a href="" class="a_hover">Bơi lội</a>
                                    <a href="" class="a_hover">Đánh gôn</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Basketball</a>
                                </div>
                                <div class="content_4">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả giày nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả quần áo nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả phụ kiện dành cho nam</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả Nam</a>
                                </div>
                                <div class="content_6">
                                    <a href="" class="a_hover">Our Men's Better Choices Rage</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('female') }}"><b>NỮ</b></a>
                        <div class="sub_content">
                            <div class="content_link">
                                <div class="content_1">
                                    <a href="" class="a_hover"><b>NỔI BẬT</b></a>
                                    <a href="" class="a_hover">Hàng mới về</a>
                                    <a href="" class="a_hover">Member excluslves</a>
                                    <a href="" class="a_hover">Những mặt hàng bán chạy nhất tuần</a><br>
                                    <a href="" class="a_hover">Adizero</a>
                                    <a href="" class="a_hover">Samba</a>
                                    <a href="" class="a_hover">Gazelle</a>
                                    <a href="" class="a_hover">Ultraboost</a>
                                    <a href="" class="a_hover">Stan Smith</a>
                                    <a href="" class="a_hover">Superstar</a>
                                    <a href="" class="a_hover">FORUM</a>
                                    <a href="" class="a_hover">STELLA MACCARTNEY</a>
                                </div>
                                <div class="content_2">
                                    <a href="Female/ShoeFemale.html" class="a_hover"><b>GIÀY</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="Female/FashionFemale.html" class="a_hover"><b>QUẦN ÁO</b></a>
                                    <a href="" class="a_hover">Áo phông & Áo không tay</a>
                                    <a href="" class="a_hover">Áo Nỉ</a>
                                    <a href="" class="a_hover">Áo hodie & Áo khoác</a>
                                    <a href="" class="a_hover">Áo nỉ và Bộ đồ thể thao</a>
                                    <a href="" class="a_hover">Quần</a>
                                    <a href="" class="a_hover">Leggings</a>
                                    <a href="" class="a_hover">Quần sóoc</a>
                                    <a href="" class="a_hover">Váy liền</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>PHỤ KIỆN</b></a>
                                    <a href="" class="a_hover">Tất Cả Túi</a>
                                    <a href="" class="a_hover">Ba lô</a>
                                    <a href="" class="a_hover">Túi Tập Luyện</a>
                                    <a href="" class="a_hover">Tất</a>
                                    <a href="" class="a_hover">Mũ Lưỡi Trai & Đội Đầu</a>
                                    <a href="" class="a_hover">Găng Tay</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>GIẢM GIÁ</b></a>
                                    <a href="" class="a_hover">Giày</a>
                                    <a href="" class="a_hover">Quần áo</a>
                                    <a href="" class="a_hover">Phụ kiện</a>
                                </div>
                                <div class="content_3">
                                    <a href="" class="a_hover"><b>THỂ THAO</b></a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Tập Yoga</a>
                                    <a href="" class="a_hover">Đánh gôn</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Basketball</a>
                                </div>
                                <div class="content_4">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả giày nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả quần áo nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả phụ kiện dành cho nữ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover"> Tất cả Nữ</a>
                                </div>
                                <div class="content_6">
                                    <a href="" class="a_hover">Tất cả đồ dành cho nữ </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="Kids/pageKid.html"><b>TRẺ EM</b></a>
                        <div class="sub_content">
                            <div class="content_link">
                                <div class="content_1">
                                    <a href="" class="a_hover"><b>NỔI BẬT</b></a>
                                    <a href="" class="a_hover">Hàng mới về</a>
                                    <a href="" class="a_hover">Mặt hàng bán chạy trong tuần</a><br>
                                    <a href="" class="a_hover">Hiệu năng</a>
                                    <a href="" class="a_hover">Bộ sưu tập Hellokitty</a>
                                    <a href="" class="a_hover">Originals</a>
                                    <a href="" class="a_hover">Lego</a>
                                    <a href="" class="a_hover">adicolor</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                    <a href="" class="a_hover">Superstar</a><br>
                                    <a href="" class="a_hover">MEMBERS WEAK</a>
                                </div>
                                <div class="content_2">
                                    <a href="Female/ShoeFemale.html" class="a_hover"><b>THANH THIẾU NIÊN(8 - 16)</b></a>
                                    <a href="" class="a_hover">Dòng sản phẩm Originals</a>
                                    <a href="" class="a_hover">Running</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Dep</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="Female/FashionFemale.html" class="a_hover"><b>TRẺ EM(4 - 8)</b></a>
                                    <a href="" class="a_hover">Áo phông & Áo không tay</a>
                                    <a href="" class="a_hover">Áo Nỉ</a>
                                    <a href="" class="a_hover">Áo hodie & Áo khoác</a>
                                    <a href="" class="a_hover">Áo nỉ và Bộ đồ thể thao</a>
                                    <a href="" class="a_hover">Quần</a>
                                    <a href="" class="a_hover">Leggings</a>
                                    <a href="" class="a_hover">Quần sóoc</a>
                                    <a href="" class="a_hover">Váy liền</a>
                                    <a href="" class="a_hover">Sportswear</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>TRẺ NHỎ VÀ TRẺ MỚI BIẾT ĐI (1 - 4)</b></a>
                                    <a href="" class="a_hover">Tất Cả Túi</a>
                                    <a href="" class="a_hover">Ba lô</a>
                                    <a href="" class="a_hover">Túi Tập Luyện</a>
                                    <a href="" class="a_hover">Tất</a>
                                    <a href="" class="a_hover">Mũ Lưỡi Trai & Đội Đầu</a>
                                    <a href="" class="a_hover">Găng Tay</a>
                                </div>
                                <div class="content_2">
                                    <a href="" class="a_hover"><b>GIẢM GIÁ</b></a>
                                    <a href="" class="a_hover">Giày</a>
                                    <a href="" class="a_hover">Quần áo</a>
                                    <a href="" class="a_hover">Phụ kiện</a>
                                </div>
                                <div class="content_3">
                                    <a href="" class="a_hover"><b>THỂ THAO</b></a>
                                    <a href="" class="a_hover">Chạy</a>
                                    <a href="" class="a_hover">Tập luyện</a>
                                    <a href="" class="a_hover">Tập Yoga</a>
                                    <a href="" class="a_hover">Đánh gôn</a>
                                    <a href="" class="a_hover">Quần vợt</a>
                                    <a href="" class="a_hover">Basketball</a>
                                </div>
                                <div class="content_4">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho trẻ em</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho thanh thiếu niên</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho trẻ em</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho trẻ nhỏ</a>
                                </div>
                                <div class="content_5">
                                    <a href="" class="a_hover"> Giảm Giá</a>
                                </div>
                                <div class="content_6">
                                    <a href="" class="a_hover">Tất cả sản phẩm dành cho thể thao</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="">THỂ THAO</a>
                        <div class="sub_content">

                        </div>
                    </li>
                    <li>
                        <a href="">CÁC NHÃN HIỆU</a>
                        <div class="sub_content">

                        </div>
                    </li>
                    <li>
                        <a href="">SẮP & MỚI RA MẮT</a>
                        <div class="sub_content">

                        </div>
                    </li>
                    <li>
                        <a href=""><b>GIẢM GIÁ</b></a>
                        <div class="sub_content">

                        </div>
                    </li>
                </ul>
            </div>
            <div class="search_help">
                <div class="help_mn">
                    <ul class="help_ul">
                        <li><a class="button-mn" href="{{ route('admin') }}">Quản lý</a></li>
                        <li><button class="button-mn">Trợ giúp</button></li>
                        <li><button class="button-mn">Trình theo dõi đơn hàng</button></li>
                        <li>
                            @if(Auth::check())
                                <form action="{{ url('logout') }}" method="POST">
                                    @csrf
                                    <button class="button-mn" type="submit">Đăng xuất</button>
                                </form>
                            @else
                                <a class="button-mn" href="{{ route('register') }}">Đăng ký thành viên</a>
                            @endif
                        </li>                        
                        <li class="language_select">
                            <i class="fa-solid fa-chevron-down"></i>
                            <div class="_language_change">
                                <div>
                                    <p>Chọn ngôn ngữ</p>
                                </div>
                                <select name="language" id="language">
                                    <option value="Tiếng việt">Tiếng Việt</option>
                                    <option value="Tiếng Anh">Tiếng Anh</option>
                                </select>
                                <div class="button">
                                    <div class="_main_button">
                                        <p>LƯU THAY ĐỔI<i class="fa-solid fa-arrow-right"></i></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="search">
                    <form action="{{ route('search') }}" method="GET" class="form">
                        <input type="text" name="query" id="search" placeholder="Tìm kiếm">
                        <button type="submit" class="search-button"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    @if(Auth::check())
                        <a class="log_user" href="{{ route('user.show') }}">{{ substr(Auth::user()->user_name, 0, 1) }}</a>
                    @else
                        <a href="{{ route('login') }}" style="font-size: 20px"><i class="fa-regular fa-user"></i></a>
                    @endif
                    <i class="fa-regular fa-heart"></i>
                    <div class="cart-icon">
                        <a style="font-size: 22px; cursor: pointer;" href="{{ route('cart.show') }}"><i class="fa-solid fa-bag-shopping"></i></a>
                        @if (Auth::check())
                            <p class="total-count">{{ $totalItems }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar_sub">
            <div class="menu_s">
                <div class="menu_s_sub open">
                    <i class="fa-solid fa-bars"></i>
                </div>
                <div class="menu_s_sub">
                    <i class="fa-regular fa-heart"></i>
                </div>
            </div>
            <a href="">
                <div class="logo_1">
                    <div class="_logo_1">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiC0McdOqapsnG4dNrKc4ZfVy-2ffgBThzph2K26c8oQ&s"
                            alt="">
                    </div>
                </div>
            </a>
            <div class="search_s">
                <div class="search_s_sub">
                    <i class="fa-regular fa-user"></i>
                </div>
                <div class="search_s_sub">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="search_s_sub">
                    <i class="fa-solid fa-bag-shopping"></i>
                </div>
            </div>
        </div>
        <div class="menu_hid">
            <a href="../index.html">
                <div class="logo_1">
                    <div class="_logo_1">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiC0McdOqapsnG4dNrKc4ZfVy-2ffgBThzph2K26c8oQ&s"
                            alt="">
                    </div>
                </div>
            </a>
            <div class="wrap">
                <div>
                    <div class="close">
                        <p style="font-size: 20px;"><i class="fa-solid fa-x"></i></p>
                    </div>
                </div>
                <div class="list">
                    <div>
                        <div class="t1 a1">
                            <p><b>Nam</b></p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="c1">
                            <ul class="clist">
                                <li><a href="../Male/Shoemale.html">GIÀY</a></li>
                                <li><a href="../Male/Fashionmale.html">QUẦN ÁO</a></li>
                                <li><a href="">PHỤ KIỆN</a></li>
                                <li><a href="">GIẢM GIÁ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="t1 a2" id="t1">
                            <p><b>Nữ</b></p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="c2">
                            <ul class="clist">
                                <li><a href="../Female/ShoeFemale.html">GIÀY</a></li>
                                <li><a href="../Female/FashionFemale.html">QUẦN ÁO</a></li>
                                <li><a href="">PHỤ KIỆN</a></li>
                                <li><a href="">GIẢM GIÁ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="t1 a3" id="t1">
                            <p><b>TRẺ EM</b></p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="c3">
                            <ul class="clist">
                                <li><a href="../Kids/Shoekid.html">GIÀY</a></li>
                                <li><a href="../Kids/Fashionkid.html">QUẦN ÁO</a></li>
                                <li><a href="../Kids/Sportskid.html">THỂ LOẠI</a></li>
                                <li><a href="">GIẢM GIÁ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <div class="t1" id="t3">
                            <p>THỂ THAO</p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div>
                        <div class="t1">
                            <p>CÁC NHÃN HIỆU</p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                    <div>
                        <div class="t1">
                            <p>OUTLET</p>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                    </div>
                </div>
                <div class="list_supporta">
                    <ul class="clist">
                        <li><a href="">TRÌNH THEO DÕI ĐƠN HÀNG</a></li>
                        <li><a href="">My Profile</a></li>
                        <li><a href="">Release Dates</a></li>
                        <li><a href="">Công cụ tìm kiếm cửa hàng</a></li>
                        <li><a href="">Trợ gúp dịch vụ khách hàng</a></li>
                        <li><a href="">Exchanges and returns</a></li>
                        <li><a href="">PHẢN HỒI</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="none"></div>
    <nav class="post">
        <span>EXPLORE OUR KEY ICONS - <a href="">KHÁM PHÁ ORIGINALS</a></span>
        <i class="fa-solid fa-xmark"></i>
    </nav>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('frontend/js/home.js') }}"></script>

</body>

</html>