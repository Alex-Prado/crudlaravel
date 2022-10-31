@extends('welcome')
@section('content')
    <h2>actualizar contacto</h2>
    @foreach ($contactos as $contacto)
        <form action="" method="POST">
            @method('PATCH')
            @csrf
            <input type="text" name="nombre" placeholder="nombre" value="{{ $contacto->nombre }}">
            <input type="text" name="apellido" placeholder="apellido" value="{{ $contacto->apellido }}">
            <input type="text" name="telefono" placeholder="telefono" value="{{ $contacto->telefono }}">
            <select name="area_id" value='{{ $contacto->nombrearea }}'>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->nombrearea }}</option>
                @endforeach
            </select>
            <button type="submit">actualizar</button>
        </form>
    @endforeach
@endsection
