<div class="navbar bg-gray-100 shadow-sm px-4">
  <!-- Início (logo ou título) -->
  <div class="navbar-start">
    <p class="font-bold text-blue-400 ">Tickets Tonhão</p>
  </div>

  <!-- Centro (menu para telas grandes) -->
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1 gap-2 text-sm font-medium text-gray-700">
      <li><a href="/" class="hover:bg-indigo-100 rounded-md text-blue-400 font-bold">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-tickets-icon lucide-tickets"><path d="m4.5 8 10.58-5.06a1 1 0 0 1 1.342.488L18.5 8"/><path d="M6 10V8"/><path d="M6 14v1"/><path d="M6 19v2"/><rect x="2" y="8" width="20" height="13" rx="2"/></svg>
        Tickets
      </a>
    </li>
      <li>
        
        <a href="/register" class="hover:bg-indigo-100 rounded-md text-blue-400 font-bold">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-plus-icon lucide-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><line x1="19" x2="19" y1="8" y2="14"/><line x1="22" x2="16" y1="11" y2="11"/></svg>
        Registrar usuário
      </a>
    </li>
    </ul>
  </div>

  <!-- Fim (botão de logout) -->
  <div class="navbar-end ">
    
    <form method="GET" action="{{ route('logout') }}" onsubmit="return confirm('Deseja realmente sair')">
      @csrf
      @method('POST')
      
      <button type="submit" class="text-black cursor-pointer " >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-log-out-icon lucide-log-out"><path d="m16 17 5-5-5-5"/><path d="M21 12H9"/><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/></svg>
      </button>

    </form>

  </div>
</div>
