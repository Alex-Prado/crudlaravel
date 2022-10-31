@extends('welcome')
@section('content')
    <div class="option">
        <h3>Areas</h3>
        <a class="add" href="{{ route('area.create') }}"><i class="fa-light fa-user"></i>ADD NEW</a>
        <a class="add" href="{{route('generar-pdf')}}">PDF CONTACTOS</a>
    </div>
    @if (session('mensaje'))
        <h4 class="mensaje">{{ session('mensaje') }}</h4>
    @endif
    @if (count($areas) > 0)
        <div class="container">
            @foreach ($areas as $area)
                <div class="card">
                    <div class="card-name">
                        <h4>{{ $area->nombrearea }}</h4>
                    </div>
                    <form action="{{ route('area.destroy', ['area' => $area]) }}" method="post" class="form-option">
                        @method('DELETE')
                        @csrf
                        <a class="btn edit" href="{{ route('area.show', ['area' => $area]) }}"><i
                                class="fa-light fa-user-pen"></i>view</a>
                        <button class="btn delete" type="submit"><i class="fa-light fa-trash-can"></i>DELETE</button>
                    </form>
                </div>
            @endforeach
        </div>
    @else
        <h5>aun no hay areas</h5>
    @endif
@endsection
