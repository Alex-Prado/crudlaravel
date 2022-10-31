@extends('welcome')
@section('content')
    <div class="option">

        <h3>crear contacto</h3>
    </div>
    <form action="{{ route('contact.store') }}" method="POST" class="form">
        @csrf
        <div class="form-content">

            <input type="text" name="nombre" class="form-input" placeholder="nombre">
        </div>
        <div class="form-content">

            <input type="text" name="apellido" class="form-input" placeholder="apellido">
        </div>
        <div class="form-content">

            <input type="text" name="telefono" class="form-input" placeholder="telefono">
        </div>
        <div class="form-content">

            <select name="area_id" class="form-select" id="">
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->nombrearea }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-content">

            <button class="form-btn" type="submit">CREAR</button>
        </div>
    </form>
@endsection
