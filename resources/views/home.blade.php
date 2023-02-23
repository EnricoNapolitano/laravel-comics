<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <title>{{ env('APP_NAME') }}</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- ***HEADER*** -->
    <header>
        <!-- top header -->
        <div class="bg-primary text-white">
            <div class="container flex je ac">
                <h5 class="pw-3 ph-min">text</h5>
                <h5>text</h5>
            </div>
        </div>

        <!-- bottom header -->
        <div class="container flex jb ac mh-2">
            <figure>
                <img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo DC">
            </figure>
            <ul class="flex">
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
                <li class="pw-3">TEXT</li>
            </ul>
            <div>
                SEARCH
            </div>
        </div>
    </header>

    <!-- ***JUMBOTRON*** -->
    <section id="main-jumbo">
        <figure>
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron">
        </figure>
    </section>

    <!-- ***MAIN*** -->
    <main class="bg-secondary">
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
                <button class="bg-primary text-white pw-3 ph-1"><b>LOAD MORE</b></button>
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
    </main>
</body>
</html>