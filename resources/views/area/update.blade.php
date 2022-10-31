@extends('welcome')
@section('content')
    <h1>actualizar area</h1>
    <form action="{{ route('area.update', ['area' => $area]) }}" method="POST">
        @method('PATCH')
        @csrf
        <input type="text" name="nombrearea" placeholder="nombre del area" value="{{ $area->nombrearea }}">
        <button type="submit">actualizar</button>
    </form>
@endsection
