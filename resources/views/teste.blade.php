<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>ola</h1>

    {{--aaaaaaaa--}}

    @php
        $nome = 'josue';

        @endphp

        <h3>{{$nome}}</h3>

    @php 
    
        $clientes = array("joao", "pedro", "lucas");

    @endphp

    @if(count($clientes)==0)
        <p>Não há clientes cadastrados</p>

    @elseif(count($clientes)==1)
        <p>Há 1 cliente cadastrado </p>
    @else
        <p>Há {{count($clientes)}} clientes cadastrados</p>
    @endif

    @for($i=0;$i< 5;$i++)

        <img src="./img/logo.png" height="50px" width="50px" alt="LOGO">

    @endfor

    @foreach ($clientes as $cliente)
        <p>{{$cliente}}</p>

    @endforeach

    @php 
    
    $imagens = array("./img/logo.png", "./img/logo.png", "./img/logo.png");

    @endphp

    @foreach ($imagens as $imagem)
        <img src="{{$imagem}}" height="50px" width="50px" alt="">

    @endforeach

    @foreach ($clientes as $cliente)
        <p>{{$loop->index}}</p>
        <p>{{$cliente}}</p>

    @endforeach

    @php

        $listaclientes = array(

        0 => array('nome' => 'João', 'telefone' => '9999-9999'),

        1 => array('nome' => 'Maria', 'telefone' => '8888-8888'),

        2 => array('nome' => 'Pedro', 'telefone' => '7777-7777'),

        3 => array('nome' => 'Ana', 'telefone' => '6666-6666')

        );

    @endphp

        @foreach ($listaclientes as $posicao => $valor)

        <p>{{ $posicao }}: {{ $valor['nome'] }} - Telefone: {{ $valor['telefone'] }}</p>

    @endforeach


    @php

        $listaclientes = array();

    @endphp

    @forelse ($listaclientes as $posicao => $valor)
        <p>{{ $posicao }}: {{ $valor['nome'] }} - Telefone: {{ $valor['telefone'] }}</p>

    @empty
        <p> Não existe usuário cadastrado </p>
    @endforelse

    @php

        $listaclientes = array("João", "Pedro", "Lucas");

    @endphp

    @while ($cliente= array_pop($listaclientes))

        {{ $cliente }}

    @endwhile

    @php

    $listaclientes = array("João", "Pedro", "Lucas");

    $i = 0;

    @endphp

    @while($i < count($listaclientes))

        {{ $listaclientes[$i] }}

    @php

        $i++;

    @endphp

    @endwhile

    <h1>{{$produto}}</h1>

    <h3> Está custando : R$ {{ $valor }} </h3>

</body>
</html>