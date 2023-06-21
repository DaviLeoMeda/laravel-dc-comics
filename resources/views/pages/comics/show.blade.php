@extends('layouts.app')

@section('title')
    Laravel DC Comics | Single Comic Display
@endsection


@section('content')
    <h3>DC Comic Space Display</h3>

    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $comic->title }}</h5>
            <p class="card-text">{{ $comic->description }}
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $comic->price }}</li>
            <li class="list-group-item">{{ $comic->series }}</li>
            <li class="list-group-item">{{ $comic->sale_date }}</li>
            <li class="list-group-item">{{ $comic->type }}</li>
        </ul>
    </div>
@endsection
