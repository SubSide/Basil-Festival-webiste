<?php

namespace App\Http\Controllers;

use App\Popupmarkt;
use Illuminate\Http\Request;

class PopupEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $popup = new Popupmarkt();
        } else {
            $popup = Popupmarkt::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.popup', compact('popup'));
        }

        $request->validate([
            'name' => 'required|max:170',
            'picture_url' => 'max:170',
            'description' => 'required'
        ]);

        $popup->fill($request->all());
        $popup->save();
        return redirect(route('list.popup'));
    }

    function list(Request $request){
        $popups = Popupmarkt::all();
        return view('admin.list.popup', compact('popups'));
    }

    function delete(Request $request, $id){
        Popupmarkt::find($id)->delete();
        return redirect(route('list.popup'));
    }
}
