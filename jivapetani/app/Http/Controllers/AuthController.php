<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

  public function do_login(Request $request)
{
    $credentials = $request->validate(rules: [
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt(credentials: $credentials)) {
        $request->session()->regenerate();
        return redirect()->route(route: 'home'); 
    }

    return back()->withErrors([
        'email' => 'Email atau password salah',
    ])->withInput();
}


    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses register
    public function do_register(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8',
        'level' => 'required|in:admin,petani,pembeli,user',
    ]);

    if ($validator->fails()) {
        return redirect("register")
            ->withErrors($validator)
            ->withInput();
    }

    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->level = $request->level; 

    $user->save();

    return redirect('/')->with('success', 'Registrasi berhasil, silakan login.');
}

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Berhasil logout.');
    }
}
