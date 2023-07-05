<footer class="mb-4">
    <section class="container bg-primary">

        <div class="row text-light justify-content-center p-4">
            <!--sezione blu non riesco a ciclare su img passando $icon['icon']-->
            @foreach($blueFooter as $icon)
                <section class="d-flex align-items-center col-2 p-2">
                    
                    <img class="col-2" src= "{{ Vite::asset($icon['icon']) }}" alt="icon">
                    
                    <p class="col mt-3">{{ $icon['text'] }}</p>
                </section>
            @endforeach
        </div>
    </section>
    <section class="container my-section pb-2">
        <div class="row text-light align-self-stretch ">
            <div class="col-6 d-flex justify-content-around">
                <div class="d-flex flex-wrap">

                    @foreach($stringFooter as $oggetto)
                        <div class="col-4">
                            <p class="mt-2">{{ $oggetto['title']}}</p>
                            <ul>
                                @foreach ($oggetto['listFooter'] as $item)
                                     <li>{{$item}}</li> 
                                @endforeach
                              
                            </ul>
                        </div>
                    @endforeach
                    
                    
                </div>
            </div>
            <div class="col-6 d-flex justify-content-center my-bg">

            </div>
        </div>
    </section>
    <section class="container ">

        <div class="row justify-content-around align-items-baseline bg-dark">
            <!--parte sinistra-->
            <div class="col-2">
                <button class="btn text-light m-2">SIGN-UP NOW!</button>
            </div>
            <!--parte destra-->
            <div class="col-6 d-flex justify-content-end align-items-baseline">
                <p class="text-primary">FOLLOWS US</p>
                <!--dinamica con icone social-->
                @foreach($miniFooter as $item)
                    <div class=" mx-2"> 
                        <img src="{{Vite::asset($item['social'])}}">
                    </div>
                @endforeach
            </div>
        </div>

    </section>

</footer>