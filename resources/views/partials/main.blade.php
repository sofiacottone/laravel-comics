@section('content')
<section class="container-fluid d-flex align-items-end">
    <div class="container position-relative">
        <div class="position-absolute text-uppercase text-white fw-bold h4 py-2 px-3">
            current series
        </div>
    </div>
</section>
<section class="bg-dark pt-5">
    <div class="container">
        <!-- cards  -->
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
                
            <div class="ms-single-card col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="ms-img-wrapper">
                    <img class="img-fluid" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </div>
                <div class="text-uppercase text-white pt-3 pe-3">{{ $comic['title'] }}</div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center mt-4 pb-3">
            <div class="ms-btn text-uppercase text-white fw-bold py-2 px-5">
                load more
            </div>
        </div>
    </div>
</section>
<section id="pages">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center text-white h-100">
            <ul class="d-flex gap-4 mb-0 ps-0 text-uppercase">
                <li class="d-flex align-items-center">
                    <div class="ms-img-container">
                        <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital comis">
                    </div>
                    <div class="ms-2">digital comics</div>
                </li>
                <li class="d-flex align-items-center">
                    <div class="ms-img-container">
                        <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="dc merchandise">
                    </div>
                    <div class="ms-2">dc merchandise</div>
                </li>
                <li class="d-flex align-items-center">
                    <div class="ms-img-container">
                        <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="subscriptions">
                    </div>
                    <div class="ms-2">subscription</div>
                </li>
                <li class="d-flex align-items-center">
                    <div class="ms-img-container">
                        <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="comic shop locator">
                    </div>
                    <div class="ms-2">comic shop locator</div>
                </li>
                <li class="d-flex align-items-center">
                    <div class="ms-img-container">
                        <img class="img-fluid" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="dc power visa">
                    </div>
                    <div class="ms-2">dc power visa</div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection