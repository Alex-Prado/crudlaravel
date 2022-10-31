<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <title>LARAVEL</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
    @import url("https://kit-pro.fontawesome.com/releases/v6.1.1/css/pro.min.css");

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

    ul li a {
        color: #222;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 12px;
    }

    .mensaje {
        background: yellow;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 40px;
        margin-bottom: 5px;
        margin-top: 15px;
    }

    .container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-bottom: 1rem;
        margin-top: 1rem
    }

    .card {
        border: 1px solid #666;
        padding: 5px;
        text-align: center;
        min-height: 160px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 10px;
    }

    .card-other>* {
        font-size: 13px;
        text-transform: uppercase;
    }

    .card-other .area {
        letter-spacing: 2px;
    }

    .card-name {
        letter-spacing: 2px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 5px;
        text-transform: capitalize;
    }

    .form-option {
        width: 100%;
        display: flex;
    }

    .btn {
        border: 1px solid #ddd;
        outline: none;
        width: 50%;
        font-size: 12px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        cursor: pointer;
        background-color: #222;
        color: #ffff;
        text-transform: uppercase;
        border-radius: 5px;
    }

    .edit {
        background-color: darkgreen;
    }

    .delete {
        background-color: darkred;
    }

    .option {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 55px;
        flex-wrap: wrap;
        gap: 7px
    }

    .option_mod {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        height: initial;
    }

    .option .add_mod,
    .option .add {
        font-size: 13px;
        border: 1px solid #ddd;
        padding: 0 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        background-color: #222;
        border-radius: 5px;
        color: #fff;
        letter-spacing: 2px;
        position: relative;
        height: 35px;
    }

    .option .add_mod {
        padding: 0;
        /* width: 160px; */
        border: 1px solid #444;
        overflow: hidden;
        background: none
    }

    .add_mod input {
        position: absolute;
        height: 100%;
        width: calc(100% - 25px);
        left: 0;
        padding-left: 5px;
        border: none;
        outline: none;
    }

    .add_mod .search {
        background: #222;
        width: 30px;
        position: absolute;
        right: 0;
        height: 100%;
        border: none;
        outline: none;
    }

    .add_mod .search i {
        background: none;
        color: #fff;
    }

    .add_mod .import {
        position: absolute;
        right: 0;
        height: 100%;
        border: none;
        outline: none;
        padding: 0 5px;
        background-color: #222;
        color: #fff;
    }

    .option h3 {
        letter-spacing: 5px;
    }

    .add i {
        font-size: 10px;
    }

    .form {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 5px;
    }

    .form-content {
        width: 280px;
        height: 40px;
        position: relative;
        border: 1px solid #888;
    }

    .form-select,
    .form-btn,
    .form-input {
        border: none;
        outline: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .form-select,
    .form-input {
        padding-left: 10px;
    }

    .form-btn {
        cursor: pointer;
        background-color: blue;
        color: #fff;
        letter-spacing: 2px;
    }

    @media (max-width:900px) {
        .container {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width:600px) {
        .container {
            grid-template-columns: repeat(2, 1fr);
        }

        .option .add_mod {
            width: 100%
        }

        .option {
            height: initial;
        }

        .option_mod {
            display: flex;
            flex-wrap: wrap;
        }
    }

    @media (max-width:400px) {
        .container {
            grid-template-columns: repeat(1, 1fr);
        }
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
