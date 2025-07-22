<x-layout.app>

    <div class="mx-auto max-w-screen-md flex justify-center py-50 items-center">
    
    <div class="card bg-blue-600 w-96 shadow-sm">
    
    <div class="card-body items-center text-center py-15 space-y-10">

    <h1 class="card-title font-bold text-5xl ">Register</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input class="input input-md py-5 w-80" name="name" placeholder="Nome">

            @error('name')
            <span> {{ $message  }} </span>
            @enderror
        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="email" placeholder="E-mail" value="{{ old('email') }}">

            @error('email')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="email_confirmation" placeholder="Confirmar email">
        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="password" type="password" placeholder="Senha">

            @error('password')
            <span> {{ $message  }} </span>
            @enderror
        </div>

        <br>

        <button class="btn btn-soft btn-info w-40">Registrar</button>

        @if($message = session()->get('message'))
        <div>{{ $message }}</div>
        @endif

    </form>

</div>
</div>
</div>

</x-layout.app>