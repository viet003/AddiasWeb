<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Setting</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/setting.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    {{-- header --}}
    @include('component.header')

    @extends('users.layouts')
    @section('content_user')
    <div class="row justify-content-center mt-3">

    
        <div class="col-md-12">

            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif
            
            <div class="card">
                <div class="card-header">Danh sách người dùng
                <div class="float-end">
                    <a href="{{ route('admin') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                </div>
                </div>
                
                <div class="card-body">
                    <a href="{{ route('users.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i>Thêm người dùng</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">S#</th>
                            <th scope="col">Id</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->user_name }}</td>
                                <td>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Xem</a>

                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Sửa</a>   

                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa người dùng này?');"><i class="bi bi-trash"></i> Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                <td colspan="6">
                                    <span class="text-danger">
                                        <strong>Không tìm thấy!</strong>
                                    </span>
                                </td>
                            @endforelse
                        </tbody>
                    </table>

                    <!-- {{ $users->links() }} -->

                </div>
            </div>
        </div>    
    </div>
        
    @endsection
</body>