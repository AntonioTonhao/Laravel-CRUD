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
      
      <select name="categoria" class="select select-bordered w-40 text-black bg-orange-300 ">
        <option value="Impressora" >Impressora</option>
        <option value="Redes" >Redes</option>
        <option value="Manutenção PC" >Manutenção PC</option>
        <option value="Relogio de ponto">Relogio de ponto</option>
        <option value="Software" >Software</option>
      </select>

      @error('categoria')
            <span class="text-red-500 text-sm block"> {{ $message  }} </span>
            @enderror
          
      <select name="prioridade" class="select select-bordered w-40 text-black bg-orange-300 mt-10">
        <option value="Baixa">Baixa</option>
        <option value="Media">Media</option>
        <option value="Alta">Alta</option>
      </select>
      
      <div class="modal-action mt-15">
        
        <button type="submit" class="btn btn-success ">Salvar</button>

      </div>
    </form>
  </div>
</dialog>
