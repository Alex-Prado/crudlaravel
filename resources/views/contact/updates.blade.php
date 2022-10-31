@extends('welcome')
@section('content')
    <div class="option">
        <h3>actualizar contacto</h3>
    </div>
    @foreach ($contactos as $contacto)
        <form action="{{ route('contact.update', ['contact' => $contacto]) }}" method="POST" class="form">
            @method('PATCH')
            @csrf
            <div class="form-content">

                <input type="text" class="form-input" name="nombre" placeholder="nombre" value="{{ $contacto->nombre }}">
            </div>
            <div class="form-content">

                <input type="text" class="form-input" name="apellido" placeholder="apellido"
                    value="{{ $contacto->apellido }}">
            </div>
            <div class="form-content">

                <input type="text" class="form-input" name="telefono" placeholder="telefono"
                    value="{{ $contacto->telefono }}">
            </div>
            <div class="form-content">

                <select name="area_id" class="form-select" value='{{ $contacto->nombrearea }}'>
                    @foreach ($areas as $area)
                        <option value="{{ $area->id }}">{{ $area->nombrearea }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-content">
                <button class="form-btn" type="submit">UPDATE</button>
            </div>
        </form>
    @endforeach
@endsection
