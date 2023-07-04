@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Pagina home!</h1>
    <div class="row g-4">
        <div class="d-flex flex-wrap col-10 mx-auto">
            
            
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