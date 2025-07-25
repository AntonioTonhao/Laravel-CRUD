<table class="table ">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Ticket</th>
      <th scope="col">Categoria</th>
      <th scope="col">Pessoa/Setor</th>
      <th scope="col">Data e Hora</th>
      <th scope="col">Status</th>
      <th scope="col">Prioridade</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
     @foreach ($chamados as $chamado)
    
    <tr class="border-b border-gray-700">
        
    <th scope="row">{{ $chamado->id }}</th>
      
    <td class="max-w-[200px] truncate">
    <span class="cursor-pointer hover:underline" onclick="document.getElementById('edit_modal_{{ $chamado->id }}').showModal()">
        {{ $chamado->ticket}}
    </span>
    </td>
    <x-modal-edit-chamado :chamado="$chamado" /> 
    
    <td> 
    {{ $chamado->categoria }}
    </td>

     <td>{{ $chamado->User->name}}</td>

     <td>{{ $chamado->created_at}}</td>
      
     <td>{{ $chamado->status}}</td>
      
      <td>{{ $chamado->prioridade}}</td>
      
<td class="">
    @can('is-admin')
            <div class="flex justify-between">
            {{-- Botão Excluir --}}
            <form action="{{ route('chamado.destroy', $chamado) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir o chamado?')">
                @csrf
                @method('DELETE')
                <button class="px-2 py-1 text-sm bg-red-500 text-white rounded hover:bg-red-700 transition cursor-pointer" title="Excluir">
                    Excluir
                </button>
            </form>

            {{-- Botão Finalizar --}}
            <form action="{{ route('chamado.alterStatus', $chamado) }}" method="POST" onsubmit="return confirm('Deseja realmente concluir o chamado?')">
                @csrf
                @method('PATCH')
                <input type="hidden" name="status" value="Concluido">
                <button class="px-2 py-1 text-sm bg-green-600 text-white rounded hover:bg-green-800 transition cursor-pointer" title="Concluir">
                    Finalizar
                </button>
            </form>

            {{-- Botão Detalhes --}}

            <a onclick="document.getElementById('details_modal_{{ $chamado->id }}').showModal()" class="px-2 py-1 text-sm  text-white rounded hover:bg-gray-500 transition cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-receipt-text-icon lucide-receipt-text"><path d="M4 2v20l2-1 2 1 2-1 2 1 2-1 2 1 2-1 2 1V2l-2 1-2-1-2 1-2-1-2 1-2-1-2 1Z"/><path d="M14 8H8"/><path d="M16 12H8"/><path d="M13 16H8"/></svg>
            </a>

            <x-modal-details-chamado :chamado="$chamado" />

        </div>
    @endcan
</td>
    
    
    </tr>
    @endforeach
  </tbody>
</table>