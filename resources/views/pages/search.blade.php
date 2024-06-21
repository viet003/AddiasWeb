<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>V3Shop</title>
    <link rel="icon" href=" {{ asset('frontend/images/logo.png') }} " type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('frontend/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    {{-- header --}}
    @include('component.header')

    <form action="{{ route('searchfilter') }}" method="GET">
        <div class="wrap filter-bar">
            <div class="search-for">
                <p>Tìm kiếm cho:</p>
                <input type="text" name="query" value="{{ request('query') }}" placeholder="Nhập từ khóa tìm kiếm" readonly />
            </div>
            <div class="option-search">
                <div class="label-option">
                    <p>Giới Tính</p>
                </div>
                <div class="dropdown">
                    <select name="gender">
                        <option value="">Giới tính</option>
                        <option value="Nam" {{ request('gender')=='Nam' ? 'selected' : '' }}>Nam</option>
                        <option value="Nữ" {{ request('gender')=='Nữ' ? 'selected' : '' }}>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="option-search">
                <div class="label-option">
                    <p>Nhãn Hiệu</p>
                </div>
                <div class="dropdown">
                    <select name="brand">
                        <option value="">Nhãn hiệu</option>
                        @isset($brands)
                            @foreach ($brands as $brand)
                                <option value="{{ $brand }}" {{ request('brand')==$brand ? 'selected' : '' }}>{{ $brand }}</option>
                            @endforeach
                        @endisset
                    </select>
                </div>
            </div>
            <div class="option-search">
                <div class="label-option">
                    <p>Giá</p>
                </div>
                <div class="dropdown">
                    <select name="price">
                        <option value="">Chọn giá</option>
                        <option value="Thấp - Cao" {{ request('price')=='Thấp - Cao' ? 'selected' : '' }}>Thấp - Cao
                        </option>
                        <option value="Cao - Thấp" {{ request('price')=='Cao - Thấp' ? 'selected' : '' }}>Cao - Thấp
                        </option>
                    </select>
                </div>
            </div>
            <div class="option-search">
                <button type="submit" class="button-filter-search">
                    Tìm kiếm
                </button>
            </div>
        </div>
    </form>

    <div class="wrap main-content">
        @foreach ($products as $item)
        <a href="{{ url('/product/' . $item ->id) }}">
            <div class="item-image-card">
                @if ($item->images->first())
                <div class="image">
                    <img src="{{ $item->images->first()->path }}" alt="" />
                    <p>{{ $item->price }}<sup>đ</sup></p>
                </div>
                @else
                <div class="image">
                    <img src="" alt="nope" />
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

    <div class="flex flex-row my-10 mx-20 justify-around items-center">
        {{ $products->links() }}
    </div>

    {{-- header --}}
    @include('component.footer')


    <script src="{{ asset('frontend/js/home.js') }}"></script>
    {{-- <script src="{{ asset('frontend/js/search.js') }}"></script> --}}
</body>

</html>