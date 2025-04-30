@extends("layouts.layout1")

@php
    // Variables for the layout, especially the tophead component
    $title = "À Propos - SETELEC SAS";
    $subtitle = "À Propos";
@endphp


@section("content")

    {{-- Include the specific header for inner pages --}}


    <!-- Tpm About Area Start  -->
    <div class="about-area tmp-section-gap about-style-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-thumbnails">
                        <div class="thumbnail">
                            {{-- Replace with relevant SETELEC image if available --}}
                            <img src="{{ asset("assets/images/about/01.png") }}" alt="Image présentation SETELEC">
                            <div class="image-two">
                                <img src="{{ asset("assets/images/about/03.png") }}" alt="Image présentation SETELEC 2">
                            </div>
                            <div class="image-three animated">
                                <img class="" src="{{ asset("assets/images/about/02.png") }}" alt="Image présentation SETELEC 3">
                            </div>
                            {{-- Remove elements not relevant to SETELEC --}}
                            {{-- <div class="square"></div>
                            <div class="flower"><img src="{{ asset("assets/images/about/flower.png") }}" alt=""></div>
                            <div class="product-share">...</div> --}}
                        </div>
                        {{-- Remove video icon if no video available --}}
                        {{-- <div class="vedio-icone">...</div> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-inner">
                        <div class="section-head text-align-left section-head-one-side">
                            <div class="section-sub-title">
                                {{-- <img src="{{ asset("assets/images/services/section-custom-menubar.png") }}" alt="Corporate_service"> --}}
                                <span class="subtitle">PRÉSENTATION DE L’ENTREPRISE</span>
                            </div>
                            <h2 class="title split-collab">SETELEC SAS : <br> Votre Partenaire EPC</h2>
                        </div>

                        <p class="description">
                            La société d’Énergies, de Télécoms et de Constructions Industrielles par acronyme SETELEC SAS est un EPC (Engineering Procurement and Construction) qui intervient en Côte d’Ivoire et dans la sous-région Ouest Africaine. Elle est immatriculée au régime de commerce et du crédit mobilier sous le numéro CI-ABJ-03-2023-B16-00155, Compte Contribuable : 2304766 G. Son siège social est situé à Abidjan Angré 8e Tranche, Lot : 610, Ilot : 41.
                        </p>
                        <p class="description">
                            SETELEC SAS a été créée par un groupe d’Ingénieurs Ivoiriens pluridisciplinaires ayant une vingtaine d’années d’expérience tous experts dans leurs domaines. Elle est spécialisée dans les domaines de l’électricité haute et basse tensions, l’automatisme industriel, les Machines électriques, les Télécommunications, le Froid & Climatisation, la Plomberie, la Construction industrielle et la distribution de matériels industriels spécifiques.
                        </p>
                         <p class="description">
                            SETELEC SAS apporte aux sociétés du secteur de l’énergie, du Pétrole & Gaz, des mines, de l’agro-industrie, de téléphonie mobile et du BTP (Bâtiment et Travaux Publics) des solutions en ingénierie, travaux neufs, rénovation et maintenance.
                        </p>
                        {{-- Remove progress bars and generic icon section --}}
                        {{-- <div class="single-progress-area">...</div>
                        <div class="thumbnail-with-title">...</div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Tpm About Area End  -->

    <!-- Why Choose Us Section -->
    <div class="tpm-services-process-area tmp-section-gap bg-light-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            {{-- <img src="{{ asset("assets/images/services/section-custom-menubar.png") }}" alt="Corporate_service"> --}}
                            <span class="subtitle">POURQUOI NOUS CHOISIR ?</span>
                        </div>
                        <h2 class="title split-collab">Nos Valeurs et Stratégies</h2>
                    </div>
                </div>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                {{-- Replace with relevant image --}}
                                <a href="#"><img src="{{ asset("assets/images/services/services-round-1.png") }}" alt="Équipe Expérimentée"></a>
                                <div class="number-bg-round">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Équipe Expérimentée</h5>
                                <p class="description">
                                    Ingénieurs et Techniciens avec en moyenne 10 ans d’expérience, ayant fait leurs preuves dans des multinationales aux standards élevés.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                {{-- Replace with relevant image --}}
                                <a href="#"><img src="{{ asset("assets/images/services/services-round-2.png") }}" alt="Qualité, Prix, Délais"></a>
                                <div class="number-bg-round">
                                     <i class="fa-solid fa-thumbs-up"></i>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Qualité, Prix Juste, Délais</h5>
                                <p class="description">
                                    Nous nous engageons sur la qualité des travaux, des prix compétitifs et le respect strict des délais convenus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                {{-- Replace with relevant image --}}
                                <a href="#"><img src="{{ asset("assets/images/services/services-round-3.png") }}" alt="Démarche Qualité ISO"></a>
                                <div class="number-bg-round">
                                    <i class="fa-solid fa-certificate"></i>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Démarche Qualité ISO</h5>
                                <p class="description">
                                    Inscrits dans une démarche qualité ISO 9001, 14001 et 45001, garantissant des standards internationaux de qualité, sécurité et environnement.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="single-services">
                        <div class="services-inner">
                            <div class="thumbnail thumbnail-rounded border-top-left hover-animation">
                                {{-- Replace with relevant image --}}
                                <a href="#"><img src="{{ asset("assets/images/services/services-round-6.png") }}" alt="Satisfaction Client"></a>
                                <div class="number-bg-round">
                                    <i class="fa-solid fa-handshake"></i>
                                </div>
                            </div>
                            <div class="services-content services-content-style-1 text-center">
                                <h5 class="title">Satisfaction Client</h5>
                                <p class="description">
                                    Chez nous, le client est ROI. Nous visons toujours sa satisfaction totale à travers nos prestations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Section End -->

    {{-- Remove Team section or adapt later if needed --}}
    {{-- <div class="team-area tmp-section-gap bg-white"> ... </div> --}}

    {{-- Remove Testimonial section --}}
    {{-- <div class="testimonial-with-brand bg-1"> ... </div> --}}

    <x-footer/>

@endsection

