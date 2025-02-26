<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        if(!\Auth::user()->hasRole('view-gallery')) return back();
        $gallery = Gallery::first();
        return view('pages.gallery.index',compact('gallery'));
    }

}
