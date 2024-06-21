@extends('products.layouts')

@section('content_product')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Thông tin sản phẩm
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start"><strong>Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="name_product" class="col-md-4 col-form-label text-md-end text-start"><strong>Tên:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->name_product }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start"><strong>Giá:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->price }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start"><strong>Số lượng:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->quantity }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="gender" class="col-md-4 col-form-label text-md-end text-start"><strong>Dành cho:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $product->gender }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection