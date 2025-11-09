<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(AuthRequest $request)
    {

    }
    public function loginform()
    {
        return view('auth.login');
    }

    public function login(Request $request) 
    {
        // 認証処理 ...
    }

    
}
