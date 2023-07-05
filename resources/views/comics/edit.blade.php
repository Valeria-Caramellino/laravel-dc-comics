@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Pagina Edit</h1>
    <div class="row g-4 py-4">
        <div class="col">
            <form action="{{ route('comics.update', $comic->id) }}" method="post">
                @csrf
                
                @method('PUT')

                <label for="name">Title</label>
                <input class="form-control" type="text" name="title" value="{{$comic->title}}">

                <label for="name">Description</label>
                <textarea name="description" class="form-control" cols="30" rows="5">{{$comic->description}}</textarea>

                <label for="name">Thumb</label>
                <input class="form-control" type="text" name="thumb" value= "{{$comic->thumb}}">

                <label for="name">Price</label>
                <input class="form-control" type="text" name="price" value= "{{$comic->price}}">

                <label for="name">Series</label>
                <input class="form-control" type="text" name="series" value= "{{$comic->series}}">

                <label for="name">Sale_date</label>
                <input class="form-control" type="date" name="sale_date" value= "{{$comic->sale_date}}">

                <label for="name">Type</label>
                <input class="form-control" type="text" name="type" value= "{{$comic->type}}">

                <label for="name">Artists</label>
                <input class="form-control" type="text" name="artists" value= "{{$comic->artists}}">

                <label for="name">Writers</label>
                <input class="form-control" type="text" name="writers" value= "{{$comic->writers}}">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection