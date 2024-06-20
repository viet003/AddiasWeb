<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/cart.css')}}">
    <title>Giỏ hàng</title>
</head>

<body class="bg-light">

    {{-- header --}}
    @include('component.header')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto" style="">
                <div class="row mt-5 mb-5 gx-3">
                    <!-- left side div -->
                    <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                        <h2 class="py-4 px-5 font-weight-bold bg-tranparent">Giỏ hàng</h2>
                        @foreach ($items as $item)
                            <div class="card p-4">
                                <div class="row">
                                    <!-- cart images div -->
                                    <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                                        <img src="{{ $item->product->images->first()->path }}" class="img-fluid" alt="cart img">
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
                                                        <form action="{{ url('/cart/' . $item->id) }}" method="GET">
                                                            <button type="submit" class="page-link" style="width: 130px">
                                                                Thanh toán
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- //remover move and price -->
                                        <div class="row">
                                            <div class="col-8 d-flex justify-content-between remove_wish">
                                                <p style="cursor: pointer" class="remove-item">
                                                    <i class="fas fa-trash-alt" data-item-id="{{ $item->id }}"></i> XÓA SẢN PHẨM
                                                </p>
                                                <p><i class="fas fa-heart"></i> THÊM VÀO FAVORITE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr />
                        @endforeach
                    </div>
                    
                    <script>
                        $(document).ready(function() {
                            var authToken = @json(Auth::check() ? Auth::user()->accesToken : '');
                    
                            $('.remove-item').on('click', function() {
                                var itemId = "{{ $item->id }}";
                                
                                $.ajax({
                                    url: '/api/deletefromcart',
                                    type: 'POST',
                                    headers: authToken ? { 'Authorization': 'Bearer ' + authToken } : {},
                                    data: JSON.stringify({ id: itemId }),
                                    contentType: 'application/json',
                                    success: function(response) {
                                        if (response.status === 200) {
                                            alert('Xóa sản phẩm thành công!');
                                            window.location.href = "{{ route('cart.show') }}";
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        if (xhr.status === 401) {
                                            alert('Bạn cần đăng nhập để xóa sản phẩm khỏi giỏ hàng.');
                                            window.location.href = "{{ route('login') }}";
                                        } else {
                                            alert('Có lỗi xảy ra. Vui lòng thử lại sau!');
                                        }
                                    }
                                });
                            });
                        });
                    </script>                    
                </div>
            </div>
        </div>
    </div>

    {{-- header --}}
    @include('component.footer')


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
        integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ=="
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/js/cart.js') }}"/>

</body>

</html>