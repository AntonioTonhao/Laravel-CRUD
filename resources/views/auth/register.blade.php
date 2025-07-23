<x-layout.app>

    <div class="mx-auto max-w-screen-md flex justify-center py-20 items-center w-full min-h-screen">
    
    <div class="card bg-blue-600 w-96 shadow-sm">
    
    <div class="card-body items-center text-center py-15 space-y-10">

    <h1 class="card-title font-bold text-5xl ">Register</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input class="input input-md py-5 w-80" name="name" placeholder="Nome">

            @error('name')
            <p class="text-red-600 text-left w-full text-sm mt-1"> {{ $message  }}</p>
            @enderror
        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="email" placeholder="E-mail" value="{{ old('email') }}">

            @error('email')
            <p class="text-red-600 text-left w-full text-sm mt-1"> {{ $message  }}</p>
            @enderror

        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="email_confirmation" placeholder="Confirmar email">

                        @error('email')
            <p class="text-red-600 text-left w-full text-sm mt-1"> {{ $message  }}</p>
            @enderror
        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="password" type="password" placeholder="Senha">

            @error('password')
            <p class="text-red-600 text-left w-full text-sm mt-1"> {{ $message  }}</p>
            @enderror
        </div>

        <br>

        <button class="btn btn-soft btn-info w-40">Registrar</button>

        @if($message = session()->get('message'))
        <div class="text-sm text-red-500">{{ $message }}</div>
        @endif

    </form>

</div>
</div>
</div>

</x-layout.app>