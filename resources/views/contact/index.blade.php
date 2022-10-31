<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>contactos</h1>
    <a href="{{ route('contact.create') }}">CREAR NUEVO</a>
    <div class="container">

        @if (count($contactos) > 0)
            @if (session('mensaje'))
                <h4>{{ session('mensaje') }}</h4>
            @endif
            @foreach ($contactos as $contact)
                <div class="card">
                    <h4>{{ $contact->nombre }}</h4>
                    <h4>{{ $contact->apellido }}</h4>
                    <h4>{{ $contact->telefono }}</h4>
                    <h4>{{ $contact->nombrearea }}</h4>
                    <form action="{{ route('contact.destroy', ['contact' => $contact]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('contact.show', ['contact' => $contact]) }}">VIEW</a>
                        <button type="submit">DELETE</button>
                    </form>
                </div>
            @endforeach
        @else
            <h4>aun no hay contactos</h4>
        @endif
    </div>
</body>

</html>
