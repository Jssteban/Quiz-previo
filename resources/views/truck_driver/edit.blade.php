<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita tus datos</title>
</head>
<body>
    <h1>edita tus datos</h1>
    <form action="{{route('trucks.update', $truck)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre completo
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    <br>
    @error('name')
        <span>{{$message}}</span>
    @enderror
    <label>
          Colaca tu ciudad
          <br>
          <input type="text" name="population" value="{{old('population')}}">
    </label>
    <br>
    @error('population')
    <span>{{$message}}</span>
@enderror
<label>
    Colaca tu dirreccion
    <br>
    <input type="text" name="address" value="{{old('address')}}">
</label>
<br>
@error('address')
<span>{{$message}}</span>
@enderror
<label>
    Colaca tu numero de identificacion
    <br>
    <input type="number" name="dni" value="{{old('dni')}}">
</label>
<br>
@error('dni')
<span>{{$message}}</span>
@enderror
<label>
    Colaca tu numero de telefono
    <br>
    <input type="number" name="phoneNumbre" value="{{old('phoneNumbre')}}">
</label>
<br>
@error('phoneNumbre')
<span>{{$message}}</span>
@enderror
<label>
    ingresa el salario que desead
    <br>
    <input type="number" name="salary" value="{{old('salary')}}">
</label>
<br>
@error('salary')
<span>{{$message}}</span>
@enderror
<br>
<button type="submit">Actualizar</button>
    </form>
    
</body>
</html>