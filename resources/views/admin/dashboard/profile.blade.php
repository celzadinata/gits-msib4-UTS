@extends('layouts_admin.app')
@section('title', 'Profile')
@section('content')
    <section style="background-color: #eee;">
        <form action="{{ route('do.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="{{ asset('user/' . Auth::user()->avatar) }}" id="preview"
                                    class="rounded-circle img-fluid" style="width: 150px; height: 150px;" />
                                <h5 class="my-3">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</h5>
                                <p class="text-muted mb-3">{{ '@' . Auth::user()->username }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <input type="file" accept="image/*"
                                        class="form-control text-muted @error('avatar') is-invalid @enderror" name="avatar"
                                        id="avatar" aria-describedby="avatarHelp" style="display: none"
                                        onchange="PreviewImage()">
                                    <input type="button" value="Ubah Avatar" class="btn btn-outline-primary ms-1"
                                        onclick="document.getElementById('avatar').click();" />
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4 mb-lg-0">
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush rounded-3">
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fas fa-envelope fa-lg text-warning"></i>
                                        <p class="mb-0">{{ Auth::user()->email }}</p>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                        <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                        <p class="mb-0">{{ '@' . Auth::user()->username }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="mb-4">
                                    <label for="firstName" class="form-label">Nama Depan</label>
                                    <input type="text"
                                        class="form-control text-muted @error('firstName') is-invalid @enderror"
                                        name="firstName" id="firstName" aria-describedby="firstNameHelp"
                                        value="{{ Auth::user()->first_name }}">
                                    @error('firstName')
                                        <div id="firstNameHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="lastName" class="form-label">Nama Belakang</label>
                                    <input type="text"
                                        class="form-control text-muted @error('lastName') is-invalid @enderror"
                                        name="lastName" id="lastName" aria-describedby="lastNameHelp"
                                        value="{{ Auth::user()->last_name }}">
                                    @error('lastName')
                                        <div id="lastNameHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text"
                                        class="form-control text-muted @error('username') is-invalid @enderror"
                                        name="username" id="username" aria-describedby="usernameHelp"
                                        value="{{ Auth::user()->username }}" disabled>
                                    @error('username')
                                        <div id="usernameHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email"
                                        class="form-control text-muted @error('email') is-invalid @enderror" name="email"
                                        id="email" aria-describedby="emailHelp" value="{{ Auth::user()->email }}"
                                        disabled>
                                    @error('email')
                                        <div id="emailHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                    <select class="form-select"
                                        class="form-control text-muted @error('jenisKelamin') is-invalid @enderror"
                                        name="jenisKelamin" id="jenisKelamin" aria-label="Default select example">
                                        @if (Auth::user()->first_name == 'laki-laki')
                                            <option selected value="{{ Auth::user()->jenis_kelamin }}">
                                                Laki - laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        @else
                                            <option value="laki-laki">
                                                Laki - laki</option>
                                            <option selected value="{{ Auth::user()->jenis_kelamin }}">Perempuan</option>
                                        @endif
                                    </select>
                                    @error('jenisKelamin')
                                        <div id="namaprodukHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input type="alamat"
                                        class="form-control text-muted @error('alamat') is-invalid @enderror"
                                        name="alamat" id="alamat" value="{{ Auth::user()->alamat }}">
                                    @error('alamat')
                                        <div id="alamatHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="telepon"
                                        class="form-control text-muted @error('telepon') is-invalid @enderror"
                                        name="telepon" id="telepon" value="{{ Auth::user()->no_hp }}">
                                    @error('telepon')
                                        <div id="teleponHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label for="password" class="form-label">Password Baru</label>
                                    <input type="password"
                                        class="form-control text-muted @error('password') is-invalid @enderror"
                                        name="password" id="password">
                                    @error('password')
                                        <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Password Konfirmasi</label>
                                    <input type="password"
                                        class="form-control text-muted @error('password_confirmation') is-invalid @enderror"
                                        name="password_confirmation" id="password_confirmation">
                                    @error('password_confirmation')
                                        <div id="passwordConfirmationHelp" class="form-text">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Simpan</button>

                            </div>
                        </div>
                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span>
                                            Project
                                            Status
                                        </p>
                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%"
                                                aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 89%"
                                                aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                        <div class="progress rounded mb-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 66%"
                                                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 mb-md-0">
                                    <div class="card-body">
                                        <p class="mb-4"><span class="text-primary font-italic me-1">assigment</span>
                                            Project
                                            Status
                                        </p>
                                        <p class="mb-1" style="font-size: .77rem;">Web Design</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 80%"
                                                aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Website Markup</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 72%"
                                                aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 89%"
                                                aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                                        <div class="progress rounded" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 55%"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                                        <div class="progress rounded mb-2" style="height: 5px;">
                                            <div class="progress-bar" role="progressbar" style="width: 66%"
                                                aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
