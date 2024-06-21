@extends('users.layouts')

@section('content_user')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Chỉnh sửa người dùng
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('users.update', $user->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <!-- <div class="mb-3 row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start">Id</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('id') is-invalid @enderror" id="code" name="id" value="{{ $user->id }}">
                            @if ($errors->has('id'))
                                <span class="text-danger">{{ $errors->first('id') }}</span>
                            @endif
                        </div>
                    </div> -->

                    <div class="mb-3 row">
                        <label for="user_name" class="col-md-4 col-form-label text-md-end text-start">Tên</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('user_name') is-invalid @enderror" id="user_name" name="user_name" value="{{ $user->user_name }}">
                            @if ($errors->has('user_name'))
                                <span class="text-danger">{{ $errors->first('user_name') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start">Email</label>
                        <div class="col-md-6">
                            <input type="text" step="1" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $user->email }}">
                            @if ($errors->has('email'))email
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="role" class="col-md-4 col-form-label text-md-end text-start">Role</label>
                        <div class="col-md-6">
                          <input type="number" class="form-control @error('role') is-invalid @enderror" id="role" name="role" value="{{ $user->role }}">
                            @if ($errors->has('role'))
                                <span class="text-danger">{{ $errors->first('role') }}</span>
                            @endif
                        </div>
                    </div>


                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection