@extends('layouts.app')

@section('comics')
    <main id="home">
        <div class="container-main">

            <section id="cardSection">
                <div class="currSeries">
                    CURRENT SERIES
                </div>

                <ol id="consoleCard">
                    @foreach ($articles as $i => $article)
                        <li class="card">
                            <a href="{{route('details',['id' => $i])}}">
                                <img class="card-img" src="{{$article['thumb']}}" alt="">
                                <div class="card-body">
                                    <p>{{$article['series']}}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ol>

                <a class="load-more btn" type="button" name="button">LOAD MORE</a>
            </section>
        </div>

        <section id="infoDC">

            <div class="digi-comics">
                <img src="img\buy-comics-digital-comics.png" alt="img-digital-comics">
                <span>DIGITAL COMICS</span>
            </div>
            <div class="dc-merchandise">
                <img src="img\buy-comics-merchandise.png" alt="img-merchandise">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="sub">
                <img src="img\buy-comics-subscriptions.png" alt="img-subscriptions">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="shop-loc">
                <img src="img\buy-comics-shop-locator.png" alt="img-shop-locator">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="dc-pw-visa">
                <img src="img\buy-dc-power-visa.svg" alt="img-DC-Power-visa">
                <span>DIGITAL COMICS</span>
            </div>
        </section>
    </main>
@endsection
