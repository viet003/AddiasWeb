@extends('users.layouts')

@section('content_user')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Thêm người dùng
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="post">
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
                        <label for="user_name" class="col-md-4 col-form-label text-md-end text-start">Tên</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="user_name" name="user_name" value="{{ old('user_name') }}">
                            @if ($errors->has('user_name'))
                                <span class="text-danger">{{ $errors->first('user_name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="password" class="col-md-4 col-form-label text-md-end text-start">Mật khẩu</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="role" class="col-md-4 col-form-label text-md-end text-start">Role</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" name="role" value="{{ old('role') }}">
                            @if ($errors->has('role'))
                                <span class="text-danger">{{ $errors->first('role') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Thêm">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection