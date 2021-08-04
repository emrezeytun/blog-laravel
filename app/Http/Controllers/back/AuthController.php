<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index() {
        return view('back.auth.login');
    }

    public function loginPost(Request $request) {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('summary.index');
        }

        return redirect()->route('admin.login')->withErrors('E-mail or password is wrong');
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
