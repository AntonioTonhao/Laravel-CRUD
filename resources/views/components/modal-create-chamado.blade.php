{{-- Modal Blade Create Ticket --}}
<dialog id="create_modal" class="modal">
  <div class="modal-box bg-blue-300 w-full max-w-4xl h-120">
    <h3 class="text-lg mb-8">Criar Chamado</h3>

    <form action="{{ route('chamados.store') }}" method="POST">
      @csrf

      <input name="ticket" class="input input-bordered w-full text-white bg-blue-700" placeholder="Ticket"/>
      @error('ticket')
            <span class="text-red-500 text-sm block"> {{ $message  }} </span>
            @enderror
      <input name="about_ticket" class="input input-bordered w-full  text-white bg-blue-700 mt-10" placeholder="About Ticket" />
      @error('about_ticket')
            <span class="text-red-500 text-sm block"> {{ $message  }} </span>
            @enderror
      <select name="prioridade" class="select select-bordered w-40 text-black bg-orange-300 mt-10">
        <option value="baixa">Baixa</option>
        <option value="media">Media</option>
        <option value="alta">Alta</option>
      </select>
      
      <div class="modal-action mt-15">
        
        <button type="submit" class="btn btn-success ">Salvar</button>

      </div>
    </form>
  </div>
</dialog>
