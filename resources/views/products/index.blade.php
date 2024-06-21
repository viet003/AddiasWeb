<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Quản lý</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
		integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- STYLE CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body>
    {{-- header --}}
    @include('component.header')

    @extends('products.layouts')

    @section('content_product')

    <div class="row justify-content-center mt-3">
        <div class="col-md-12">

            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">Danh sách sản phẩm
                <div class="float-end">
                        <a href="{{ route('admin') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{ route('products.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Thêm sản phẩm</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">id</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name_product }}</td>
                                <td>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Xem</a>

                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Sửa</a>   

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?');"><i class="bi bi-trash"></i> Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <td colspan="6">
                                    <span class="text-danger">
                                        <strong>Không tìm thấy sản phẩm nào.</strong>
                                    </span>
                                </td>
                            @endforelse
                        </tbody>
                    </table>

                <!-- <div class="flex flex-col">
                {{ $products->links() }}
                </div> -->

                </div>
            </div>
        </div>    
    </div>
        
    @endsection
</body>
</html>