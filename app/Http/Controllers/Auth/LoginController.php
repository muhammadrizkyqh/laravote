<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->only('nim', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        // Retrieve the authenticated user
        $user = Auth::user();

        // Check the role of the user and redirect accordingly
        if ($user->role === 'admin') {
            return redirect()->intended('dashboard');
        } elseif ($user->role === 'user') {
            return redirect()->intended('index');
        }

        // Add more conditions for other roles if needed
    }

    return back()->withErrors([
        'nim' => 'The provided credentials do not match our records.',
    ]);
}

}
