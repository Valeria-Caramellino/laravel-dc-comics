<header>
    <div class="container mt-4 bg-black">
      <div class="row justify-content-around">

        <!--sezione sinistra-->
        <div class="col-1">
          <a class="" href="#">
            <img class="logo " src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Laravel Logo">
          </a>  
        </div>
        
        <!--sezione destra fatta dinamica-->
        <div class="col-7 d-flex justify-content-end align-items-center">
            @foreach ($links as $link)
                <section class="p-2">
                    <a href="{{ $link['href'] }}">{{ $link['text'] }}</a>
                </section>
        
            @endforeach
        </div>

      </div>
    </div>
    <div class="container">
        <div class="row">
            {{--foto grande jumbotron--}}
            <div class="col-12 my-height"></div>
        </div>
    </div>
  </header>