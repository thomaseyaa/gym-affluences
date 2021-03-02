    @extends ('layout')

    @section ('content')
        <main class="black-bg">
            <div class="slider-area position-relative">
                <div class="slider-active">
                    <div class="single-slider slider-height d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    @if (session('reserved'))
                                        <div class="alert alert-primary">
                                            <ul>
                                                <li>{{ session('reserved') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    @if (session('deleted'))
                                        <div class="alert alert-primary">
                                            <ul>
                                                <li>{{ session('deleted') }}</li>
                                            </ul>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-10">
                                    <div class="hero__caption">
                                        <span data-animation="fadeInLeft" data-delay="0.1s">Bienvenu sur</span>
                                        <h1 data-animation="fadeInLeft" data-delay="0.4s">Gymyo</h1>
                                        <a href="/reservation" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">Réserver un créneau</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="about-area2 fix pb-padding pt-50 pb-80">
                <div class="support-wrapper align-items-center">
                    <div class="right-content2">
                        <div class="right-img wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                            <img src="/img/gallery/about.png" alt="">
                        </div>
                    </div>
                    <div class="left-content2">
                        <div class="section-tittle2 mb-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                            <div class="front-text">
                                <h2 class="">À propos</h2>
                                <p>Suite à l'épidemie de la Covid-19 nous restreignons l'accès à notre salle de sport. Réservez un crénaux pour pourvoir vous entrainer.</p>
                                <a href="/reservation" class="border-btn">Réserver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div id="map"></div>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=<?=env('API_KEY')?>&callback=initMap&libraries=&v=weekly"
                    async
                ></script>
            </section>
        </main>
        <div id="back-top">
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
    @endsection
