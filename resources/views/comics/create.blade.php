@extends('layouts.app')

@section('content')
<div class="container bg-black">
    <div class="row">
        <h1 class="text-center">Crea nuovo prodotto</h1>
    </div>
    {{--
    <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div>
    --}}
    <div class="row justify-content-center py-4">
        <div class="col-8">
            <form action="{{ route('comics.store') }}" method="post" class="d-flex justify-content-center flex-wrap needs-validation">
                @csrf
                <div class="col-12">

                    <label class="py-2">Title</label>
                    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{old("title")}}">
                    @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror


                    <label class="py-2">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="5">{{ old("description") }}</textarea>
                    @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Thumb</label>
                    <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" value="{{ old("thumb") }}">
                    @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Price</label>
                    <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" value="{{ old("price") }}">
                    @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Series</label>
                    <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" value="{{ old("series") }}">
                    @error("series")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Sale_date</label>
                    <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" value="{{ old("sale_date") }}">
                    @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Type</label>
                    <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" value="{{ old("type") }}">
                    @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Artists</label>
                    <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" value="{{ old("artists") }}">
                    @error("artists")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                    <label class="py-2">Writers</label>
                    <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" value="{{ old("writers") }}">
                    @error("writers")
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                </div>
                
                <div class="col-3">
                    <input class="form-control mt-4 btn" type="submit" value="Invia">
                </div>
              
             </form>
        </div>
    </div>

</div>
@endsection