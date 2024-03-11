<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\User;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(){
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }
    public function view($id){
        $album = Album::findOrFail($id);
        return view('albums.view', compact('album'));
    }
}
