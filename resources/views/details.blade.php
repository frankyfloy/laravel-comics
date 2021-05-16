@extends('layouts.app')

@section('details')

    <main id="details">

        <div class="divider">

        </div>


        <div class="thumbArticle">
            <img class="card-img" src="{{$article['thumb']}}" alt="">
        </div>

        <section id="consoleDetails">

            <h2>{{$article['series']}}</h2>

            <div class="cont-price">

                <div class="info-price">
                    <span class="price">{{$article['price']}}</span>
                    <span class="Availability">AVAILABLE</span>
                </div>

                <div class="check-Availability">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Check Availability
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>

            <p class="description">{{$article['description']}}</p>

            <div class="cont-pubblicità">
                <p>ADVERTISEMENT</p>
                <img src="..\img\adv.jpg" alt="">
            </div>

        </section>

        <section id="infoDetails">

            <div class="col-6">
                <h4>Talent</h4>
                <div class="br-bottom">
                    <span class="headCell">Art by:</span>
                    <span class="contentCell">
                        @foreach ($article['artists'] as $artist)
                            @if ($loop->last)
                                <a class="artist-name" href="#">{{$artist}}</a>
                            @else
                                <a class="writer-name" href="#">{{$artist}}</a>
                                ,
                            @endif
                        @endforeach
                    </span>
                </div>
                <div class="br-bottom">
                    <span class="headCell">Written by:</span>
                    <span class="contentCell">
                        @foreach ($article['writers'] as $writer)
                            @if ($loop->last)
                                <a class="writer-name" href="#">{{$writer}}</a>
                            @else
                                <a class="writer-name" href="#">{{$writer}}</a>
                                ,
                            @endif
                        @endforeach
                    </span>
                </div>
            </div>

            <div class="col-6">
                <h4>Specs</h4>
                <div class="br-bottom">
                    <span class="headCell">Series:</span>
                    <a class="contentCell" href="#">{{strtoupper($article['series'])}}</a>
                </div>
                <div class="br-bottom">
                    <span class="headCell">U.S. Price:</span>
                    <span class="contentCell">{{$article['price']}}</span>
                </div>
                <div class="br-bottom">
                    <span class="headCell">ON Sale Date:</span>
                    <span class="contentCell">{{$article['sale_date']}}</span>
                </div>
        </section>

        <section id="infoDC">

            <div class="digi-comics">
                <img href="#" src={{asset('img\buy-comics-digital-comics.png')}} alt="img-digital-comics">
                <span><a href="#">DIGITAL COMICS</a></span>
            </div>

            <div class="sub">
                <img href="#" src={{asset('img\buy-comics-subscriptions.png')}} alt="img-subscriptions">
                <span><a href="#">SHOP DC</a></span>
            </div>

            <div class="shop-loc">
                <img href="#" src={{asset('img\buy-comics-shop-locator.png')}} alt="img-shop-locator">
                <span><a href="#">COMIC SHOP LOCATOR</a></span>
            </div>

            <div class="dc-merchandise">
                <img href="#" src={{asset('img\buy-comics-merchandise.png')}} alt="img-merchandise">
                <span><a href="#">SUBSCRIPTIONS</a></span>
            </div>

        </section>

    </main>

@endsection
