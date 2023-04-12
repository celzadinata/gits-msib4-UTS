@extends('layouts_admin.app')
@section('title', 'Produk')
@section('content')
    <div class="details">
        <div class="recent_project">
            <div class="card_header">
                <h2>Produk</h2>
            </div>
            <a href="{{ route('product.add') }}"><button class="btn btn-primary">Tambah Product</button></a>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th width="5%">No</th>
                        <th>Gambar</th>
                        <th>ID Produk</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td><img src="{{ url('images/' . $product->image) }}" alt="Image" style="width: 150px;" />
                            </td>
                            <td>{{ $product->id_products }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->categories->name }}</td>
                            <td>
                                <a href="{{ route('product.edit', $product->id_products) }}" class="btn btn-warning btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                <a href="{{ route('product.destroy', $product->id_products) }}"
                                    class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
