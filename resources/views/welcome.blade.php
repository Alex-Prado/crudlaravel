<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>LARAVEL</title>
</head>

<body>
    <section>
        <nav>
            <h3>LARAVEL PRUEBA</h3>
            <ul>
                <li>
                    <a href="{{ route('contact.index') }}">contactos</a>
                    <a href="{{ route('area.index') }}">areas</a>
                </li>
            </ul>
        </nav>
        @yield('content')
    </section>
</body>

</html>
