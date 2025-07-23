<x-layout.app>
    
    <div class="mx-auto max-w-screen-md flex justify-center py-20 items-center w-full min-h-screen">
    
    <div class="card bg-gray-100 w-100 shadow-sm h-120">
    
    <div class="card-body items-center text-center py-15 space-y-10">

    <h1 class="card-title font-bold text-5xl text-black ">Login</h1>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <input class="input input-md py-5 w-80" name="email" placeholder="E-mail" value="{{ old('email') }}">

        <p class="text-sm mt-1 text-left w-full min-h-[1.25rem]">
            @error('email')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </p>

        </div>

<br>

        <div>
            <input class="input py-5 w-80" name="password" type="password" placeholder="Senha">

             <p class="text-sm mt-1 text-left w-full min-h-[1.25rem]">
            @error('email')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
            </p>
        </div>

        <br>

        <button class="btn btn-soft btn-info w-40 text-blue-300">Logar</button>

        @if($message = session()->get('message'))
        <div class="text-sm text-red-500 font-bold mt-5">{{ $message }}</div>
        @endif

    </form>


</div>
</div>
</div>
</x-layout.app>
