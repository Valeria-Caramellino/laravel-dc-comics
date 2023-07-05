@extends('layouts.app')

@section('content')

<div class="container bg-black">
    <div class="row py-4">
        <h2 class="text-center">Hai selezionato il Fumetto: {{$comic->title}} </h2>
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-around my-3">
            <a href="{{route('home')}}" class="btn">Torna alla pagina proncipale</a>
            <a href="{{route('comics.edit',$comic->id)}}" class="btn">Modifica campo</a>
            
            <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella il prodotto" class="btn">

            </form>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="m-4 d-flex flex-column rounded col-6 card-show">
            <h3 class="text-center my-4">Titolo: {{ $comic->title }}</h3>
            <div class="d-flex col-12">
                <div class="col">
                    <img class="rounded-top"  src= "{{$comic->thumb}}" alt="{{ $comic->title }}">
                </div>
                <div class="col p-2">
                    <p> <span>Descrizione: </span>{{$comic->description}}</p>
                </div>
            </div>
            <div class="d-flex col-12">
                <div class="col-4" >
                    <p> <span>Prezzo:</span>  {{$comic->price}}</p>
                    <p><span>Data Uscita:</span>  {{$comic->sale_date}}</p>
                    <p> <span>Type:</span>  {{$comic->type}}</p>
                </div>
                <div class="d-flex col">
                    <p class="px-2"> <span>Artisti:</span>  {{$comic->artists}}</p>
                    <p class="px-2"><span>Scrittori: </span> {{$comic->writers}}</p>
                </div>
                
                
            </div>
            
           
            
        </div>        
                
    </div>
</div>
@endsection