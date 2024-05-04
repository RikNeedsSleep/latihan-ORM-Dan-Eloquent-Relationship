@extends('layouts.master')
@section('content')
    <div class="mt-5">
        {{-- check session --}}
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="mb-0">Product List</h2>
            <div>
                <a href="{{ route('products') }}" class="btn btn-primary mr-1">Back to Products</a>
                <a href="{{ route('posts.create') }}" class="btn btn-dark">Create Product</a>
            </div>
        </div>        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kondisi</th>
                        <th>Deskripsi</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration + $posts->firstItem() - 1 }}</td>
                            <td>{{ $post->image }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->berat }}</td>
                            <td>{{ $post->harga }}</td>
                            <td>{{ $post->stok }}</td>
                            <td>{{ $post->kondisi }}</td>
                            <td>{{ $post->deskripsi }}</td>
                            <td>{{ $post->created_at->format('d F Y H:i') }}</td>
                            <td>{{ $post->updated_at->format('d F Y H:i') }}</td>
                            <td>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
