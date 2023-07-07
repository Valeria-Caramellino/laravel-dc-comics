<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = config('dati.someLinksTestata');
        $blueFooter= config('dati.SectionBlueFooter');
        $stringFooter=config('dati.SectionStringFooter');
        $miniFooter = config('dati.SectionMiniFooter');

        $comics = Comic::all();
        return view("comics.index", compact('comics','links','blueFooter','stringFooter','miniFooter'));
    }
    /*
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blueFooter= config('dati.SectionBlueFooter');
        $stringFooter=config('dati.SectionStringFooter');
        $miniFooter = config('dati.SectionMiniFooter');
        $links = config('dati.someLinksTestata');
        return view("comics.create",compact('links','blueFooter','stringFooter','miniFooter'));
    }

    /**funzione di validazione */
    private function validateComic($data) {

        $validator = Validator::make($data, [
            "title" => "required|min:2|max:255",
            "description" => "max:65535",
            "thumb" => "url|max:65535",
            "price" => "required|min:2|max:255",
            "series" => "required|min:3|max:255",
            "sale_date" => "required|date",
            "type" => "required|min:3|max:50",
            "artists" => "required|min:2|max:255",
            "writers" => "required|min:2|max:255",
        ], [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" => "Il titolo deve essere almeno di :min caratteri",
            "title.max"=> "Il titolo deve avere meno di :max caratteri",
            "description.max"=>"La descrizione non pò contenere piu di :max caratteri",
            "thumb.url"=>"url non valido",
            "thumb.max"=>"La descrizione non pò contenere piu di :max caratteri",
            "price.required" => "Il price è obbligatorio",
            "price.min" => "Il price deve essere almeno di :min caratteri",
            "price.max"=> "Il price deve avere meno di :max caratteri",
            "series.required" => "La serie è obbligatorio",
            "series.min" => "La serie deve essere almeno di :min caratteri",
            "series.max"=> "La serie deve avere meno di :max caratteri",
            "sale_date.required"=>"La data è obbligatoria",
            "sale_date.date"=>"La data deve avere un formato data",
            "type.required" => "Il type è obbligatorio",
            "type.min" => "Il type deve essere almeno di :min caratteri",
            "type.max"=> "Il type deve avere meno di :max caratteri",
            "artists.required" => "Artists è obbligatorio",
            "artists.min" => "Artists deve essere almeno di :min caratteri",
            "artists.max" => "Artists deve essere meno di :max caratteri",
            "writers.required" => "Writers è obbligatorio",
            "writers.min" => "Writers deve essere almeno di :min caratteri",
            "writers.max" => "Writers deve essere meno di :max caratteri",

        ])->validate();

        return $validator;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**qui uso la funzione */
        $data = $this->validateComic( $request->all() );
        
        $newProduct = new Comic();

        $newProduct->fill( $data );
        /*
        $newProduct->title = $data['title'];
        $newProduct->description = $data['description'];
        $newProduct->thumb = $data['thumb'];
        $newProduct->price = $data['price'];
        $newProduct->series = $data['series'];
        $newProduct->sale_date = $data['sale_date'];
        $newProduct->type = $data['type'];
        $newProduct->artists = $data['artists'];
        $newProduct->writers = $data['writers'];
        */
        $newProduct->save();
        
        return redirect()->route('comics.show', $newProduct->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blueFooter= config('dati.SectionBlueFooter');
        $stringFooter=config('dati.SectionStringFooter');
        $miniFooter = config('dati.SectionMiniFooter');
        $links = config('dati.someLinksTestata');
        $comic = Comic::findOrFail($id);
        return view("comics.show", compact('comic','links','blueFooter','stringFooter','miniFooter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $blueFooter= config('dati.SectionBlueFooter');
        $stringFooter=config('dati.SectionStringFooter');
        $links = config('dati.someLinksTestata');
        $miniFooter = config('dati.SectionMiniFooter');
        $comic = Comic::findOrFail($id);
        return view("comics.edit", compact('comic','links','blueFooter','stringFooter','miniFooter'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $comic = Comic::findOrFail($id);
        
        $data = $this->validateComic( $request->all() );
      
        $comic->fill( $data );
        /*
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
        */
        $comic->update();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $comic = Comic::findOrFail($id);
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
