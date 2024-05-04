@extends('layouts.master')

@section('content')
<div class="mt-5">

    @if ($errors->any())
        <div class="alert alert-danger mt-3">Please check the form below for errors</div>
    @endif

    <div class="card mt-3">
        <div class="card-body">
            <form action="{{ route('posts.update', ['id' => $post->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" value="{{ old('name', $post->name) }}">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" id="image" name="image" value="{{ old('image', $post->image) }}">
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('image') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="berat" class="form-label">Berat (gram)</label>
                    <input type="text" class="form-control {{$errors->has('berat') ? 'is-invalid' : ''}}" id="berat" name="berat" value="{{ old('berat', $post->berat) }}">
                    @if ($errors->has('berat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('berat') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control {{$errors->has('harga') ? 'is-invalid' : ''}}" id="harga" name="harga" value="{{ old('harga', $post->harga) }}">
                    @if ($errors->has('harga'))
                        <div class="invalid-feedback">
                            {{ $errors->first('harga') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control {{$errors->has('stok') ? 'is-invalid' : ''}}" id="stok" name="stok" value="{{ old('stok', $post->stok) }}">
                    @if ($errors->has('stok'))
                        <div class="invalid-feedback">
                            {{ $errors->first('stok') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi</label>
                    <input type="text" class="form-control {{$errors->has('kondisi') ? 'is-invalid' : ''}}" id="kondisi" name="kondisi" value="{{ old('kondisi', $post->kondisi) }}">
                    @if ($errors->has('kondisi'))
                        <div class="invalid-feedback">
                            {{ $errors->first('kondisi') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea class="form-control {{$errors->has('deskripsi') ? 'is-invalid' : ''}}" id="deskripsi" name="deskripsi">{{ old('deskripsi', $post->deskripsi) }}</textarea>
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
