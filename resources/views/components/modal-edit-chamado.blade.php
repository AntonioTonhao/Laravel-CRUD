{{-- Modal Blade Edit Ticket --}}
<dialog id="edit_modal_{{ $chamado->id }}" class="modal">
  <div class="modal-box bg-blue-300 w-full max-w-3xl h-100">
    <h3 class="text-lg mb-8">Editar Chamado #{{ $chamado->id }}</h3>

    <form action="{{ route('chamados.edit', $chamado) }}" method="post" class="space-y-6">
      @csrf
      @method('put')

      <input name="ticket" value="{{ $chamado->ticket }}" class="input input-bordered w-full text-white bg-blue-700" />
      <input name="about_ticket" value="{{ $chamado->about_ticket }}" class="input input-bordered w-full  text-white bg-blue-700 " />
      <select name="prioridade" class="select select-bordered w-40 text-black bg-orange-300 ">
        <option value="baixa" {{ $chamado->prioridade == 'baixa' ? 'selected' : '' }}>Baixa</option>
        <option value="media" {{ $chamado->prioridade == 'media' ? 'selected' : '' }}>Media</option>
        <option value="alta" {{ $chamado->prioridade == 'alta' ? 'selected' : '' }}>Alta</option>
      </select>

      <div class="modal-action mt-15">
        
        <button type="submit" class="btn btn-success ">Salvar</button>

      </div>
    </form>
  </div>
</dialog>
