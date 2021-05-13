@extends('layouts.app')

@section('main')

    <div class="container-main">

        <div class="currSeries">
            CURRENT SERIES
        </div>

        <ol id="consoleCard">
            @foreach ($articles as  $article)
                <li class="card">
                    <img class="card-img" src="{{$article['thumb']}}" alt="">
                    <div class="card-body">
                        <p>{{$article['series']}}</p>
                    </div>

                </li>
            @endforeach
        </ol>


    </div>


@endsection
