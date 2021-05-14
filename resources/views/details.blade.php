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


            <table class="col-6">
                <thead>
                    <tr>
                        <th>Talent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="headCell">Art by:</td>

                        <td class="artists-name">
                            @foreach ($article['artists'] as $artist)
                                @if ($loop->last)
                                    <a class="artist-name" href="#">{{$artist}}</a>
                                @else
                                    <a class="writer-name" href="#">{{$artist}}</a>
                                    ,
                                @endif
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td class="headCell">Written by:</td>
                        <td class="artists-name">
                            @foreach ($article['writers'] as $writer)
                                <a class="writer-name" href="#">{{$writer}}</a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="col-6">
                <thead>
                    <tr>
                        <th>Specs</th>
                        <th class="table-offset"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="headCell">Series:</td>
                        <td class="series-type-details">
                            <a href="#">{{strtoupper($article['series'])}}</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="headCell">U.S. Price:</td>
                        <td class="price-details">
                            {{$article['price']}}
                        </td>
                    </tr>
                    <tr>
                        <td class="headCell">ON Sale Date:</td>
                        <td class="sale_date-details">
                            {{$article['sale_date']}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

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
