<?php

namespace App\Http\Controllers;

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
           

        $comics = Comic::all();
        return view("comics.index", compact('comics','links'));
    }
    /*
    $data = [
        
        'links' => config('dati.someLinksTestata'),
        'footerBlue' => config('dati.SectionBlueFooter'),
        
        'SectionStringFooter' => config('dati.SectionStringFooter'),
        
    ];*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $links = config('dati.someLinksTestata');
        return view("comics.create",compact('links'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $newProduct = new Comic();
        $newProduct->title = $data['title'];
        $newProduct->description = $data['description'];
        $newProduct->thumb = $data['thumb'];
        $newProduct->price = $data['price'];
        $newProduct->series = $data['series'];
        $newProduct->sale_date = $data['sale_date'];
        $newProduct->type = $data['type'];
        $newProduct->artists = $data['artists'];
        $newProduct->writers = $data['writers'];
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
        $links = config('dati.someLinksTestata');
        $comic = Comic::findOrFail($id);
        return view("comics.show", compact('comic','links'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        $links = config('dati.someLinksTestata');
        $comic = Comic::findOrFail($id);
        return view("comics.edit", compact('comic','links'));
        
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
        $data = $request->all();
      
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
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
