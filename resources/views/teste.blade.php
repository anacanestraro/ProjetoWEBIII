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

   

    @foreach($clientes as $cliente)
        <p>{{$cliente}}</p>
    @endforeach

</body>
</html>