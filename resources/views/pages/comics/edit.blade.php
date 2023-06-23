@extends('layouts.app')

@section('title')
    Laravel DC Comics | Create Comic
@endsection


@section('content')
    <h1>DC Comics Modify Project</h1>

    <form action="{{ route('comics.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="">Title</label>
            <input type="text" name="title" value="{{ old('title') ?? $comic->title }}">
        </div>

        <div>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"
                value="{{ old('description') ?? $comic->description }}"></textarea>
        </div>
        <div>
            <label for="">Thumb</label>
            <input type="text" name="thumb" value="{{ old('thumb') ?? $comic->thumb }}">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="price" value="{{ old('price') ?? $comic->price }}">
        </div>
        <div>
            <label for="">Series</label>
            <input type="text" name="series" value="{{ old('series') ?? $comic->series }}">
        </div>
        <div>
            <label for="">Sale date</label>
            <input type="date" name="sale_date" value="{{ old('sale_date') ?? $comic->sale_date }}">
        </div>
        <div>
            <label for="">Sale date</label>
            <input type="type" name="type" value="{{ old('type') ?? $comic->type }}">
        </div>
        <button type="submit" class="btn btn-primary my-2">Change your Comic!</button>
    </form>
@endsection
