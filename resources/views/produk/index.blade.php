@extends('admin.parent')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="mb-3">{{ __('Produk') }}</h1>
                    <a href="{{ route('produk.create') }}" class="btn btn-outline-dark">{{ __('Tambah Produk') }}</a>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if(session('status') && session('status') == 'deleted')
                    <div class="alert alert-danger bg-danger">{{ session('status') }}</div>
                @endif

                
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('Nama Produk') }}</th>
                            <th>{{ __('Deskripsi') }}</th>
                            <th>{{ __('Harga') }}</th>
                            <th>{{ __('Stok') }}</th>
                            <th>{{ __('Aksi') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produks as $produk)
                            <tr>
                                
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $produk->nama }}</td>
                                <td>{{ $produk->deskripsi }}</td>
                                <td>{{ $produk->harga }}</td>
                                <td>{{ $produk->stok }}</td>
                                <td>
                                    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-primary m-1">{{ __('Edit') }}</a>
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">{{ __('Hapus') }}</button>
                                        <input type="hidden" name="status" value="deleted">

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
