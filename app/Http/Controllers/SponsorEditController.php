<?php

namespace App\Http\Controllers;

use App\Sponsor;
use Illuminate\Http\Request;

class SponsorEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $sponsor = new Sponsor();
        } else {
            $sponsor = Sponsor::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.sponsor', compact('sponsor'));
        }

        $request->validate([
            'name' => 'required|max:170',
            'description' => 'required',
            'imageUrl' => 'max:170'
        ]);

        $sponsor->fill($request->all());
        $sponsor->save();
        return redirect(route('list.sponsors'));
    }

    function list(Request $request){
        $sponsors = Sponsor::all();
        return view('admin.list.sponsor', compact('sponsors'));
    }

    function delete(Request $request, $id){
        Sponsor::find($id)->delete();
        return redirect(route('list.sponsors'));
    }
}
