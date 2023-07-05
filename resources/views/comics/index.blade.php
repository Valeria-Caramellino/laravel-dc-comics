@extends('layouts.app')

@section('content')
<div class="container bg-black">
    <div class="row">
        <h1 class="text-center py-4">Lista Fumetti</h1>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-3">
            <a class="btn" href="{{ route("comics.create") }}">Aggiungi un nuovo prodotto alla lista</a>
        </div>
        
    </div>
    <div class="row ">
       
        <div class="d-flex justify-content-center flex-wrap col-10 mx-auto">
            
            
            @foreach($comics as $item)
                
                <div class="m-4 my-card d-flex flex-column rounded col-3">
                <a href="{{route('comics.show', $item->id)}}">
                    <div class="my-class ">
                    <img class="rounded-top"  src= "{{$item->thumb}}" alt=""> 
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                    <p>{{ $item->title }}</p>
                    
                    </div>   
                </a>
                </div>
               
            @endforeach
        
        </div>
    </div>

</div>
@endsection