@extends('welcome')
@section('content')
    <div class="option">
        <h3>crear area</h3>
    </div>
    <form action="{{ route('area.store') }}" method="POST" class="form">
        @csrf
        <div class="form-content">
            <input type="text" class="form-input" name="nombrearea" placeholder="nombre del area">
        </div>
        <div class="form-content">
            <button class="form-btn" type="submit">CREATE</button>
        </div>
    </form>
@endsection
