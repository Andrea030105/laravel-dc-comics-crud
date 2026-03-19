@extends('layout.app')

@section('content')
<div class="banner">
    <div class="img-banner">
        <img src="{{ $detail_comic['thumb']}}" alt="{{ $detail_comic['title'] }}">
    </div>
    <div class="btn-banner">
        <a href="{{ route('comics.edit', [ 'comic'=> $detail_comic->id ]) }}">
            <button class="ms-3 btn btn-success text-uppercase fw-bold">
                edit comic
            </button>
        </a>
        <form action="{{ route('comics.destroy', [ 'comic'=> $detail_comic->id ]) }}" method="post">
            @csrf

            @method('DELETE')
            <button class="ms-3 btn btn-danger text-uppercase fw-bold">
                delite comic
            </button>
        </form>
    </div>
</div>
<section class="p-3">
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div>
                    <h2>
                        <strong>
                            {{ $detail_comic['title'] }}
                        </strong>
                    </h2>
                </div>
                <div class="bg-success d-flex align-items-center justify-content-between p-3 text-white text-uppercase">
                    <h4 class="m-0">
                        <strong>
                            {{ $detail_comic['type'] }}
                        </strong>
                    </h4>
                    <h4 class="m-0">
                        <strong>
                            {{ $detail_comic['price'] }}
                        </strong>
                    </h4>
                </div>
                <div>
                    <p>
                        {{ $detail_comic['description'] }}
                    </p>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <img class="w-50" src="{{ $detail_comic['thumb']}}" alt="{{ $detail_comic['title'] }}">
            </div>
        </div>
    </div>
</section>
@endsection