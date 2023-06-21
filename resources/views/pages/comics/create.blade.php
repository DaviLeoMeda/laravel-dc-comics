@extends('layouts.app')

@section('title')
    Laravel DC Comics | Create Comic
@endsection


@section('content')
    <h1>DC Comics Creation Space</h1>

    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <div>
            <label for="">Title</label>
            <input type="text" name="title">
        </div>

        <div>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="">Thumb</label>
            <input type="text" name="thumb">
        </div>
        <div>
            <label for="">Price</label>
            <input type="number" name="price">
        </div>
        <div>
            <label for="">Series</label>
            <input type="text" name="series">
        </div>
        <div>
            <label for="">Sale date</label>
            <input type="date" name="sale_date">
        </div>
        <div>
            <label for="">Sale date</label>
            <input type="date" name="sale_date">
        </div>
        <button type="submit" class="btn btn-primary my-2">Submit your Comic!</button>
    </form>
@endsection
