<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $links = config('store');
        return view('welcome', compact('links'));
    }

    public function other(){
        $links = config('store');
        return view('other', compact('links'));
    }
}
