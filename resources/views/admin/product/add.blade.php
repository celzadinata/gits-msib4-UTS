@extends('layouts_admin.app')
@section('title', 'Tambah Produk')
@section('content')
    <div class="details">
        <div class="recent_project">
            <div class="card_header">
                <h2>Add Product</h2>
            </div>
            <form action="{{ Route('product.create') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="id_products">ID Product :</label>
                            <input type="text" name="id_products" value="{{ old('id_products') }}"
                                class="form-control @error('id_products') is-invalid @enderror" placeholder="ID">
                            <div class="text-danger">
                                @error('id_products')
                                    ID Product tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name">Nama Product :</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                            <div class="text-danger">
                                @error('name')
                                    Nama Product tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="description">Deskripsi :</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi"
                                id="message-text"></textarea>
                            <div class="text-danger">
                                @error('description')
                                    Deskripsi tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="price">Price :</label>
                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror"
                                name="price" value="{{ old('price') }}" required>
                            <div class="text-danger">
                                @error('price')
                                    Price tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="stock">Stock :</label>
                            <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror"
                                name="stock" value="{{ old('stock') }}" required>
                            <div class="text-danger">
                                @error('stock')
                                    Stock tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="categories_id"
                                class="col-md-4 col-form-label text-md-right">{{ __('Categories') }}</label>
                            <select id="categories_id" class="form-control @error('categories_id') is-invalid @enderror"
                                name="categories_id" required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('categories_id')
                                    Category tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="users_id" class="col-md-4 col-form-label text-md-right">{{ __('Users') }}</label>
                            <select id="users_id" class="form-control @error('users_id') is-invalid @enderror"
                                name="users_id" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">
                                @error('users_id')
                                    User tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="slug">Slug :</label>
                            <textarea class="form-control @error('slug') is-invalid @enderror" name="slug" placeholder="Slug" id="message-text"></textarea>
                            <div class="text-danger">
                                @error('slug')
                                    Slug tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="image">Gambar :</label>
                            <input type="file" name="image" id="image"
                                class="form-control @error('image') is-invalid @enderror">
                            <div class="text-danger">
                                @error('image')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('product') }}" type="button" class="btn btn-secondary"><i
                        class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i>
                        &nbsp;
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
