<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsEditController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    function edit(Request $request, $id = null){
        if($id == null){
            $news = new News();
        } else {
            $news = News::findOrFail($id);
        }
        if($request->isMethod("GET")){
            return view('admin.edit.news', compact('news'));
        }

        $request->validate([
            'title' => 'required|max:170',
            'backgroundColor' => 'required|min:7|max:50',
            'content' => 'required'
        ]);

        $news->fill($request->all());
        $news->save();
        return redirect(route('list.news'));
    }

    function list(Request $request){
        $news = News::all();
        return view('admin.list.news', compact('news'));
    }
}
