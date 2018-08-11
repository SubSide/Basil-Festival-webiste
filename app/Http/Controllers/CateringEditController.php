<?php

namespace App\Http\Controllers;

use App\Catering;
use Illuminate\Http\Request;

class CateringEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $catering = new Catering();
        } else {
            $catering = Catering::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.catering', compact('catering'));
        }

        $request->validate([
            'name' => 'required|max:170',
            'picture_url' => 'max:170',
            'description' => 'required'
        ]);

        $catering->fill($request->all());
        $catering->save();
        return redirect(route('list.catering'));
    }

    function list(Request $request){
        $catering = Catering::all();
        return view('admin.list.catering', compact('catering'));
    }

    function delete(Request $request, $id){
        Catering::find($id)->delete();
        return redirect(route('list.catering'));
    }
}
