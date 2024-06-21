@extends('dishes.layouts')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-12">

        @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">Dish List</div>
            <div class="card-body">
                <a href="{{ route('dishes.create') }}" class="btn btn-success btn-sm my-2"><i class="bi bi-plus-circle"></i> Add New Dish</a>
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($dishes as $dish)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $dish->code }}</td>
                            <td>{{ $dish->name }}</td>
                            <td>
                                <form action="{{ route('dishes.destroy', $dish->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <a href="{{ route('dishes.show', $dish->id) }}" class="btn btn-warning btn-sm"><i class="bi bi-eye"></i> Show</a>

                                    <a href="{{ route('dishes.edit', $dish->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>   

                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this dish?');"><i class="bi bi-trash"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <td colspan="6">
                                <span class="text-danger">
                                    <strong>No Dish Found!</strong>
                                </span>
                            </td>
                        @endforelse
                    </tbody>
                  </table>

                  {{ $dishes->links() }}

            </div>
        </div>
    </div>    
</div>
    
@endsection