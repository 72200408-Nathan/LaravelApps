<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function user()
    {
        $user = User::paginate(5);
        return view('user', ['user' => $user]);
    }

    public function formuser()
    {
        return view('formuser');
    }

    public function login()
    {
        return view('login');
    }

    public function validasi(Request $request)
    {
    $validatedData = $request->validasi([
        'nik_user' => 'required|unique:posts|max:255',
        'password' => 'required',
    ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/logout')->with('flash', 'Anda Berhasil Logout !');
    }
}
