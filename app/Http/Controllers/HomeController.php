<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Faq;
use App\News;
use App\Sponsor;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = Artist::all();
        $faqs = Faq::all();
        $news = News::all();
        $sponsors = Sponsor::all();
        return view('welcome', compact('artists', 'faqs', 'news', 'sponsors'));
    }
}
