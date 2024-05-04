@extends('layouts.master')
@section('content')
<div class="mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Product List</h2>
        <div>
            <a href="{{ route('posts.index') }}" class="btn btn-primary mr-1">Back to list</a>
            <a href="{{ route('posts.create') }}" class="btn btn-dark">Create Product</a>
        </div>
    </div>    
    @if ($errors->any())
        <div class="alert alert-danger mt-3">Silakan periksa formulir di bawah ini untuk kesalahan</div>
    @endif

    <div class="card">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">URL Gambar</label>
                    <input type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" id="image" name="image">
                    {{-- check error --}}
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat</label>
                    <input type="number" class="form-control {{$errors->has('berat') ? 'is-invalid' : ''}}" id="berat" name="berat">
                    @if ($errors->has('berat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('berat') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control {{$errors->has('harga') ? 'is-invalid' : ''}}" id="harga" name="harga">
                    @if ($errors->has('harga'))
                        <div class="invalid-feedback">
                            {{ $errors->first('harga') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control {{$errors->has('stok') ? 'is-invalid' : ''}}" id="stok" name="stok">
                    @if ($errors->has('stok'))
                        <div class="invalid-feedback">
                            {{ $errors->first('stok') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi Barang</label>
                    <select class="form-select {{$errors->has('kondisi') ? 'is-invalid' : ''}}" name="kondisi" id="kondisi">
                        <option value="0" selected>Pilih kondisi Barang</option>
                        <option value="Baru">Baru</option>
                        <option value="Bekas">Bekas</option>
                    </select>
                    @if ($errors->has('kondisi'))
                        <div class="invalid-feedback">
                            {{ $errors->first('kondisi') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control {{$errors->has('deskripsi') ? 'is-invalid' : ''}}" id="deskripsi" name="deskripsi" rows="3"></textarea>
                    @if ($errors->has('deskripsi'))
                        <div class="invalid-feedback">
                            {{ $errors->first('deskripsi') }}
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark w-100">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
