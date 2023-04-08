@extends('layouts.app')

@section('title', 'login')

@section('content')
    <div class="container mt-4">
        <h1 class="my-4">Login</h1>
        <form action="{{ route('do.login') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"
                    aria-describedby="emailHelp">
                @error('email')
                    <div id="emailHelp" class="form-text">{{ $message }}</div>
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

            <button type="submit" class="btn btn-primary">Login</button>

            <p class="my-3">
                <a href="{{ route('login') }}">Login</a>
                atau
                <a href="{{ route('register') }}">Sign up</a>
            </p>
        </form>
    </div>
@endsection
