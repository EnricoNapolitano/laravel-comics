<footer>
        <div class="upper-footer">
            <div class="container flex jb ac">
                <div class="flex">
                    <div class="col">
                        <h3>DC Comics</h3>
                        <ul>
                            @foreach ($comics_nav as $item)
                            <li><a href="#">{{$item['text']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col">
                        <h3>DC Comics</h3>
                        <ul>
                            @foreach ($comics_nav as $item)
                            <li><a href="#">{{$item['text']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col">
                        <h3>DC Comics</h3>
                        <ul>
                            @foreach ($comics_nav as $item)
                            <li><a href="#">{{$item['text']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col">
                        <h3>DC Comics</h3>
                        <ul>
                            @foreach ($comics_nav as $item)
                            <li><a href="#">{{$item['text']}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- DC big logo -->
                <figure>
                    <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="logo DC">
                </figure>
            </div>
        </div>
        <div class="bottom-footer"></div>
    </footer>