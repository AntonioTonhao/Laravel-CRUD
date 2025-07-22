<div>
        @if(session('message'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
        Swal.fire({
            title: 'Sucesso!',
            text: '{{ session("message") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
        </script>
        @endif

        <form action="{{ route('chamados.create') }}" method="GET">
        <button>Criar novo chamado</button>
        </form>
        
        
        <ul>
            

        @foreach ( $chamados as $chamado )

        <li>

        <a href="{{ route('chamados.edit', $chamado) }}">{{ $chamado->ticket }}</a>
        
        <form action="{{ route('chamado.destroy', $chamado) }}" method="POST" onsubmit="return confirm('Deseja realmente excluir?')">
        @csrf
        @method('DELETE')

        <button>Deletar</button>

        </form>

        <form action="{{ route('chamado.alterStatus', $chamado) }}" method="POST" onsubmit="return confirm('Deseja realmente finalizar o chamado?')">
        @csrf
        @method('PATCH')
        <input type="hidden" name="status" value="concluido">

        <button>Finalizar</button>

        </form>
        </li>
            
        @endforeach
    </ul>
</div>
