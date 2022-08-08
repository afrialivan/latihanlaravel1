<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function register(Request $request)
    {
        $validateDate = $request->validate([
            'name' => 'required|max:255',
            'nis' => 'required|min:9',
            'password' => 'required|min:3'
        ]);
        
        $validateDate['password'] = bcrypt($validateDate['password']);
        
        // dd($request);

        User::create($validateDate);

        $request->session()->flash('success', 'Registrasi sukses');

        return redirect('/login');
    }
}
