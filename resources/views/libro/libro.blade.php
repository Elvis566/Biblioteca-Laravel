<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('guardarLibro')}}" method="POST">
        @csrf
        <h3>Datos del libro</h3>
        <label for="titulo">Titulo: </label><br>
        <input type="text" id="titulo" name="titulo"><br>
        <label for="year">Año de publicacion</label><br>
        <input type="number" id="year" name="year"><br><br>
        <select name="id_autor" id="">
            @foreach($autor as $item)
                <option value={{$item->id}}>{{$item->nombre}}</option>
            @endforeach
        </select>
       
        <button type="submit">Guardar registro</button>
      
    </form>

    <button><a href="{{url('datos')}}">Libros</a></button>
</body>
</html>