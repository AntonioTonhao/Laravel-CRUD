<?php

namespace App\Http\Controllers;

use App\Models\Chamado;
use App\Http\Requests\StoreChamadoRequest;
use App\Http\Requests\UpdateChamadoRequest;
use App\Models\User;

class ChamadoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chamados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreChamadoRequest $request)


    {
        /** @var User $user */

        $user = auth()->user();

        $user->chamados()->create($request->validated());

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chamado $chamado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChamadoRequest $request, Chamado $chamado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chamado $chamado)
    {
        //
    }
}
