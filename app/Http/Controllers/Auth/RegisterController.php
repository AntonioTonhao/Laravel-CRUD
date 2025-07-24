<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeRegisterRequest;


class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function register(MakeRegisterRequest $request)
    {
        if ($request->tryToRegister()) {
            return back()->with((['message' => 'Registro realizado com sucesso']));
        }

        return back()->with(['message' => 'Registro invalido']);
    }
}
