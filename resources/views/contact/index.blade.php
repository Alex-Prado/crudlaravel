@extends('welcome')
@section('content')
    <div class="option">
        <h3>Operarios</h3>
        <a class="add" href="{{ route('contact.create') }}"><i class="fa-light fa-user"></i>ADD NEW</a>
    </div>

    @if (count($contactos) > 0)
        @if (session('mensaje'))
            <h4 class="mensaje">{{ session('mensaje') }}</h4>
        @endif
        <div class="container">
            @foreach ($contactos as $contact)
                <div class="card">
                    <div class="card-name">
                        <h4>{{ $contact->nombre }}</h4>
                        <h4>{{ $contact->apellido }}</h4>
                    </div>
                    <div class="card-other">
                        <p class="area">{{ $contact->nombrearea }}</p>
                        <p class="phone">{{ $contact->telefono }}</p>
                    </div>
                    <form action="{{ route('contact.destroy', ['contact' => $contact]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <a class="btn edit" href="{{ route('contact.show', ['contact' => $contact]) }}"><i
                                class="fa-light fa-user-pen"></i>VIEW</a>
                        <button class="btn delete" type="submit"><i class="fa-light fa-trash-can"></i>DELETE</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <h4>aun no hay contactos</h4>
    @endif
@endsection
