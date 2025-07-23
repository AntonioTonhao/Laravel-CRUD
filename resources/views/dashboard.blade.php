<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script defer src="//unpkg.com/alpinejs"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



      
</head>
<body class="font-bold bg-orange-300 text-blue-500 min-h-screen w-full">
        
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
        
    <div class="flex justify-center">
        <ul class="list bg-blue-100 rounded-box shadow-md w-full max-w-4xl mt-25">
        
        <li class="p-5 pb-5 text-xs opacity-60 tracking-wide">
        <button onclick="document.getElementById('create_modal').showModal()" class="btn">Criar chamado</button>
        
        @if ($errors->any())
        <script>
            window.onload = function() {
                document.getElementById('create_modal').showModal();
            }
        </script>
        @endif

        <x-modal-create-chamado/>
        </form>
        </li>

    @foreach ($chamados as $chamado)
      
    <li class="list-row flex items-center gap-4 p-10 border-t border-base-200  ">
            
        {{-- Abertura do modal/nome do ticket --}}
        <div class="flex-1">
          <div class="font-bold text-base text-black mb-2 inline-block">
           <p class= "link" onclick="document.getElementById('edit_modal_{{ $chamado->id }}').showModal()">{{$chamado->ticket}}</p>
           <x-modal-edit-chamado :chamado="$chamado" />
          </div>

           {{-- Descrição --}}
          <p class=" mb-5 text-xs mt-2 opacity-80">
            {{ $chamado->about_ticket ?? 'Sem descrição' }}
          </p>

            {{-- Prioridade --}}
          <div class=" mb-5 text-xs uppercase font-semibold opacity-60  {{ $chamado->prioridade == 'alta' ? 'text-red-500' : ($chamado->prioridade == 'media' ? 'text-yellow-500' : 'text-green-500') }}" >   
            {{ $chamado->prioridade}}
          </div>
          
          {{-- Campos adicionais --}}
          <div class=" mt-1 text-xs text-gray-500">
            <span>Status: {{ $chamado->status }}</span> · 
            <span>Aberto por: {{ $chamado->User->name ?? 'teste'}}</span> · 
            <span>Criado em: {{ $chamado->created_at->format('d/m/Y') }}</span>
          </div>
    
        </div>

        {{-- Botões --}}
        <div class="flex justify-center items-center gap-2">
          <form action="{{ route('chamado.destroy', $chamado) }}" method="POST" onsubmit="return confirm('Deseja realmente finalizar o chamado?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-soft btn-secondary" title="Excluir">
              Excluir
            </button>
          </form>

          <form action="{{ route('chamado.alterStatus', $chamado) }}" method="POST" onsubmit="return confirm('Deseja realmente finalizar o chamado?')">
            @csrf
            @method('PATCH')
            <input type="hidden" name="status" value="concluido">
            <button class="btn btn-soft btn-success" title="Finalizar">
             Concluir
            </button>
          </form>
        </div>
      </li>
    @endforeach
      </ul>
</div>
</body>
</html>


       
