@extends('layouts.app')

@section('title')
    Laravel DC Comics | Comics Space
@endsection


@section('content')
    <h1>DC Comics Section</h1>

    @forelse ($comics as $elem)
        <div class="row">
            <div class="col-2">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $elem->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $elem->title }}</h5>
                        <p class="card-text">{{ $elem->description }}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{ $elem->price }}</li>
                        <li class="list-group-item">{{ $elem->series }}</li>
                        <li class="list-group-item">{{ $elem->sale_date }}</li>
                        <li class="list-group-item">{{ $elem->type }}</li>
                    </ul>
                </div>
            </div>
        </div>
    @empty
        <h5>Nothing here</h5>
    @endforelse
@endsection
