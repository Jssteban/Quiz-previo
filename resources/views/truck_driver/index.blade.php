<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de los camioneros</title>
</head>
<body>
    <h1>Bienvenido a la pagina principal de los camioneros registrados</h1>
    <a href="{{route('trucks.create')}}">Crear usuario</a>
    @foreach ($trucks as $truck)
    <li>
        <a href="{{route('trucks.show', $truck->id)}}">{{$truck->name}}</a>
    </li>
    
        
    @endforeach
    
</body>
</html>