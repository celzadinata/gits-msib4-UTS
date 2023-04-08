@extends('layouts.app')
@section('content')
    <div class="details">
        <div class="recent_project">
            <div class="card_header">
                <h2>Edit Category</h2>
            </div>
            <form action="{{ Route('category.update', $category->id) }}" method="POST"
                enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="name">Nama Kategori :</label>
                            <input type="text" name="name" value="{{ $category->name }}"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Nama">
                            <div class="text-danger">
                                @error('name')
                                    Nama Kategori tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="description">Deskripsi :</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Deskripsi"
                                id="message-text">{{ $category->description }}</textarea>
                            <div class="text-danger">
                                @error('description')
                                    Deskripsi tidak boleh kosong.
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="{{ route('category') }}" type="button" class="btn btn-warning"><i
                            class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</a>
                    <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i>
                        &nbsp;
                        Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
