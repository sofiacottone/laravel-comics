@section('footer-content')
<div class="container-fluid ms-bg-container">
    <div class="container ms-logo-container">
        <div class="d-flex gap-5 py-5">

            <!-- first column  -->
            <div>
                <div>
                    <h4 class="text-uppercase text-white">dc comics</h4>
                    <ul class="ps-0">
                        @foreach($navLinks as $navLink)
                        <li class="fw-normal text-capitalize">
                            <a href="#{{ $navLink }}">{{ $navLink }}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div>
                    <h4 class="text-uppercase text-white">shop</h4>
                    <ul class="ps-0">
                        <li class="fw-normal">
                            <a href="">Shop DC</a>
                        </li>
                        <li class="fw-normal">
                            <a href="">Shop DC Collectibles</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- second column  -->
            <div>
                <h4 class="text-uppercase text-white">dc</h4>
                <ul class="ps-0">
                    <li class="fw-normal">
                        <a href="">Terms of Use</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Privacy Policy (New)</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Ad Choices</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Advertising</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Jobs</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Subscriptions</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Talent Workshops</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">CPSC Certificates</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Ratings</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Shop Help</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">Contact Us</a>
                    </li>
                </ul>
            </div>
            <!-- third column  -->
            <div>
                <h4 class="text-uppercase text-white">sites</h4>
                <ul class="ps-0">
                    <li class="fw-normal">
                        <a href="">DC</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">MAD Magazine</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">DC Kids</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">DC Universe</a>
                    </li>
                    <li class="fw-normal">
                        <a href="">DC Power Visa</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

        {{-- contacts  --}}
        <section id="contacts">
            <div class="container-fluid">
                <div class="container">
                    <div class="d-flex justify-content-between py-5">
                        <!-- sign up button  -->
                        <button class="text-uppercase p-2">
                            <a class="link-light text-decoration-none" href="">sign-up now!</a>
                        </button>
    
                        <!-- socials  -->
                        <div class="d-flex align-items-center gap-4">
                            <h5 class="text-uppercase mb-0">follow us</h5>
    
                            <div>
                                <img class="pe-3" src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="fb logo">
                                <img class="pe-3" src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter logo">
                                <img class="pe-3" src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube logo">
                                <img class="pe-3" src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest logo">
                                <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope logo">
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
</div>
@endsection