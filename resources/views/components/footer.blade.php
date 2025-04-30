    <!-- Start Footer Area  -->
    <footer class="footer-area footer-style-one-wrapper bg-color-footer bg_images tmp-section-gap">
        <div class="container">
            {{-- Newsletter Section - Kept for layout, but non-functional --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-area subscribe-style-1">
                        <div class="subscribe-inner">
                            <div class="title">S'inscrire à la Newsletter</div>
                            <form action="#" class="newsletter-form-1 mt--40">
                                <input type="email" placeholder="Votre Email" required>
                                <button type="submit" class="tmp-btn btn-primary">
                                    S'inscrire <i class="fa-sharp fa-regular fa-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main footer-style-one">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-footer-wrapper border-right mr--20">
                            <div class="logo">
                                {{-- Updated logo link to home --}}
                                <a href="{{ route("home") }}">
                                    {{-- Assuming logo-03.png is the correct logo based on sidebar --}}
                                    <img src="{{ asset('assets/images/logo/logo-03.png') }}" alt="SETELEC Logo">
                                </a>
                            </div>
                            {{-- Updated description for SETELEC --}}
                            <p class="description">
                                Votre partenaire Énergétique et Industriel en Côte d’Ivoire et Afrique de l’Ouest. Expertise en électricité, instrumentation, automatisme et mécanique.
                            </p>
                            {{-- Updated working hours --}}
                            <div class="day-time">
                                <div class="icon"><i class="fa-solid fa-alarm-clock"></i></div>
                                <div class="content">
                                    <div class="day">Lundi - Vendredi:</div>
                                    <div class="time">8:00 – 17:00</div>
                                </div>
                            </div>
                            {{-- Updated social icons (placeholders) --}}
                            <ul class="social-icons solid-social-icons rounded-social-icons">
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                {{-- <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <div class="single-footer-wrapper pl-50 pl_md--0 pl_sm--0">
                            <h5 class="ft-title">Liens Rapides</h5>
                            {{-- Updated Quick Links to existing routes --}}
                            <ul class="ft-link">
                                <li>
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">À Propos</a>
                                </li>
                                <li>
                                    <a href="{{ route('services') }}">Nos Services</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Contactez-nous</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- Removed Recent Post section --}}
                    <div class="col-lg-3 col-md-6">
                        {{-- Placeholder or other relevant info can go here --}}
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-wrapper">
                            <h5 class="ft-title">Infos Officielles:</h5>
                            {{-- Updated Official Info for SETELEC --}}
                            <ul class="ft-link">
                                <li class="ft-location">Abidjan Cocody Angré 8e Tranche, Côte d'Ivoire</li>
                                <li>
                                    <div class="single-contact">
                                        <div class="icon">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </div>
                                        <div class="content">
                                            <span>E-mail:</span>
                                            <a href="mailto:info@setelec.ci">info@setelec.ci</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-contact">
                                        <div class="icon">
                                            <i class="fa-light fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <span>Téléphone:</span>
                                            <a href="tel:+2252722392898">(+225) 27 22 39 28 98</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright-area-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-wrapper">
                        {{-- Updated Copyright --}}
                        <p>© Copyright {{ date('Y') }}. Tous droits réservés par <a href="{{ route('home') }}">SETELEC SAS</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Area  -->

