<x-layout.app>
    
    <div class="mx-auto max-w-screen-md flex justify-center py-50 items-center">
    
    <div class="card bg-blue-600 w-96 shadow-sm">
    
    <div class="card-body items-center text-center py-15 space-y-10">

    <h1 class="card-title font-bold text-5xl ">Login</h1>

    <form action="{{ route('login') }}" method="post">
        @csrf

        <div>
            <input class="input input-md py-5 w-80" name="email" placeholder="E-mail" value="{{ old('email') }}">

            @error('email')
            <span class="text-sm text-red-500"> {{ $message  }} </span>
            @enderror

        </div>


        
        <br>

        <div>
            <input class="input py-5 w-80" name="password" type="password" placeholder="Senha">

            @error('password')
            <span class="text-sm text-red-500 "> {{ $message  }} </span>
            @enderror
        </div>

        <br>

        <button class="btn btn-soft btn-info w-40 text-blue-300">Logar</button>

        @if($message = session()->get('message'))
        <div class="text-sm text-red-500 font-bold">{{ $message }}</div>
        @endif

    </form>


</div>
</div>
</div>
</x-layout.app>
