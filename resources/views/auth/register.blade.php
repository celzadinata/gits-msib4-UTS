@extends('layouts.app')

@section('title', 'register')

@section('content')
    <div class="container mt-4">
        <h1 class="my-4">Sign Up</h1>
        <form action="{{ route('do.register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="firstName" class="form-label">Nama Depan</label>
                <input type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName"
                    id="firstName" aria-describedby="firstNameHelp">
                @error('firstName')
                    <div id="firstNameHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lastName" class="form-label">Nama Belakang</label>
                <input type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                    id="lastName" aria-describedby="lastNameHelp">
                @error('lastName')
                    <div id="lastNameHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username"
                    id="username" aria-describedby="usernameHelp">
                @error('username')
                    <div id="usernameHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    id="email" aria-describedby="emailHelp">
                @error('email')
                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                <select class="form-select" class="form-control @error('jenisKelamin') is-invalid @enderror"
                    name="jenisKelamin" id="jenisKelamin" aria-label="Default select example">
                    <option selected value="">Pilih jenis kelamin</option>
                    <option value="laki-laki">Laki - Laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
                @error('jenisKelamin')
                    <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                    id="alamat">
                @error('alamat')
                    <div id="alamatHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="telepon" class="form-label">Telepon</label>
                <input type="telepon" class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                    id="telepon">
                @error('telepon')
                    <div id="teleponHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Daftar sebagai</label>
                <select class="form-select" class="form-control @error('role') is-invalid @enderror" name="role"
                    id="role" aria-label="Default select example">
                    <option selected value="pembeli">Pembeli</option>
                    <option value="penjual">Penjual</option>
                </select>
                @error('role')
                    <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                    id="password">
                @error('password')
                    <div id="passwordHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                    name="password_confirmation" id="password_confirmation">
                @error('password_confirmation')
                    <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">Foto Profile</label>
                <input type="file" accept="image/*" class="form-control @error('avatar') is-invalid @enderror"
                    name="avatar" id="avatar" aria-describedby="avatarHelp" onchange="PreviewImage()">
                <img id="preview" class="img-preview" />
                @error('avatar')
                    <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Register</button>

            <p class="my-3">
                <a href="{{ route('login') }}">Login</a>
                atau
                <a href="{{ route('register') }}">Sign up</a>
            </p>
        </form>
    </div>

@endsection
