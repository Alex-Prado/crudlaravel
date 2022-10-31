<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>LARAVEL</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Quicksand', sans-serif;
        text-decoration: none;
        list-style: none;
    }

    section {
        width: min(96%, 1200px);
        margin: auto;
    }

    nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 45px;
        border-bottom: 1px solid #555;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    .card {
        border: 1px solid #666;
        padding: 5px;
        text-align: center;
    }

    .btn {
        border: 1px solid #ddd;
        outline: none;
        width: 100px;
        font-size: 12px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        background-color: #222;
        color: #ffff;
        text-transform: uppercase;
    }
</style>

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
