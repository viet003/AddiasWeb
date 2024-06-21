@extends('products.layouts')

@section('content_product')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Thêm sản phẩm
                </div>
                <div class="float-end">
                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('products.store') }}" method="post">
                    @csrf

                    <!-- <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">Id</label>
                        <div class="col-md-6">
                          <input type="integer" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{ old('id') }}">
                            @if ($errors->has('id'))
                                <span class="text-danger">{{ $errors->first('id') }}</span>
                            @endif
                        </div>
                    </div> -->

                    <div class="mb-3 row">
                        <label for="name_product" class="col-md-4 col-form-label text-md-end text-start">Tên sản phẩm</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name_product') is-invalid @enderror" id="name_product" name="name_product" value="{{ old('name_product') }}">
                            @if ($errors->has('name_product'))
                                <span class="text-danger">{{ $errors->first('name_product') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="price" class="col-md-4 col-form-label text-md-end text-start">Giá</label>
                        <div class="col-md-6">
                          <input type="integer" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                            @if ($errors->has('price'))
                                <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="quantity" class="col-md-4 col-form-label text-md-end text-start">Số lượng</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" value="{{ old('quantity') }}">
                            @if ($errors->has('quantity'))
                                <span class="text-danger">{{ $errors->first('quantity') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="gender" class="col-md-4 col-form-label text-md-end text-start">Dành cho</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender" value="{{ old('gender') }}"></textarea>
                            @if ($errors->has('gender'))
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Thêm sản phẩm">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection