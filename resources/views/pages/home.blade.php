<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('frontend/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <title>V3Shop</title>
</head>
<body>
    {{-- header --}}
    @include('component.header')

    <div class="_video">
        <div class="fill_picture">
            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_1920,w_1920/adizero_HP_MH_d_7e49ff3f74.jpg"
                alt="">
        </div>
        <div class="intro">
            <div class="_wrap">
                <div>
                    <h3 style="color: #007bc6;">ADIZERO BOSTON12</h3>
                    <h1>TẬP LUYỆN LÀ TỐT NHẤT</h1>
                    <p>Cảm giác như trên đường đua khi tập luyện, tiếp sức từ
                        công nghệ hiệu năng cao.</p>
                    <div>
                        <a href="">
                            <div class="button-dk">
                                <div class="_main_button">
                                    <p>MUA ĐỒ NAM <i class="fa-solid fa-arrow-right"></i></p>
                                </div>
                            </div>
                        </a>
                        <br>
                        <a href="">
                            <div class="button-dk">
                                <div class="_main_button">
                                    <p>MUA ĐỒ NỮ<i class="fa-solid fa-arrow-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Ex">
        <div class="wrap">
            <div class="_product">
                <p>Members's Exculusive</p>
            </div>
            <div class="image-slider">
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
            </div>
        </div>
    </div>
    <div class="Topic">
        <div class="fill_picture_1">
            <img src="https://images.unsplash.com/photo-1620799139834-6b8f844fbe61?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1972&q=80"
                alt="">
        </div>
        <div class="intro">
            <div class="_wrap">
                <div>
                    <h3 style="color: #007bc6;">ADIZERO BOSTON12</h3>
                    <h1>Tôn vinh chuyển động: IVY PARK NOIR</h1>
                    <br>
                    <div>
                        <a href="">
                            <div class="button-dk">
                                <div class="_main_button">
                                    <p>MUA BỘ SƯU TẬP<i class="fa-solid fa-arrow-right"></i></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product">
        <div class="wrap">
            <div class="title_product">
                <div class="_product">
                    <p>Hàng mới về</p>
                </div>
                <div class="_product">
                    <p>Our Key Icons</p>
                </div>
            </div>
            <div class="more">
                <div class="s">
                    <div class="image-slider">
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
                    </div>
                </div>
                <div class="s">
                    <div class="classify">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Intro_more">
        <div class="wrap">
            <div class="banner-slider">
                <div class="image-item-1">
                    <div class="image-banner">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1630520752435-fd9610101972?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                                alt="" id="vip" />
                        </a>
                    </div>
                    <div class="ban">
                        <h1>The 2024 Collection</h1>
                        <p>Giới thiệu Chapter 01: Trang phục tân thời dành cho vận động viên chân chính hiện đại.
                        </p>
                        <a href="">MUA NGAY</a>
                    </div>
                </div>
                <div class="image-item-1">
                    <div class="image-banner">
                        <a href="">
                            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_400,w_400/running_fw23_adizero_primex_early_access_hp_tc_d_1326b2140d.jpg"
                                alt="" />
                        </a>
                    </div>
                    <div class="ban">
                        <h1>Marinerush Pack</h1>
                        <p>Cảm nhận nhịp bước dồn dập.</p>
                        <a href="">MUA NGAY</a>
                    </div>
                </div>
                <div class="image-item-1">
                    <div class="image-banner">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1556906781-9a412961c28c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80"
                                alt="" id="vip1" />
                        </a>
                    </div>
                    <div class="ban">
                        <h1>alladin training. Be Supported.</h1>
                        <p>Tiếp thêm sức mạnh cho bạn .Bộ sưu tập bền bỉ giúp bạn thoải mái..</p>
                        <a href="">MUA NGAY</a>
                    </div>
                </div>
                <div class="image-item-1">
                    <div class="image-banner">
                        <a href="">
                            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_400,w_400/fw23_terrex_adventure_wardrobe_hike_launch_hp_tc_d_e580d1ba20.jpg"
                                alt="" />
                        </a>
                    </div>
                    <div class="ban">
                        <h1>alladin & Simpsons</h1>
                        <p>A new range of hardwood classic receives an update from Itchy, Scratchy & Poochie.</p>
                        <a href="">MUA NGAY</a>
                    </div>
                </div>
                <div class="image-item-1">
                    <div class="image-banner">
                        <a href="">
                            <img src="https://images.unsplash.com/photo-1628413993904-94ecb60f1239?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1888&q=80"
                                alt="" />
                        </a>
                    </div>
                    <div class="ban">
                        <h1>Illegally fast</h1>
                        <p>Quá nhiều công nghệ trong một đôi giày chạy bộ, nó không được cho phép trong các cuộc đua
                            hệ tuyển.</p>
                        <a href="">MUA NGAY</a>
                    </div>
                </div>
                <div class="image-item-1">
                    <div class="image-banner">
                        <a href="">
                            <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_400,w_400/football_fw23_aclubs_lifestyle_onsite_tcc_7f779255a4.jpg"
                                alt="" />
                        </a>
                    </div>
                    <div class="ban">
                        <h1>THE ADVENTURE WARDROBE</h1>
                        <p>Thiết kế nhiều lớp đa năng dành cho các chuyến phiêu lưu ngẫu hứng.</p>
                        <a href="">MUA NGAY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="what">
        <div class="wrap">
            <h1>WHO ARE YOU SHOPPING FOR?</h1>
            <div class="content">
                <div class="same">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_730,w_730/fw23_brand_campaign_launch_hp_gender_visual_nav_womens_d_e31f24de86.jpg"
                        alt="">
                    <h2>Women</h2>
                </div>
                <div class="same">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_730,w_730/fw23_brand_campaign_launch_hp_gender_visual_nav_mens_d_db216f2797.jpg"
                        alt="">
                    <h2>Men</h2>
                </div>
                <div class="same">
                    <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/if_w_gt_730,w_730/fw23_brand_campaign_launch_hp_gender_visual_nav_kids_d_806511dc65.jpg"
                        alt="">
                    <h2>Kids</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="about_me">
        <div class="wrap">
            <div class="left">
                <h1>STORIES, STYLES AND SPORTSWEAR AT ADIDAS, SINCE 1949</h1>
                <p style="font-weight: 300;text-align: justify;">
                    Sport keeps us fit. Keeps you mindful. Brings us together. Through sport we have the power to
                    change lives. Whether it is through stories of inspiring athletes. Helping you to get up and get
                    moving. Sportswear featuring the latest technologies, to up your performance. Beat your
                    PB.adidas offers a home to the runner, the basketball player, the soccer kid, the fitness
                    enthusiast. The weekend hiker that loves to escape the city. The yoga teacher that spreads the
                    moves. The 3-Stripes are seen in the music scene. On stage, at festivals. Our sports clothing
                    keeps you focused before that whistle blows. During the race. And at the finish lines. We’re
                    here to supportcreators. Improve their game. Their lives. And change the world. <br>
                </p>
                <p style="font-weight: 300;text-align: justify;">
                    adidas is about more than sportswear and workout clothes. We partner with the best in the
                    industry to co-create. This way we offer our fans the sports apparel and style that match their
                    athletic needs, while keeping sustainability in mind. We’re here to support creators. Improve
                    their game. Create change. And we think about the impact we have on our world
                </p>
            </div>
            <div class="right">
                <h1>Workout clothes, for any sport</h1>
                <p style="font-weight: 300;text-align: justify;">
                    adidas designs for and with athletes of all kinds. Creators, who love to change the game.
                    Challenge conventions. Break the rules and define new ones. Then break them again. We supply
                    teams and individuals with athletic clothing pre-match. To stay focussed. We design sports
                    apparel that get you to the finish line. To win the match. We support women, with bras and
                    tights made for purpose. From low to high support. Maximum comfort. We design, innovate and
                    itterate. Testing new technologies in action. On the pitch, the tracks, the court, the pool.
                    Retro workout clothes inspire new streetwear essentials. Like NMD, Ozweego and our Firebird
                    tracksuits. Classic sports models are brought back to life. Like Stan Smith. And Superstar. Now
                    seen on the streets and the stages.
                </p>
                <p style="font-weight: 300;text-align: justify;">
                    Through our collections we blur the borders between high fashion and high performance. Like our
                    adidas by Stella McCartney athletic clothing collection – designed to look the part inside and
                    outside of the gym. Or some of our adidas Originals lifestyle pieces, that can be worn as
                    sportswear too. Our lives are constantly changing. Becoming more and more versatile. And adidas
                    designs with that in mind.
                </p>
            </div>
        </div>
    </div>

    {{-- footer --}}
    @include('component.footer')
</body>
</html>