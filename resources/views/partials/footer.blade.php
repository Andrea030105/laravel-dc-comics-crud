<footer>
    <section class="bg-footer">
        <div class="container">
            <div class="row">
                <div class="col-2 pt-4">
                    @foreach(array_slice($footer_menu, 0, 2) as $items)
                    <div class="link-card">
                        <h4>
                            {{ $items['title'] }}
                        </h4>
                        <ul>
                            @foreach($items['links'] as $link)
                            <li>
                                <a href="#">
                                    {{ $link }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
                <div class="col-10 pt-4 d-flex">
                    @foreach(array_slice($footer_menu, 2, 2) as $items)
                    <div class="link-card me-5">
                        <h4>
                            {{ $items['title'] }}
                        </h4>
                        <ul>
                            @foreach($items['links'] as $link)
                            <li>
                                <a href="#">
                                    {{ $link }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-black p-4">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <button class="btn-sign-up">
                        sign-up now!
                    </button>
                </div>
                <div class="col-6">
                    <div class="container-follow">
                        <h4 class="fw-bold">
                            Follow us
                        </h4>
                        <div class="icon-follow">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook">
                            <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="twitter">
                            <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="youtube">
                            <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="pinterest">
                            <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="periscope">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>