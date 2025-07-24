<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreChamadoRequest;
use App\Http\Requests\UpdateChamadoRequest;
use App\Http\Requests\UpdateChamadoStatusRequest;
use App\Models\User;
use App\Models\Chamado;
use Illuminate\Support\Facades\Auth;

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

        $user = Auth::user();

        $user->chamados()->create($request->validated());

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chamado $chamado)
    {
        return view('chamados.edit', compact('chamado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateChamadoRequest $request, Chamado $chamado)
    {

        $chamado->fill($request->validated())->save();

        return to_route('dashboard')->with('message', 'Alterado com sucesso!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chamado $chamado)
    {
        $chamado->delete();

        return to_route('dashboard')->with('message', 'Deletado com sucesso!');
    }

    public function alterStatus(UpdateChamadoStatusRequest $request, Chamado $chamado)
    {

        $chamado->update($request->validated());

        return to_route('dashboard')->with('message', 'Status alterado');
    }
}
