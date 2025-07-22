<x-layout.app>
<div>
    <h1>Edit Ticket {{ $chamado->ticket }}</h1>

    <form action="{{ route('chamados.edit', $chamado) }}" method="post">
        @csrf
        @method('put')

        <div>
            <input name="ticket" placeholder="Ticket" value="{{$chamado->ticket}}">

            @error('ticket')
            <span> {{ $message  }} </span>
            @enderror
        </div>
     
        <br>

        <div>
            <input name="about_ticket" placeholder="Sobre o ticket" value="{{$chamado->about_ticket}}">

            @error('about_ticket')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <div>
            <label for="prioridade">Prioridade</label>

            <select name="prioridade" id="prioridade" >

            <option value="baixa" {{ $chamado->prioridade == 'baixa' ? 'selected' : '' }}>Baixa</option>
            <option value="media" {{$chamado->prioridade == 'media' ? 'selected': ' '}}>Media</option>     
            <option value="alta"{{$chamado->prioridade == 'alta' ? 'selected': ' '}}>Alta</option>          

            </select>

            @error('prioridade')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <button>Editar</button>
    
    </form>


</div>

</x-layout.app>