<?php

namespace App\Http\Controllers;

use App\Huisregel;
use Illuminate\Http\Request;

class HuisregelEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $huisregel = new Huisregel();
        } else {
            $huisregel = Huisregel::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.huisregel', compact('huisregel'));
        }

        $request->validate([
            'question' => 'required|max:170',
            'answer' => 'required',
        ]);

        $huisregel->fill($request->all());
        $huisregel->save();
        return redirect(route('list.huisregels'));
    }

    function list(Request $request){
        $huisregels = Huisregel::all();
        return view('admin.list.huisregels', compact('huisregels'));
    }

    function delete(Request $request, $id){
        Huisregel::find($id)->delete();
        return redirect(route('list.huisregels'));
    }
}
