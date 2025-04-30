 <!-- tpm-header-area end -->

 <div id="side-hide">
        <div class="top-area">
            {{-- Changed route from 'index' to 'home' --}}
            <a href="{{ route('home') }}" class="logo-area">
                <img src="{{ asset('assets/images/logo/logo-03.png') }}" alt="logo">
            </a>
            <div class="close-icon-area">
                <div id="close-slide__main">
                    <i class="fa-solid fa-x"></i>
                </div>
            </div>
        </div>
        <div class="body">

            <div class="image-area-feature">
                <img src="{{ asset('assets/images/sidebar/01.jpg') }}" alt="sidebar">
            </div>
            {{-- Updated placeholder text --}}
            <h5 class="title mt--30">SETELEC SAS</h5>
            <p class="disc">
                Votre partenaire Énergétique et Industriel en Côte d'Ivoire et Afrique de l'Ouest.
            </p>
            <div class="short-contact-area-side-collups">
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-solid fa-phone"></i>
                    <div class="information">
                        <span>Appelez-nous</span>
                        {{-- Use actual phone number --}}
                        <a href="tel:+2252722392898" class="number">(+225) 27 22 39 28 98</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-light fa-envelope"></i>
                    <div class="information">
                        <span>Envoyez-nous un email</span>
                        {{-- Use actual email --}}
                        <a href="mailto:info@setelec.ci" class="number">info@setelec.ci</a>
                    </div>
                </div>
                <!-- single contact information end -->
                <!-- single contact information -->
                <div class="single-contact-information-side">
                    <i class="fa-sharp fa-light fa-location-dot"></i>
                    <div class="information">
                        <span>Notre Adresse</span>
                        {{-- Use actual address --}}
                        <a href="#" class="number">Abidjan Cocody Angré 8e Tranche</a>
                    </div>
                </div>
                <!-- single contact information end -->
            </div>
            <!-- social area start -->
            <ul class="social-icons solid-social-icons rounded-social-icons">
                 {{-- Add actual social links if available --}}
                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                {{-- <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li> --}}
            </ul>
            <!-- social area end -->
        </div>
        <!-- mobile menu area start -->
        <div class="mobile-menu-main">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    {{-- Simplified mobile menu --}}
                    <li>
                        <a href="{{ route('home') }}" class="main">HOME</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" class="main">ABOUT</a>
                    </li>
                    <li>
                        <a href="{{ route('services') }}" class="main">SERVICES</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="main">CONTACT</a>
                    </li>
                </ul>
            </nav>

        </div>
        <!-- mobile menu area end -->
    </div>
    <!-- tpm-header-area end -->

