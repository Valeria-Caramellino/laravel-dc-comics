@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <h1>Risultato Selezione: {{$comic->title}} </h1>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="m-4 d-flex flex-column rounded col-3 card-show">
            <p>Titolo: {{ $comic->title }}</p>   
            <img class="rounded-top"  src= "{{$comic->thumb}}" alt=""> 
            <p>Descrizione: {{$comic->description}}</p>
            <small>Prezzo: {{$comic->price}}</small>
            <p>Data Uscita: {{$comic->sale_date}}</p>
            <p>Type: {{$comic->type}}</p>
            <p>Artisti: {{$comic->artists}}</p>
            <p>Scrittori: {{$comic->writers}}</p>
        </div>        
                
    </div>
</div>



<a href="{{route('home')}}">Torna alla pagina proncipale</a>
@endsection