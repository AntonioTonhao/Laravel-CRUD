<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chamado;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __invoke()
    {
        /** @var User $user */

        $user = Auth::user();

        $chamados = $user->isAdmin() ? Chamado::orderBy('created_at', 'desc')->paginate(10)
            : Chamado::where('user_id', $user->id)->paginate(10);

        return view('dashboard', [
            'chamados' => $chamados,
        ]);
    }
}
