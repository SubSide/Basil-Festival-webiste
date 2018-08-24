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
        $artists = Artist::all();
        $faqs = Faq::all();
        $news = News::all();
        $sponsors = Sponsor::all();
        $catering = Catering::all();
        $lezingen = Lezing::all();
        $popups = Popupmarkt::all();
        return view('welcome', compact('artists', 'faqs', 'news', 'sponsors', 'catering', 'lezingen', 'popups'));
    }
}
