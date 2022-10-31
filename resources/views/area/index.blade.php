<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>AREAS</h1>
    <a href="{{ route('area.create') }}">crear nuevo</a>
    <div class="container">
        @if (session('mensaje'))
            <h4>{{ session('mensaje') }}</h4>
        @endif
        @if (count($areas) > 0)
            @foreach ($areas as $area)
                <div class="card">
                    <h4>{{ $area->nombrearea }}</h4>
                    <form action="{{ route('area.destroy', ['area' => $area]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <a href="{{ route('area.show', ['area' => $area]) }}">view</a>
                        <button type="submit">DELETE</button>
                    </form>
                </div>
            @endforeach
        @else
            <h5>aun no hay areas</h5>
        @endif
    </div>
</body>

</html>
