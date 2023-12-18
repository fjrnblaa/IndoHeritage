<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Review;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index() {
        return view('login');
    }

    public function home()
    {
        return view('home');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        Users::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);
        return redirect('/index');
    }

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($validatedData)) {
            $user = Users::where('email', $request->email)->first();
            Auth::login($user);
            if ($user->role === 'user') {
                $reviews = Review::all();
                $contents = Content::all();
                return view('index', ['review' => $reviews, 'contents' => $contents]);
            } else {
                $contents = Content::all();
                return view('dashboard', ['contents' => $contents]);
            }
        } else {
            Session::flash('gagal', 'Login Gagal');
            return redirect('/index');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('index');
    }
}
