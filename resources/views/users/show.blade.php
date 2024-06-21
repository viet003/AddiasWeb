@extends('users.layouts')

@section('content_user')

<div class="row justify-content-center mt-3">
    <div class="col-md-8">

        <div class="card">
            <div class="card-header">
                <div class="float-start">
                    Thông tin người dùng
                </div>
                <div class="float-end">
                    <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
            </div>
            <div class="card-body">

                    <div class="row">
                        <label for="id" class="col-md-4 col-form-label text-md-end text-start"><strong>Id:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->id }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="user_name" class="col-md-4 col-form-label text-md-end text-start"><strong>Tên:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->user_name }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="email" class="col-md-4 col-form-label text-md-end text-start"><strong>Email:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->email }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="role" class="col-md-4 col-form-label text-md-end text-start"><strong>Role:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $user->role }}
                        </div>
                    </div>
        
            </div>
        </div>
    </div>    
</div>
    
@endsection