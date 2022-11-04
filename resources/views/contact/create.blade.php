@extends('welcome')
@section('content')
    <div class="option">

        <h3>crear contacto</h3>
    </div>
    <form action="{{ route('contact.store') }}" method="POST" class="form">
        @csrf

        <div class="form-content">
            <input type="text" name="nombre" class="form-input" value="{{old('nombre')}}" placeholder="nombre">
        </div>
        @error('nombre')
            <p class="validate-error">* {{ $message }}</p>
        @enderror
        <div class="form-content">
            <input type="text" name="apellido" class="form-input" value="{{old('apellido')}}" placeholder="apellido">
        </div>
        @error('apellido')
            <p class="validate-error">* {{ $message }}</p>
        @enderror
        <div class="form-content">
            <input type="text" name="telefono" class="form-input" value="{{old('telefono')}}" placeholder="telefono">
        </div>
        @error('telefono')
            <p class="validate-error">* {{ $message }}</p>
        @enderror
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
