<header>
    <div class="banner-blu"></div>
    <div class="container p-2">
        <div class="row">
            <div class="col-4">
                <img class="logo-img" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </div>
            <div class="col-8 d-flex align-items-center justify-content-center">
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            @foreach($header_menu as $item)
                            <li class="nav-item fw-bold text-uppercase">
                                <a class="nav-link active" aria-current="page" href="#">{{$item['text']}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <div class="jumbotron">
                </div>
            </div>
        </div>
    </div>
    </div>
</header>