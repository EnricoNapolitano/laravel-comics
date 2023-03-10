@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="flex jc as wrap mh-5">
            @foreach($comics as $comic)
            <li>
                <figure>
                    <a href="#"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}"></a>
                </figure>
                <h5>{{ $comic['series'] }}</h5>
            </li>
            @endforeach
        </ul>
        <div class="label">
            <h2 class="bg-primary text-white pw-4 ph-2">CURRENT SERIES</h2>
        </div>
        <div class="flex jc ac">
            <button class="bg-primary text-white pw-3 ph-1 mb-3"><b>LOAD MORE</b></button>
        </div>
    </div>

    <!-- TO DO: central navbar -->
    <!-- <div class="central-nav">
        <ul class="container flex jb ac">
            @foreach($central_nav as $item)
            <li class="flex jb ac">
                <figure>
                    <a href="{{ $item['url'] }}">
                        <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="icona">
                    </a>
                </figure>
                <div>{{ $item['text'] }}</div>
            </li>
            @endforeach
        </ul>
    </div> -->
@endsection
