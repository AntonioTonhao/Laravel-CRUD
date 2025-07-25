{{-- Modal Blade Details Ticket --}}
<dialog id="details_modal_{{$chamado->id}}" class="modal">
  <div class="modal-box bg-gray-100 w-full max-w-3xl h-auto text-gray-900 space-y-5">
    <h2 class="text-2xl font-semibold mb-6">🔍 Detalhes do Chamado #{{ $chamado->id }}</h2>

<div class="bg-slate-800 p-4 rounded space-y-2">
  <!-- Linha com ícone e "Ticket" lado a lado -->
  <div class="flex items-center space-x-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
         viewBox="0 0 24 24" fill="none" stroke="currentColor"
         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
         class="lucide lucide-tickets-icon lucide-tickets text-white">
      <path d="m4.5 8 10.58-5.06a1 1 0 0 1 1.342.488L18.5 8"/>
      <path d="M6 10V8"/>
      <path d="M6 14v1"/>
      <path d="M6 19v2"/>
      <rect x="2" y="8" width="20" height="13" rx="2"/>
    </svg>
    <h3 class="text-white text-lg font-medium">Ticket</h3>
  </div>

  <!-- Valor do chamado -->
  <p class="text-white text-sm ml-1">{{ $chamado->ticket }}</p>
</div>

      <div class="bg-slate-800 p-4 rounded space-y-2">
        <h3 class="text-white text-lg font-medium">📁 Categoria</h3>
        <p class="text-white text-sm">{{ $chamado->categoria }}</p>
      </div>

      <div class="bg-slate-800 p-4 rounded space-y-2">
        <h3 class="text-white text-lg font-medium">⚠️ Prioridade</h3>
        <p class="text-white text-sm">{{ $chamado->prioridade }}</p>
      </div>

      <div class="bg-slate-800 p-4 rounded space-y-2">
        <h3 class="text-white text-lg font-medium">🕒 Criado em</h3>
        <p class="text-white text-sm">{{ $chamado->created_at }}</p>
      </div>

      <div class="bg-slate-800 p-4 rounded space-y-2">
        <h3 class="text-white text-lg font-medium">📌 Status</h3>
        <p class="text-white text-sm">{{ $chamado->status }}</p>
      </div>
    </div>
  </div>
</dialog>
