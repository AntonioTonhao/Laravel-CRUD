<div>
    <h1>DEU CERTO!!!</h1>
        
        @if ($message = session()->get('message'))         
        <div>{{ $message }}</div>      
        @endif
    
        <ul>
    

        @foreach ( $chamados as $chamado )

        <li>

        <a href="{{ route('chamados.edit', $chamado) }}">{{ $chamado->ticket }}</a>
        
        </li>
            
        @endforeach
    </ul>
</div>
