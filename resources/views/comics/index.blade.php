@extends('layout.app')

@section('content')

<section class="bg-black p-5">
    <div class="container">
        <div class="row p-2">
            @foreach($comics as $comic)
            <div class="card-comic m-2" style="width: 12rem;">
                <a href="{{ route( 'comics.show', $comic->id ) }}">
                    <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="">
                    <div class="text-center text-white p-3">
                        <h5 class="fs-5">{{ $comic['title'] }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary text-uppercase fw-bold">
                        Loaded More
                    </button>
                    <a href="{{ route( 'comics.create' ) }}">
                        <button class="ms-3 btn btn-primary text-uppercase fw-bold">
                            Added New Comic
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=" bg-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="p-3 text-uppercase text-white fw-bold">
                    <img class="img-banner-blu" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt="Digital Comics">
                    <span class="text-banner-blu">
                        Digital Comics
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="p-3 text-uppercase text-white fw-bold">
                    <img class="img-banner-blu" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt="dc merchandise">
                    <span class="text-banner-blu">
                        dc merchandise
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="p-3 text-uppercase text-white fw-bold">
                    <img class="img-banner-blu" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}" alt="subscriptions">
                    <span class="text-banner-blu">
                        subscriptions
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="p-3 text-uppercase text-white fw-bold">
                    <img class="img-banner-blu" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt="comics shop locator">
                    <span class="text-banner-blu">
                        comics shop locator
                    </span>
                </div>
            </div>
            <div class="col">
                <div class="p-3 text-uppercase text-white fw-bold">
                    <img class="img-banner-blu" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt="dc power visa">
                    <span class="text-banner-blu">
                        dc power visa
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection