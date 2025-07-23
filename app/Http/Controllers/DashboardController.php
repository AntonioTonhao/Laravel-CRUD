<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var User $user */

        $user = auth()->user();

        $chamados = $user->isAdmin() ? Chamado::orderBy('created_at', 'desc')->get()
            : Chamado::where('user_id', $user->id)->get();
        return view('dashboard', [
            'chamados' => $chamados,
        ]);
    }
}
