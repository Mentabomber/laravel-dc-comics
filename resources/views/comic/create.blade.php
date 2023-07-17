@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            NEW Comic
        </h1>
        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            <label for="thumb">Thumb</label>
            <br>
            <input type="text" name="thumb">
            <br>

            <label for="title">Title</label>
            <br>
            <input type="text" name="title">
            <br>

            <label for="type">Type</label>
            <br>
            <input type="text" name="type">
            <br>

            <label for="series">Series</label>
            <br>
            <input type="text" name="series">
            <br>

            <label for="sale_date">sale_date</label>
            <br>
            <input type="text" name="sale_date">
            <br>

            <label for="description">Description</label>
            <br>
            <input type="text" name="description">
            <br>

            <label for="price">Price</label>
            <br>
            <input type="text" name="price">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
        <a href="/">Back to Home</a>
    </div>
@endsection
