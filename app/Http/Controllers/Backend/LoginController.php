<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show() {
        return view('backend.auth.login');
    }

    public function login(LoginRequest $request) {
        if(auth()->guard('backend')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('admin.dashboard.index');
        } else {
            return redirect()->route('admin.login.show')->with(['error'=>'Invalid email or password']);
        }
    }

    public function logout() {
        auth()->logout();
        return redirect()->route('admin.login.show');
    }
}
