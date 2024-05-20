<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola desde show</title>
</head>
<body>
    <h1>Bienvenido  {{$truck->name}}</h1>
    <h1>tu vive en {{$truck->population}}</h1> 
    <h1>tu direccion {{$truck->address}}</h1>
    <h1>tu idenficacion {{$truck->dni}}</h1>
    <h1>tu numero de telefono {{$truck->phoneNumbre}}</h1>
    <h1>tu salario {{$truck->salary}}</h1>
    <form action="{{route('trucks.destroy' , $truck)}}" method="POST">
        <br>
        <a href="{{route('trucks.index')}}">ir al inicio</a>
        <br><br>
        <a href="{{route('trucks.edit', $truck)}}">ir a editar</a>
        <br><br>
    @csrf
    @method('delete')
    <button type="submit">Borrar</button>
    </form>
</body>
</html>