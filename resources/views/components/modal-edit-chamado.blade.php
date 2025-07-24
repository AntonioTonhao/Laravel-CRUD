{{-- Modal Blade Edit Ticket --}}
<dialog id="edit_modal_{{ $chamado->id }}" class="modal">
  <div class="modal-box bg-blue-300 w-full max-w-3xl h-100">
    <h3 class="text-lg mb-8">Editar Chamado #{{ $chamado->id }}</h3>

    <form action="{{ route('chamados.update', $chamado) }}" method="post" class="space-y-6">
      @csrf
      @method('put')

      <input name="ticket" value="{{ $chamado->ticket }}" class="input input-bordered w-full text-white bg-blue-700 mb-10" />
      
      <select name="prioridade" class="select select-bordered w-40 text-black bg-orange-300 ">
        <option value="Baixa"{{ $chamado->prioridade == 'Baixa' ? 'selected' : '' }}>Baixa</option>
        <option value="Media"{{ $chamado->prioridade == 'Media' ? 'selected' : '' }}>Media</option>
        <option value="Alta" {{  $chamado->prioridade == 'Alta' ? 'selected' : '' }}>Alta</option>
      </select>

      <select name="categoria" class="select select-bordered w-40 text-black bg-orange-300 ">
        <option value="Impressora" {{ $chamado->categoria == 'Impressora' ? 'selected' : '' }}>Impressora</option>
        <option value="Redes" {{ $chamado->categoria == 'Redes' ? 'selected' : '' }}>Redes</option>
        <option value="Manutenção PC" {{ $chamado->categoria == 'Manutenção PC' ? 'selected' : '' }}>Manutenção PC</option>
        <option value="Relogio de ponto" {{ $chamado->categoria == 'Relogio de ponto' ? 'selected' : '' }}>Relogio de ponto</option>
        <option value="Software" {{ $chamado->categoria == 'Software' ? 'selected' : '' }}>Software</option>
      </select>

      <div class="modal-action mt-15">
        
        <button type="submit" class="btn btn-success ">Salvar</button>

      </div>
    </form>
  </div>
</dialog>
