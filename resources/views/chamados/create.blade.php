<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
<div>
    <h1>Create Ticket</h1>

    <form action="{{ route('chamados.create') }}" method="post">
        @csrf

        <div>
            <input name="ticket" placeholder="Ticket">

            @error('ticket')
            <span> {{ $message  }} </span>
            @enderror
        </div>
     
        <br>

        <div>
            <input name="about_ticket" placeholder="Sobre o ticket" >

            @error('about_ticket')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <div>
            <label for="prioridade">Prioridade</label>

            <select name="prioridade" id="prioridade">

            <option value="baixa">Baixa</option>
            <option value="media">Media</option>     
            <option value="alta">Alta</option>          

            </select>

            @error('prioridade')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <button>Criar</button>
        
        
        <a href="{{ route('dashboard') }}">Cancelar</a>

        
    </form>


</div>