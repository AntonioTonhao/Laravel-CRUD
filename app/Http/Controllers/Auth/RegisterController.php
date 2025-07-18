<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeRegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(MakeRegisterRequest $request)
    {
        if ($request->tryToRegister()) {
            return to_route('dashboard');
        }

        return back()->width(['message' => 'Registro invalido']);
    }
}
