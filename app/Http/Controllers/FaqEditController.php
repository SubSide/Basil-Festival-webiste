<?php

namespace App\Http\Controllers;

use App\Faq;
use Illuminate\Http\Request;

class FaqEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $faq = new Faq();
        } else {
            $faq = Faq::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.faq', compact('faq'));
        }

        $request->validate([
            'question' => 'required|max:170',
            'answer' => 'required|max',
        ]);

        $faq->fill($request->all());
        $faq->save();
        return redirect(route('list.faqs'));
    }

    function list(Request $request){
        $faqs = Faq::all();
        return view('admin.list.faq', compact('faqs'));
    }

    function delete(Request $request, $id){
        Faq::find($id)->delete();
        return redirect(route('list.faqs'));
    }
}
