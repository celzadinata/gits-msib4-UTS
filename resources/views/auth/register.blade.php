@extends('layouts.app')

@section('title', 'register')

@section('content')
    <div class="login-page mt-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="bg-white rounded">
                    <div class="row">
                        <div class="col-md-7 pe-0 d-none d-md-block">
                            <div class="form-left h-100 text-white text-center pt-5 rounded-start"
                                style="background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);">
                                <i class="bi bi-bootstrap fa-10x"></i>
                                <h2 class="fs-1">Hello, You're New!</h2>
                                <p class="text-white"><small><i>Daftar yuk</i></small></p>
                            </div>
                        </div>
                        <div class="col-md-5 ps-0 border rounded-end">
                            <div class="form-right h-100 py-5 px-5">
                                <h1 class="my-4">Sign Up</h1>
                                <p class="text-muted mb-4"> <small>Daftar agar memudahkan kamu dalam mengakses
                                        <i>E-commerce</i> terbesar didunia</small> </p>
                                <small class="text-danger">** <small class="text-muted">Agar dapat mengakses CMS diharuskan
                                        membuat akun sebagai penjual!</small></small><br>
                                <form action="{{ route('do.register') }}" method="POST" enctype="multipart/form-data"
                                    class="row g-3">
                                    @csrf
                                    <div class="col-12">
                                        <label for="firstName" class="form-label">Nama Depan</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                            <input type="text"
                                                class="form-control @error('firstName') is-invalid @enderror"
                                                name="firstName" id="firstName" aria-describedby="firstNameHelp">
                                        </div>
                                        @error('firstName')
                                            <div id="firstNameHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="lastName" class="form-label">Nama Belakang</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-person-fill"></i></div>
                                            <input type="text"
                                                class="form-control @error('lastName') is-invalid @enderror" name="lastName"
                                                id="lastName" aria-describedby="lastNameHelp">
                                        </div>
                                        @error('lastName')
                                            <div id="lastNameHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="username" class="form-label">Username</label>
                                        <div class="input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="text"
                                                class="form-control @error('username') is-invalid @enderror" name="username"
                                                id="username" aria-describedby="usernameHelp">
                                        </div>
                                        @error('username')
                                            <div id="usernameHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-envelope-fill"></i></div>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="email" aria-describedby="emailHelp">
                                        </div>
                                        @error('email')
                                            <div id="emailHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-patch-question-fill"></i></div>
                                            <select class="form-select"
                                                class="form-control @error('jenisKelamin') is-invalid @enderror"
                                                name="jenisKelamin" id="jenisKelamin" aria-label="Default select example">
                                                <option selected value="">Pilih jenis kelamin</option>
                                                <option value="laki-laki">Laki - Laki</option>
                                                <option value="perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        @error('jenisKelamin')
                                            <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-house-fill"></i></div>
                                            <input type="alamat" class="form-control @error('alamat') is-invalid @enderror"
                                                name="alamat" id="alamat">
                                        </div>
                                        @error('alamat')
                                            <div id="alamatHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="telepon" class="form-label">Telepon</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-telephone-fill"></i></div>
                                            <input type="telepon"
                                                class="form-control @error('telepon') is-invalid @enderror" name="telepon"
                                                id="telepon">
                                        </div>
                                        @error('telepon')
                                            <div id="teleponHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="role" class="form-label">Daftar sebagai</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-wrench"></i></div>
                                            <select class="form-select"
                                                class="form-control @error('role') is-invalid @enderror" name="role"
                                                id="role" aria-label="Default select example">
                                                <option selected value="pembeli">Pembeli</option>
                                                <option value="penjual">Penjual</option>
                                            </select>
                                        </div>
                                        @error('role')
                                            <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password">
                                        </div>
                                        @error('password')
                                            <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password_confirmation" class="form-label">Password
                                            Confirmation</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                                            <input type="password"
                                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                                name="password_confirmation" id="password_confirmation">
                                        </div>
                                        @error('password_confirmation')
                                            <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="avatar" class="form-label">Foto Profile</label>
                                        <input type="file" accept="image/*"
                                            class="form-control @error('avatar') is-invalid @enderror" name="avatar"
                                            id="avatar" aria-describedby="avatarHelp" onchange="PreviewImage()">
                                        <img id="preview" class="img-preview mt-4" />
                                        @error('avatar')
                                            <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn text-light mt-3 mb-3 col-12"
                                        style="background-color: #CC20B9">Register</button>

                                    <div
                                        style="width: 100%; height: 13px; border-bottom: 1px solid grey; text-align: center">
                                        <span style="font-size: 15px; background-color: #FFF; padding: 0 10px 0 10px">
                                            <b>Atau</b>
                                        </span>
                                    </div>

                                    <p class="my-3 text-center">
                                        Sudah punya akun?
                                        <a href="{{ route('login') }}">Login</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
