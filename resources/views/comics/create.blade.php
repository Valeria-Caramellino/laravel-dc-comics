@extends('layouts.app')

@section('content')
<div class="container bg-black">
    <div class="row">
        <h1 class="text-center">Crea nuovo prodotto</h1>
    </div>
    
    <div class="row justify-content-center py-4">
        <div class="col-8">
            <form action="{{ route('comics.store') }}" method="post" class="d-flex justify-content-center flex-wrap">
                @csrf
                <div class="col-12">
                    <label for="name" class="py-2">Title</label>
                    <input class="form-control" type="text" name="title">

                    <label for="name" class="py-2">Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="5"></textarea>

                    <label for="name" class="py-2">Thumb</label>
                    <input class="form-control" type="text" name="thumb">

                    <label for="name" class="py-2">Price</label>
                    <input class="form-control" type="text" name="price">

                    <label for="name" class="py-2">Series</label>
                    <input class="form-control" type="text" name="series">

                    <label for="name" class="py-2">Sale_date</label>
                    <input class="form-control" type="date" name="sale_date">

                    <label for="name" class="py-2">Type</label>
                    <input class="form-control" type="text" name="type">

                    <label for="name" class="py-2">Artists</label>
                    <input class="form-control" type="text" name="artists">

                    <label for="name" class="py-2">Writers</label>
                    <input class="form-control" type="text" name="writers">

                </div>
                
                <div class="col-3">
                    <input class="form-control mt-4 btn" type="submit" value="Invia">
                </div>
              
             </form>
        </div>
    </div>

</div>
@endsection