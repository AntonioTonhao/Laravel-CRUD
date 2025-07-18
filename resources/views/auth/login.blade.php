<div>
    <h1>Login</h1>

    <form action="/login" method="post">
        @csrf

        <div>
            <input name="email" placeholder="email" value="{{ old('email') }}">

            @error('email')
            <span> {{ $message  }} </span>
            @enderror

        </div>

        <br>

        <div>
            <input name="password" type="password" placeholder="senha">

            @error('password')
            <span> {{ $message  }} </span>
            @enderror
        </div>

        <br>

        <button>Logar</button>

        @if($message = session()->get('message'))
        <div>{{ $message }}</div>
        @endif

    </form>


</div>