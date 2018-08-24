<?php

namespace App\Http\Controllers;

use App\Artist;
use App\Catering;
use App\Faq;
use App\Lezing;
use App\News;
use App\Popupmarkt;
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
        $artists = Artist::orderBy('time_from')->get();
        $faqs = Faq::all();
        $news = News::orderBy('id', 'desc')->get();
        $sponsors = Sponsor::orderBy('name')->get();
        $catering = Catering::orderBy('name')->get();
        $lezingen = Lezing::orderBy('time_from')->get();
        $popups = Popupmarkt::orderBy('name')->get();
        return view('welcome', compact('artists', 'faqs', 'news', 'sponsors', 'catering', 'lezingen', 'popups'));
    }
}
