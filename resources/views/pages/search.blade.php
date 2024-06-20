<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>

<body>
    {{-- header --}}
    @include('component.header')

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

    {{-- header --}}
    @include('component.footer')
    <script src="{{ asset('frontend/js/home.js') }}"></script>
</body>

</html>