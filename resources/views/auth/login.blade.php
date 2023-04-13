@extends('layouts.app')
@section('title', 'login')
@section('content')
    <div class="login-page mt-5">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="bg-white rounded">
                    <div class="row">
                        <div class="col-md-7 pe-0">
                            <div class="form-left h-100 py-5 px-5 border rounded-start">
                                <h1 class="">Login Dulu Yuk!</h1>
                                <p class="text-muted mb-4"> <small>Login untuk memasuki dunia <i>E-commerce</i> terbesar saat
                                        ini</small> </p>
                                <form action="{{ route('do.login') }}" method="POST" class="row g-4">
                                    @csrf
                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-envelope-fill"></i></i></div>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name="email" id="email" aria-describedby="emailHelp">
                                            </div>
                                            @error('email')
                                                <div id="emailHelp" class="form-text">{{ $message }}</div>
                                            @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                id="password">
                                            </div>
                                            @error('password')
                                                <div id="passwordHelp" class="form-text">{{ $message }}</div>
                                            @enderror
                                    </div>

                                    <button type="submit" class="btn text-light"
                                        style="background-color: #CC20B9">Login</button>
                                    <div
                                        style="width: 100%; height: 13px; border-bottom: 1px solid grey; text-align: center">
                                        <span style="font-size: 15px; background-color: #FFF; padding: 0 10px 0 10px">
                                            <b>Atau</b>
                                        </span>
                                    </div>
                                    <p class="my-3 text-center">
                                        Belum punya akun? Kuy
                                        <a href="{{ route('register') }}">Sign up</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5 ps-0 d-none d-md-block">
                            <div class="form-right h-100 text-white text-center pt-5 rounded-end"
                                style="background-image: linear-gradient(140deg, #EADEDB 0%, #BC70A4 50%, #BFD641 75%);">
                                <i class="bi bi-bootstrap fa-10x"></i>
                                <h2 class="fs-1">Welcome Back</h2>
                                <p class="text-white"><small><i>Login dulu kuy</i></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
