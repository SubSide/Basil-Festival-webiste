<!DOCTYPE html>
<html>
<head>
    <title>Catena Open Air: 2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Signika:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('./js/script.js') }}"></script>
</head>
<body>
<div id="menu">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            {{--<a href="#" class="navbar-text pull-right navbar-flag"><img src="./imgs/EN.png" /></a>--}}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="./imgs/logo.png" /></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right nav-menu">
                    <li><a href="#news">Nieuws</a></li>
                    <li><a href="#about">Over ons</a></li>
                    <li><a href="#program">Programma</a></li>
                    <li><a href="#faq">Faq</a></li>
                    <li><a href="#sponsors">Sponsoren</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="color-container blue-container">
    <div class="container">
        <div id="home" class="row">
            <div class="col-xs-12 carousel-container">
                <div id="slider" data-interval="false" class="carousel slide">
                    <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                        <li data-target="#slider" data-slide-to="3"></li>
                        <li data-target="#slider" data-slide-to="4"></li>
                        <li data-target="#slider" data-slide-to="5"></li>
                        <li data-target="#slider" data-slide-to="6"></li>
                        <li data-target="#slider" data-slide-to="7"></li>
                        <li data-target="#slider" data-slide-to="8"></li>
                        <li data-target="#slider" data-slide-to="9"></li>
                        <li data-target="#slider" data-slide-to="10"></li>
                        <li data-target="#slider" data-slide-to="11"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active" style="background-image: url('{{ asset('./imgs/carousel/Vief%20blij.jpg') }}')" alt="Second slide">
                            <div class="carousel-title">
                                <div class="carousel-title-text">
                                    <h1>BASIL</h1>
                                    <span>Catena Open Air 2018</span>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/catenianen%20met%20bier%20en%20blijheid.jpg') }}')" alt="First slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/Chill%20heuvel%20kunst.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/een%20grote%20band.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/foto%20vanaf%20huiskamer%20tent.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/Houten%20constructie.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/Hugging%20tree.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('imgs/carousel/Huiskamer.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/Jamgroepje%20huiskamer.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/nacht%20publiek.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/Schmink%20paula%20en%20charlotte.jpg') }}')" alt="Second slide"></div>
                        <div class="item" style="background-image: url('{{ asset('./imgs/carousel/Wegwijzer%20basil.jpg') }}')" alt="Second slide"></div>
                    </div>

                    <a class="left carousel-control" href="#slider" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#slider" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <main id="news" class="row">
            <div class="col-xs-12 text-center extra-info">
                Op zaterdag 1 september 2018 organiseert de studentenvereniging V.S.L. Catena een GRATIS festival in Park Matilo te Leiden dat duurzaamheid zal promoten!
            </div>
            <div class="col-xs-12 text-center extra-info">
                Wil je op de hoogte worden gehouden van ons festival? Kijk dan regelmatig op onze site voor het laatste nieuws.
            </div>
            <div class="col-xs-12 info-blocks">
                <div class="row">
                    @forelse($news as $newsItem)
                        <div class="col-xs-12 col-md-6">
                            <div class="info-block" style="background-color: {{ $newsItem->backgroundColor }}">
                                <h3>{{ $newsItem->title }}</h3>
                                <p>
                                    {{ $newsItem->content }}
                                </p>
                            </div>
                        </div>
                    @empty
                        <div class="col-xs-12 text-center"><p>To be announced</p></div>
                    @endforelse
                </div>
            </div>
        </main>
    </div>
</div>
<div id="about" class="color-container purple-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Over ons</h2>
            </div>
            <div class="col-xs-12">
                <h3>Over</h3>
                <p>
                    BASIL: Catena Open Air is een gratis eendaags duurzaam festival dat zaterdag 1 september in Park Matilo te Leiden plaats zal vinden. Het festival wordt georganiseerd door leden van studentenvereniging V.S.L. Catena te Leiden. Twee jaar geleden was de eerste versie van BASIL: Catena Open Air. Het festival biedt een podium voor duurzame initiatieven en promoot een groene leefwijze. Daarbij is het festival zelf duurzaam opgezet met als doel zo min mogelijk druk op het milieu en de omgeving te zetten. BASIL: Catena Open Air opent met lezingen en verschillende workshops die in het teken staan van duurzaamheid. Daarnaast zullen er eetkraampjes en een pop-upmarkt zijn. ’s Avonds zullen er verschillende bands en DJ’s optreden.
                </p>
            </div>
            <div class="col-xs-12">
                <h3>Doel</h3>
                <p>
                    BASIL: Catena Open Air heeft als doel mensen te informeren over duurzaamheid en enthousiasme hiervoor op te wekken. Wij willen dit op een positieve en ontspannen manier doen. Duurzaamheid moet niet gezelligheid in de weg zitten, maar kan hier juist bij helpen. We willen verschillende organisaties een podium bieden en hopen de Leidse bevolking bewust te maken van groene alternatieven. Dit gaan we doen door op duurzame wijze een feestje neer te zetten voor heel Leiden en omgeving.
                </p>
            </div>
            <div class="col-xs-12">
                <h3>Wie zijn wij</h3>
                <p>
                    BASIL: Catena Open Air wordt georganiseerd door de Airco, de Catena Open Air commissie. De Airco is een commissie binnen V.S.L. Catena. De leden van deze commissie zijn allen zeer gemotiveerd voor een groenere wereld en hopen hun visie met dit festival over te kunnen dragen.
                    <table class="functions">
                        <tr><th>Voorzitter</th><td>Romilda van Buuringen</td></tr>
                        <tr><th>Secretaris</th><td>Bram Ribbers</td></tr>
                        <tr><th>Penningmeester</th><td>Melloney Schenk</td></tr>
                        <tr><th>Acquisitie</th><td>Bj&ouml;rn de Graaf</td></tr>
                        <tr><th>Bands en acts</th><td>Thijs Hofland</td></tr>
                        <tr><th>Catering</th><td>Daphne van Ginneken</td></tr>
                        <tr><th>Locatie</th><td>Jonathan Koh</td></tr>
                        <tr><th>Logistiek</th><td>Thomas van den Bulk</td></tr>
                        <tr><th>Techniek</th><td>Tijmen Mulder</td></tr>
                        <tr><th>Promo beeld</th><td>Lalique Molenaar</td></tr>
                        <tr><th>Promo tekst</th><td>Paula Hart</td></tr>
                    </table>
                </p>
                <p>
                    <img class="team-image" src="{{ asset("imgs/team.jpg") }}" />
                    <div class="row"><i class="col-xs-12 col-md-6">Van links naar rechts: Thijs Hofland, Bj&ouml;rn de Graaf, Romilda van Buuringen, Bram Ribbers, Melloney Schenk, Thomas van den Bulk, Daphne van Ginneken, Paula Hart, Lalique Molenaar, Jonathan Koh, Vivienne Ju, Enrico Ensing, Tijmen Mulder</i></div>
                </p>
            </div>
            <div class="col-xs-12">
                <h3>V.S.L. Catena</h3>
                <p>
                    V.S.L. Catena is een van de vijf grote studentengezelligheidsverenigingen in Leiden. Catena heeft meer dan 1000 leden en een eigen pand dat gevestigd is in de Kolfmakersteeg. Catena onderscheidt zich van de andere gezelligheidsverenigingen met een vrij en open karakter; bij Catena moet niets, maar mag alles. Bij Catena krijg je geen ontgroening en heb je geen verplichtingen. Lid zijn is vrijblijvend, je enige verplichting is het betalen van je lidmaatschap. Het karakter van Catena wordt ook wel eens omschreven als alternatief, er wordt bijvoorbeeld meer rock en metalmuziek gedraaid dan bij andere verenigingen. Catena draait volledig op haar eigen leden, zij draaien bar, koken, organiseren de feesten, maken de versiering en zijn dj en lj.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="program" class="color-container lightblue-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Programma</h2>
            </div>
            @forelse($artists as $artist)
                <div class="col-xs-12 artist">
                    <div class="row short">
                        <div class="col-xs-9">
                            {{ $artist->name }}
                            <span class="genre"> {{ $artist->genre }}</span>
                        </div>
                        <div class="col-xs-3">{{ $artist->time_from }}- {{ $artist->time_to }}</div>
                    </div>
                    <div class="row long">
                        <div class="col-xs-12">
                            @if($artist->picture_url != null)
                                <img class="pull-right artist-photo col-xs-12 col-sm-4" src="{{ $artist->picture_url }}" />
                            @endif
                            {!! nl2br($artist->description) !!}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-xs-12 text-center"><p>To be announced</p></div>
            @endforelse
        </div>
    </div>
</div>
<div id="catering" class="color-container lightblue-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Lezingen</h2>
            </div>
            @forelse($lezingen as $lezing)
                <div class="col-xs-12 artist">
                    <div class="row short">
                        <div class="col-xs-9">
                            {{ $lezing->name }}
                        </div>
                        <div class="col-xs-3">{{ $lezing->time_from }}- {{ $lezing->time_to }}</div>
                    </div>
                    <div class="row long">
                        <div class="col-xs-12">
                            @if($lezing->picture_url != null)
                                <img class="pull-right artist-photo col-xs-12 col-sm-4" src="{{ $lezing->picture_url }}" />
                            @endif
                            {!! nl2br($lezing->description) !!}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-xs-12 text-center"><p>To be announced</p></div>
            @endforelse
        </div>
    </div>
</div>
<div id="catering" class="color-container lightblue-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Catering</h2>
            </div>
            @forelse($catering as $cater)
                <div class="col-xs-12 sponsor">
                    @if($cater->picture_url != null)
                        <img class="pull-left sponsor-photo col-xs-12 col-sm-4" src="{{ $cater->picture_url }}" />
                    @endif
                    <h3>{{ $cater->name }}</h3>
                    {!! nl2br($cater->description) !!}
                </div>
            @empty
                <div class="col-xs-12 text-center"><p>To be announced</p></div>
            @endforelse
        </div>
    </div>
</div>
<div id="popup" class="color-container lightblue-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Popupmarkt</h2>
            </div>
            @forelse($popups as $popup)
                <div class="col-xs-12 sponsor">
                    @if($popup->picture_url != null)
                        <img class="pull-left sponsor-photo col-xs-12 col-sm-4" src="{{ $popup->picture_url }}" />
                    @endif
                    <h3>{{ $popup->name }}</h3>
                    {!! nl2br($popup->description) !!}
                </div>
            @empty
                <div class="col-xs-12 text-center"><p>To be announced</p></div>
            @endforelse
        </div>
    </div>
</div>
<div id="faq" class="color-container yellow-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="text-center">FAQ</h2>
            </div>
            @forelse($faqs as $faq)
                <div class="col-xs-6">
                    <div class="col-xs-12 faq-question">
                        <div class="row question">
                            <div class="col-xs-9">
                                {{ $faq->question }}
                            </div>
                        </div>
                        <div class="row answer">
                            <div class="col-xs-12">
                                {{ $faq->answer }}
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-xs-12 text-center"><p>To be announced</p></div>
            @endforelse
        </div>
    </div>
</div>
<div id="sponsors" class="color-container green-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Sponsoren</h2>
            </div>
            @forelse($sponsors as $sponsor)
                <div class="col-xs-12 sponsor">
                    @if($sponsor->imageUrl != null)
                        <img class="pull-left sponsor-photo col-xs-12 col-sm-4" src="{{ $sponsor->imageUrl }}" />
                    @endif
                    <h3>{{ $sponsor->name }}</h3>
                     {!! nl2br($sponsor->description) !!}
                </div>
            @empty
                <div class="col-xs-12 text-center"><p>To be announced</p></div>
            @endforelse
        </div>
    </div>
</div>
<div id="contact" class="color-container red-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2 class="text-center">Contact</h2>
                <div class="contact">
                    <p>Contact: airco@vslcatena.nl</p>
                    <p><a href="https://www.facebook.com/Basil-Catena-Open-Air-1096208103753770/">Facebook</a></p>
                    <p>
                        V.S.L. Catena<br />
                        Kolfmakersteeg 8<br />
                        2311 VG Leiden
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>