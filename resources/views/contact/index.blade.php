@extends('welcome')
@section('content')
    <h1>contactos</h1>
    <a href="{{ route('contact.create') }}">CREAR NUEVO</a>

    @if (count($contactos) > 0)
        @if (session('mensaje'))
            <h4>{{ session('mensaje') }}</h4>
        @endif
        <div class="container">
            @foreach ($contactos as $contact)
                <div class="card">
                    <h4>{{ $contact->nombre }}</h4>
                    <h4>{{ $contact->apellido }}</h4>
                    <p>{{ $contact->telefono }}</p>
                    <p>{{ $contact->nombrearea }}</p>
                    <form action="{{ route('contact.destroy', ['contact' => $contact]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <a class="btn edit" href="{{ route('contact.show', ['contact' => $contact]) }}">VIEW</a>
                        <button class="btn delete" type="submit">DELETE</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <h4>aun no hay contactos</h4>
    @endif
@endsection
