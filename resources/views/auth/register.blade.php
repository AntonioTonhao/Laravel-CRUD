<x-layout.app/>
<x-navigation/>
    <div class="mx-auto max-w-screen-md flex justify-center py-20 items-center w-full min-h-screen">
    
    <div class="card bg-gray-100 w-100 shadow-sm h-150">
    
    <div class="card-body items-center text-center py-15 space-y-10">

    <h1 class="card-title font-bold text-5xl text-black">Register</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input class="input input-md py-5 w-80" name="name" placeholder="Nome">

        <p class="text-sm mt-1 text-left w-full min-h-[1.25rem]">
            @error('name')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </p>
        </div>

        <br>

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
            <input class="input input-md py-5 w-80" name="email_confirmation" placeholder="Confirmar email">

         <p class="text-sm mt-1 text-left w-full min-h-[1.25rem]">
            @error('email_confirmation')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </p>
        </div>

        <br>

        <div>
            <input class="input input-md py-5 w-80" name="password" type="password" placeholder="Senha">

            <p class="text-sm mt-1 text-left w-full min-h-[1.25rem]">
            @error('password')
            <span class="text-red-600">{{ $message }}</span>
            @enderror
        </p>
        </div>

        <br>

        <button class="btn btn-soft btn-info w-40">Registrar</button>
    </form>

</div>
</div>
</div>
