<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>V3Shop</title>
    <link rel="icon" href="../Infoproduct/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/male.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href=" {{ asset('frontend/images/logo.png') }} " type="image/x-icon">
</head>

<body id="body">

    {{-- header --}}
    @include('component.header')

    <div class="Home wrap">
        <h2>WHAT'S HOT</h2>
        <div class="Homefirst">
            <div class="Homefirst_img1">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_800,w_800/viVN/Images/fw23_terrex_adventure_wardrobe-hike-launch-glpm-tc1-d_tcm337-1059826.jpg"
                    alt="Ảnh nền">
                <h3>THE ADVENTURE WARDROBE</h3>
                <p>Thiết kế đa năng dành cho các chuyến phiêu lưu ngẫu hứng</p>
            </div>
            <div class="Homefirst_img2">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_800,w_800/viVN/Images/running-fw23-adizero-primex-early-access-glpm-tc-d_tcm337-1043071.jpg"
                    alt="Ảnh nền">
                <h3>Illegally fast</h3>
                <p>Quá nhiều công nghệ trong một đôi giày chạy bộ, nó không được cho phép trong các cuộc đua hệ tuyển
                </p>
            </div>
            <div class="Homefirst_img3">
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_800,w_800/viVN/Images/Outdoor-FW23-UBS-Intro-mGLP-TC-Mens-Hero-Fallback-d_tcm337-1048812.jpg"
                    alt="Ảnh nền ">
                <h3>Chạy nhanh đến ngày mai</h3>
                <p>Với các chi tiết hiện đại. Khám phá Adidas NMD</p>
            </div>
            <div class="Homefirst_img4">
                <h3>Trang phục TERREX Adventure</h3>
                <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_800,w_800/viVN/Images/Outdoor-FW23-UBS-Intro-mGLP-TC-Mens-Hero-Fallback-d_tcm337-1048812.jpg"
                    alt="Ảnh nền ">
                <p>Áo khoác đa năng. Dù đỉnh cao của bạn là gì, bạn cũng luôn sẵn sàng </p>
            </div>
        </div>
        <div class="Homemid">
            <h2>ELEVATE YOUR STYLE</h2>
            <div class="image-slider">
                @if (count($maleProducts) != 0)
                    @foreach ($maleProducts as $product)
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
        <div class="Homeend">
            <h2>
                ADIDAS MEN’S CLOTHING & SHOES
            </h2>
            <p>
                Our wins are ours to gain. adidas clothing & shoes don’t break our PB. We do.
                That extra mile. One more rep. Leg day, run away or lounge all day. Find something to match you.
                Jerseys for the player, or the fan. Running shoes to run on, or to walk in.
                Training gear for weekday practise, or Sunday chill. A pair of white trainers to go with… basically
                anything.
                All we need is us. All we want is here, in men’s apparel and footwear.
            </p>
        </div>
    </div>

    {{-- header --}}
    @include('component.footer')
</body>

</html>