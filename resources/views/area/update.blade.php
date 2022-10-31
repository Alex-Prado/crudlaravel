@extends('welcome')
@section('content')
    <div class="option">

        <h3>actualizar area</h3>
    </div>
    <form action="{{ route('area.update', ['area' => $area]) }}" method="POST" class="form">
        @method('PATCH')
        @csrf
        <div class="form-content">
            <input type="text" class="form-input" name="nombrearea" placeholder="nombre del area"
                value="{{ $area->nombrearea }}">
        </div>
        <div class="form-content">
            <button class="form-btn" type="submit">UPDATE</button>
        </div>
    </form>
@endsection
