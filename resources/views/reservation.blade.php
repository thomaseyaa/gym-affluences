    @extends ('layout')

    @section ('content')
        <main>
            <div class="slider-area2">
                <div class="slider-height2 d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="hero-cap hero-cap2 pt-70">
                                    <h2>Réservation</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="contact-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="contact-title">Réserver un crénau</h2>
                        </div>
                        <div class="col-lg-8">
                            <div class="col-12">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12">
                                @if (session('error'))
                                    <div class="alert alert-danger">
                                        <ul>
                                            <li>{{ session('error') }}</li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="email" type="email" value="<?= old('email'); ?>" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="date" type="date" value="<?= old('date'); ?>" id="example-date-input">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="time" type="time" value="<?= old('time'); ?>" id="example-time-input">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" name="checkbox" type="checkbox">
                                                Accepter les conditions d'utilisation
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-home"></i></span>
                                <div class="media-body">
                                    <h3>Paris, France</h3>
                                    <p>50 Rue de Malte, 75011 - Paris</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                <div class="media-body">
                                    <h3>+33 750047499</h3>
                                    <p>Lundi à vendredi 9h à 18h</p>
                                </div>
                            </div>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="ti-email"></i></span>
                                <div class="media-body">
                                    <h3>contact@gymbook.com</h3>
                                    <p>Envoi nous un email quand tu veux!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <div id="back-top" >
            <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
        </div>
    @endsection
