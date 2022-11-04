@extends('welcome')
@section('content')
    <div class="option">
        <h3>Operarios</h3>

    </div>
    <div class="option option_mod">
        <div class="option-btn">
            <a class="add" href="{{ route('contact.create') }}"><i class="fa-light fa-user"></i>ADD NEW</a>
            <a class="add" href="{{ route('export', ['dato' => $dato]) }}">EXPORT DATA</a>
        </div>
        <form action="{{ route('contact-import') }}" class="add_mod" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" class="file" name="file">
            <i class="fa-light fa-file-csv file-csv"></i>
            <button class="search"><i class="fa-light fa-file-import"></i></button>
        </form>
        <form action="{{ route('contact.filtro') }}" method="POST" class="add_mod">
            @csrf
            <input type="text" name="filtro" placeholder="Search...">
            <button class="search" type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
        </form>
    </div>

    @if (count($contactos) > 0)
        @if (session('mensaje'))
            <h4 class="mensaje">{{ session('mensaje') }}</h4>
        @endif
        <div class="container">

            @foreach ($contactos as $clave => $contact)
                <div class="card">
                    <div class="card-name">
                        <h4>{{ $contact->nombre }}</h4>
                        <h4>{{ $contact->apellido }}</h4>
                    </div>
                    <div class="card-other">
                        <p class="area">{{ $contact->nombrearea }}</p>
                        <p class="phone">{{ $contact->telefono }}</p>
                    </div>
                    <form action="{{ route('contact.destroy', ['contact' => $contact->id]) }}" method="post"
                        class="form-option">
                        @method('DELETE')
                        @csrf
                        <a class="btn edit" href="{{ route('contact.show', ['contact' => $contact->id]) }}"><i
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
