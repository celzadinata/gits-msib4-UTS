<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:' . users::class,
            'email' => 'required|string|email|unique:' . users::class . '|max:100',
            'password' => ['required', 'confirmed', Password::defaults()],
            'jenisKelamin' => 'required',
            'alamat' => 'required|string|max:255',
            'telepon' => 'required|string|max:13',
            'role' => 'required',
            'avatar' => 'mimes:jpg,jpeg,png|max:2048'
        ]);

        $imgUrl = 'default';

        if ($request->avatar) {
            $imgUrl = time() . '-' . $request->username . '.' . $request->avatar->extension();
            $request->avatar->move(public_path('user'), $imgUrl);
        }

        $user = users::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'jenis_kelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
            'no_hp' => $request->telepon,
            'role' => $request->role,
            'avatar' => $imgUrl
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string|email|max:100',
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        alert()->error('Ada yang salah cuy');
        return back()->withErrors([
            'email' => 'Email atau password salah!',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Berhasil Log out yagesya');

    }
}
