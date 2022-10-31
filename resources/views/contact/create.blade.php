@extends('welcome')
@section('content')
    <h2>crear contacto</h2>
    <form action="{{ route('contact.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="nombre">
        <input type="text" name="apellido" placeholder="apellido">
        <input type="text" name="telefono" placeholder="telefono">
        <select name="area_id" id="">
            @foreach ($areas as $area)
                <option value="{{ $area->id }}">{{ $area->nombrearea }}</option>
            @endforeach
        </select>
        <button type="submit">CREAR</button>
    </form>
@endsection
