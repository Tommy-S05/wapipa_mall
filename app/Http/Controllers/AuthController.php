<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login_register() {
        return view('web.login_register');
    }

    public function login(Request $request) {
        //        dd($request);
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ]);


        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');
        //        dd($remember);
        if(Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
            //            return redirect()->route('web.home');
        } else {
            //            return redirect()->back();
            throw ValidationException::withMessages([
                'validation' => __('auth.failed')
            ]);
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/');
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users, email',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        return redirect()->to('/');
    }
}
