@extends('welcome')
@section('content')
    <h1>crear area</h1>
    <form action="{{ route('area.store') }}" method="POST">
        @csrf
        <input type="text" name="nombrearea" placeholder="nombre del area">
        <button type="submit">CREAR</button>
    </form>
@endsection
