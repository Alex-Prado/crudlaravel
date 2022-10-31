<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>actualizar area</h1>
    <form action="{{ route('area.update', ['area' => $area]) }}" method="POST">
        @method('PATCH')
        @csrf
        <input type="text" name="nombrearea" placeholder="nombre del area" value="{{ $area->nombrearea }}">
        <button type="submit">actualizar</button>
    </form>

</body>

</html>
