<?php

namespace App\Http\Controllers;

use App\Lezing;
use Illuminate\Http\Request;

class LezingEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $lezing = new Lezing();
        } else {
            $lezing = Lezing::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.lezing', compact('lezing'));
        }

        $request->validate([
            'name' => 'required|max:170',
            'time_from' => 'required|max:20',
            'time_to' => 'required|max:20',
            'picture_url' => 'max:170',
            'description' => 'required'
        ]);

        $lezing->fill($request->all());
        $lezing->save();
        return redirect(route('list.lezingen'));
    }

    function list(Request $request){
        $lezingen = Lezing::all();
        return view('admin.list.lezingen', compact('lezingen'));
    }

    function delete(Request $request, $id){
        Lezing::find($id)->delete();
        return redirect(route('list.lezingen'));
    }
}
