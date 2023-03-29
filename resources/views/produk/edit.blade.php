@extends('admin.parent')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Edit Produk</div>
                <div class="card-body">
                    <form method="post" action="{{ route('produk.update', $produk->id) }}" >
                        @csrf
                        @method('PUT')
                        <div class="form-group mt-1">
                            <label for="nama">Ganti Produk</label>
                            <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $produk->nama }}" required autofocus>
                            @error('nama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-1">
                            <label for="deskripsi"> Edit Deskripsi Produk</label>
                            <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" required>{{ $produk->deskripsi }}</textarea>
                            @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-1">
                            <label for="harga"> Edit Harga Produk</label>
                            <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ $produk->harga }}" required min="0">
                            @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-1">
                            <label for="stok">Edit Stok Produk</label>
                            <input id="stok" type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ $produk->stok }}" required min="0">
                            @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-0 mt-1">
                            <button type="submit" class="btn btn-primary m-1">
                                Edit
                            </button>
                            <a href="{{ route('produk.index') }}" class="btn btn-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
