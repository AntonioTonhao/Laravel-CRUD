<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
<div>
    <h1>Register</h1>

    <form action="{{ route('register') }}" method="post">
        @csrf

        <div>
            <input name="name" placeholder="name">

            @error('name')
            <span> {{ $message  }} </span>
            @enderror
        </div>

        <br>

        <div>
            <input name="email" placeholder="email" value="{{ old('email') }}">

            @error('email')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <div>
            <input name="email_confirmation" placeholder="confirmar email">
        </div>

        <br>

        <div>
            <input name="password" type="password" placeholder="senha">

            @error('password')
            <span> {{ $message  }} </span>
            @enderror
        </div>

        <br>

        <button>Registrar</button>

        @if($message = session()->get('message'))
        <div>{{ $message }}</div>
        @endif

    </form>


</div>