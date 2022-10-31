@extends('welcome')
@section('content')
    <h1>AREAS</h1>
    <a href="{{ route('area.create') }}">crear nuevo</a>
    @if (session('mensaje'))
        <h4>{{ session('mensaje') }}</h4>
    @endif
    @if (count($areas) > 0)
        <div class="container">
            @foreach ($areas as $area)
                <div class="card">
                    <h4>{{ $area->nombrearea }}</h4>
                    <form action="{{ route('area.destroy', ['area' => $area]) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <a class="btn edit" href="{{ route('area.show', ['area' => $area]) }}">view</a>
                        <button class="btn delete" type="submit">DELETE</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <h5>aun no hay areas</h5>
    @endif
@endsection
