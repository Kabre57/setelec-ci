@extends("layouts.layout2")

@php
    // Define variables used in the layout, specifically for the head component
    $title = "SETELEC SAS - Accueil - Solutions Électriques, Industrielles & Télécoms";
    // $bodyClass = ""; // Add specific body class if needed
@endphp

@section("content")

    <!-- tpm-header-area start -->
    <header class="tmp-header-area-start header-one">
        <!-- header-top start -->
        <div class="header-top-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-top-inner">
                            <div class="left-information-area">
                                {{-- <p class="left-top">Using user feedback to creat a million dollar</p> --}}
                                <div class="location-area">
                                    <i class="fa-light fa-location-dot"></i>
                                    <a href="#">Abidjan Cocody Angré 8e Tranche</a>
                                </div>
                                <div class="working-time">
                                    <i class="fa-light fa-clock"></i>
                                    {{-- Assuming standard working hours, replace if specified --}}
                                    <p>Heures d'ouverture: 08:00 – 17:00</p>
                                </div>
                            </div>
                            <div class="right-header-top">
                                <div class="social-area-transparent">
                                    <span>Suivez-nous</span>
                                    {{-- Add actual social links if available --}}
                                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                    {{-- <a href="#"><i class="fa-brands fa-pinterest-p"></i></a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->
        <!-- header mid area start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-header-one-wrapper">
                        <div class="header-mida-area">
                            <div class="logo-area-start">
                                <a class="logo" href="{{ route("home") }}">
                                    {{-- Using logo-blue as primary, adjust if needed --}}
                                    <img src="{{ asset("assets/images/logo/logo-blue.png") }}" alt="Logo SETELEC SAS">
                                </a>
                            </div>
                            <div class="mid-header-center">
                                <p>Besoin d'aide? <a href="tel:+2252722392898"> (+225) 27 22 39 28 98</a></p>
                                {{-- Search bar can be kept or removed --}}
                                {{-- <div class="input-area">
                                    <input type="text" placeholder="Rechercher...">
                                    <i class="fa-light fa-magnifying-glass"></i>
                                </div> --}}
                            </div>
                            <a href="{{ route("contact") }}" class="tmp-btn btn-primary">Nous Contacter</a>
                        </div>
                        <!-- tmp nav area -->
                        <div class="tmp-nav-area-one header--sticky">
                            <div class="logo-md-sm-device">
                                <a href="{{ route("home") }}" class="logo">
                                    {{-- Using white logo for sticky/mobile header --}}
                                    <img src="{{ asset("assets/images/logo/white-logo.png") }}" alt="Logo SETELEC SAS">
                                </a>
                            </div>

                            <div class="header-nav main-nav-one">
                                {{-- Make sure menuList component reflects only needed links --}}
                                <x-menuList/>
                            </div>
                            <div class="actions-area">
                                <div class="tmp-side-collups-area" id="side-collups">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                                        <rect width="20" height="2" fill="#1F1F25"></rect>
                                    </svg>
                                </div>
                                {{-- Language picker can be removed if site is only French --}}
                                {{-- <div class="language-picker">
                                    <div class="js">
                                        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
                                            <form action="" class="language-picker__form">
                                                <label for="language-picker-select">Select your language</label>
                                                <select name="language-picker-select" id="language-picker-select">
                                                    <option lang="fr" value="francais" selected>Français</option>
                                                </select>
                                            </form>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- tmp nav area -->
                    </div>
                </div>
            </div>
        </div>
        <!-- header mid area end -->

    </header>
    <!-- tpm-header-area end -->

    <x-sidebar/>

    <!-- tmp banner area start -->
    <div class="tmp-banner-swiper-one-area">
        <div class="swiper mySwiper-banner-one">
            <div class="swiper-wrapper">
                <!-- Slide 1: General Intro -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-1 bg_image banner-one-height-control tmp-section-gap">
                        {{-- Shapes can be kept or removed --}}
                        <div class="shape-image-banner-one">
                            <img src="{{ asset("assets/images/banner/shape/01.png") }}" alt="shape" class="one">
                            <img src="{{ asset("assets/images/banner/shape/02.png") }}" alt="shape" class="two">
                            <img src="{{ asset("assets/images/banner/shape/03.png") }}" alt="shape" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Électricité - Automatisme - Énergies - Télécoms</span>
                                            <h1 class="title">Solutions Énergétiques & Industrielles</h1>
                                            <p class="disc">
                                                SETELEC SAS : Votre partenaire EPC en Côte d'Ivoire et Afrique de l'Ouest pour l'ingénierie, les travaux neufs, la rénovation et la maintenance.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route("services") }}" class="tmp-btn btn-primary">Nos Services</a>
                                                {{-- Video button can be removed or linked to a relevant video --}}
                                                {{-- <div class="vedio-icone" data-tmp-cursor="lg" data-tmp-cursor-text="Play Video">
                                                    <a class="video-play-button play-video" href="#">
                                                        <span></span>
                                                        <p class="text">Voir Vidéo</p>
                                                    </a>
                                                    <div class="video-overlay"><a class="video-overlay-close">×</a></div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2: Expertise -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-2 bg_image banner-one-height-control tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="{{ asset("assets/images/banner/shape/01.png") }}" alt="shape" class="one">
                            <img src="{{ asset("assets/images/banner/shape/02.png") }}" alt="shape" class="two">
                            <img src="{{ asset("assets/images/banner/shape/03.png") }}" alt="shape" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Ingénieurs Expérimentés & Qualifiés</span>
                                            <h1 class="title">Expertise Pluridisciplinaire</h1>
                                            <p class="disc">
                                                Haute & basse tension, automatisme, machines électriques, télécoms, froid, plomberie, construction industrielle et distribution de matériel.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route("about") }}" class="tmp-btn btn-primary">À Propos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 3: Quality -->
                <div class="swiper-slide">
                    <div class="tmp-banner-area bg_image-3 bg_image banner-one-height-control tmp-section-gap">
                        <div class="shape-image-banner-one">
                            <img src="{{ asset("assets/images/banner/shape/01.png") }}" alt="shape" class="one">
                            <img src="{{ asset("assets/images/banner/shape/02.png") }}" alt="shape" class="two">
                            <img src="{{ asset("assets/images/banner/shape/03.png") }}" alt="shape" class="three">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="banner-one-main-wrapper">
                                        <div class="inner">
                                            <span class="sub-title">Engagement Qualité & Satisfaction Client</span>
                                            <h1 class="title">Qualité, Prix Juste, Délais Respectés</h1>
                                            <p class="disc">
                                                Démarche qualité ISO 9001, 14001, 45001. Nous visons l'excellence et la satisfaction de nos clients dans chaque projet.
                                            </p>
                                            <div class="button-area-banner-one">
                                                <a href="{{ route("contact") }}" class="tmp-btn btn-primary">Demander un Devis</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Suivant"></div>
            <div class="swiper-button-prev" data-tmp-cursor="md transparent fw-bold" data-tmp-cursor-text="Précédent"></div>
        </div>
    </div>
    <!-- tmp banner area end -->

    <!-- Tpm About Area Start (Short Version for Home) -->
    <div class="about-area tmp-section-gap about-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            {{-- Replace with relevant SETELEC image if available --}}
                            <img src="{{ asset("assets/images/about/01.png") }}" alt="Image SETELEC">
                            <div class="image-two">
                                <img src="{{ asset("assets/images/about/03.png") }}" alt="Image SETELEC 2">
                            </div>
                            <div class="image-three animated">
                                <img class="" src="{{ asset("assets/images/about/02.png") }}" alt="Image SETELEC 3">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-wrapper-one">
                        <div class="tmp-section-title">
                            <span class="subtitle">À Propos de SETELEC SAS</span>
                            <h2 class="title">Votre Partenaire <br> Énergétique et Industriel</h2>
                            <p class="disc">
                                La société d'Énergies, de Télécoms et de Constructions Industrielles (SETELEC SAS) est un EPC intervenant en Côte d'Ivoire et dans la sous-région. Créée par des ingénieurs ivoiriens expérimentés, nous sommes spécialisés dans l'électricité HT/BT, l'automatisme, les machines électriques, les télécoms, le froid, la plomberie, la construction industrielle et la distribution de matériel.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-about">
                                    <i class="fa-light fa-arrow-right"></i>
                                    <p>Qualité & Respect des Délais</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-about">
                                    <i class="fa-light fa-arrow-right"></i>
                                    <p>Ingénieurs Expérimentés</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-about">
                                    <i class="fa-light fa-arrow-right"></i>
                                    <p>Solutions sur Mesure</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-service-about">
                                    <i class="fa-light fa-arrow-right"></i>
                                    <p>Satisfaction Client Garantie</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route("about") }}" class="tmp-btn btn-primary">En Savoir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tpm About Area End -->

    <!-- tmp-service area start -->
    <div class="tmp-service-area tmp-section-gap bg-light-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tmp-section-title text-center">
                        <span class="subtitle">Nos Domaines d'Expertise</span>
                        <h2 class="title">Nos Services Clés</h2>
                        <p class="disc">Organisés en départements spécialisés pour mieux vous servir.</p>
                    </div>
                </div>
            </div>
            <div class="row g-5 mt--15">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-card-one">
                        <div class="thumbnail">
                            {{-- Replace with relevant image --}}
                            <img src="{{ asset("assets/images/services/icon-01.png") }}" alt="Infrastructures">
                        </div>
                        <div class="service-body">
                            <a href="{{ route("services") }}">
                                <h5 class="title">Infrastructures</h5>
                            </a>
                            <p class="disc">Lignes & postes HTB/HTA/BTA, électrification, centrales (solaire, groupes), énergie télécoms & data centers.</p>
                            <a class="rts-read-more-circle" href="{{ route("services") }}"><i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-card-one">
                        <div class="thumbnail">
                             {{-- Replace with relevant image --}}
                            <img src="{{ asset("assets/images/services/icon-02.png") }}" alt="Industrie">
                        </div>
                        <div class="service-body">
                            <a href="{{ route("services") }}">
                                <h5 class="title">Industrie</h5>
                            </a>
                            <p class="disc">Tableaux électriques, automatisme process, télégestion, variateurs, machines électriques, instrumentation, groupes froids, construction industrielle.</p>
                            <a class="rts-read-more-circle" href="{{ route("services") }}"><i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-card-one">
                        <div class="thumbnail">
                             {{-- Replace with relevant image --}}
                            <img src="{{ asset("assets/images/services/icon-03.png") }}" alt="Building Technologies">
                        </div>
                        <div class="service-body">
                            <a href="{{ route("services") }}">
                                <h5 class="title">Building Technologies</h5>
                            </a>
                            <p class="disc">Installation électrique (courant fort/faible), froid & climatisation, plomberie sanitaire, domotique, maintenance multi-techniques.</p>
                            <a class="rts-read-more-circle" href="{{ route("services") }}"><i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="service-card-one">
                        <div class="thumbnail">
                             {{-- Replace with relevant image --}}
                            <img src="{{ asset("assets/images/services/service-icon-4.png") }}" alt="Distribution Matériel">
                        </div>
                        <div class="service-body">
                            <a href="{{ route("services") }}">
                                <h5 class="title">Distribution Matériel</h5>
                            </a>
                            <p class="disc">Vente de disjoncteurs, compresseurs, onduleurs, régulateurs, lampadaires solaires, batteries, variateurs, moteurs, pompes, groupes électrogènes, pièces détachées, etc.</p>
                            <a class="rts-read-more-circle" href="{{ route("services") }}"><i class="fa-light fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp-service area end -->

    {{-- Other sections from the original index template can be added/removed/modified as needed --}}
    {{-- Example: Adding a Call to Action section --}}
    <div class="tmp-call-to-action-area tmp-section-gap bg-light-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-inner-wrapper">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-7">
                                <div class="cta-left-area">
                                    <h3 class="title">Besoin d'un accompagnement ou de nos services ?</h3>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="cta-right-area">
                                    <a class="tmp-btn btn-primary" href="{{ route("contact") }}">Contactez SETELEC SAS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>

@endsection

