@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Pagina home!</h1>
    <div class="row g-4">
        <div class="d-flex flex-wrap col-10 mx-auto">
            
            
                @foreach($links as $oggetto)
        
                <div class="m-4 my-card d-flex flex-column rounded col-3">
                    <div class="my-class ">
                    <img class="rounded-top"  src= "{{$oggetto['thumb']}}" alt=""> 
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                    <p>{{ $oggetto['title'] }}</p>
                    </div>              
                </div>
             @endforeach
        
        </div>
    </div>

</div>
@endsection