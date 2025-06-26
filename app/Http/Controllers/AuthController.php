<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  /**
   * Display login form
   */
  public function showLoginForm()
  {
    if (Auth::check()) {
      return redirect()->route('admin.tourist-spots.index');
    }

    return view('auth.login');
  }

  /**
   * Handle login request
   */
  public function login(Request $request)
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials, $request->boolean('remember'))) {
      $request->session()->regenerate();

      return redirect()->intended(route('admin.tourist-spots.index'))
        ->with('success', 'Selamat datang di Air Manis Admin Panel! 🎉');
    }

    return back()->withErrors([
      'email' => 'Email atau password salah.',
    ])->onlyInput('email')->with('error', 'Login gagal, periksa kembali email dan password Anda.');
  }

  /**
   * Handle logout request
   */
  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
  }
}
