<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;

class ArtistEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $artist = new Artist();
        } else {
            $artist = Artist::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.artist', compact('artist'));
        }

        $request->validate([
            'name' => 'required|max:170',
            'genre' => 'required|max:170',
            'time_from' => 'required|max:20',
            'time_to' => 'required|max:20',
            'picture_url' => 'max:170',
            'description' => 'required'
        ]);

        $artist->fill($request->all());
        $artist->save();
        return redirect(route('list.artists'));
    }

    function list(Request $request){
        $artists = Artist::all();
        return view('admin.list.artist', compact('artists'));
    }
}
