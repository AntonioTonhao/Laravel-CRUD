<div>
    <h1>DEU CERTO!!!</h1>

    <ul>
        @foreach ( $chamados as $chamado )

        <li>

        <a href="/links/{{$chamado->id}}">{{$chamado->ticket}}</a>
        
        </li>
            
        @endforeach
    </ul>
</div>
