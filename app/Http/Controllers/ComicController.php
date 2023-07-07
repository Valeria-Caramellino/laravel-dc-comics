<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        /**qui uso la funzione dello store */
        $data = $request->validated();
        
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
    public function update(UpdateComicRequest $request, $id)
    {  
        $comic = Comic::findOrFail($id);
        
        $data = $request->validated();
      
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
