@extends("layouts.layout1")

@php
    // Variables for the layout, especially the tophead component
    $title = "Nos Services - SETELEC SAS";
    $subtitle = "Services";
@endphp


@section("content")

    {{-- Include the specific header for inner pages --}}


    <!-- tmp-service area start -->
    <div class="tmp-services-area services-style--1 background-image-services bg_image tmp-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-head">
                        <div class="section-sub-title center-title">
                            {{-- <img src="{{ asset("assets/images/services/section-custom-menubar.png") }}" alt="Business Consulting services"> --}}
                            <span>NOS DOMAINES D’EXPERTISE</span>
                        </div>
                        <h2 class="title split-collab">Nos Départements Spécialisés</h2>
                        <p class="disc">SETELEC SAS est organisée en quatre grands départements pour mieux servir ses clients.</p>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Département Infrastructures -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one h-100">
                        <div class="services-inner with-shadow card-bg-color h-100">
                            <div class="thumbnail">
                                {{-- Replace with relevant icon/image --}}
                                <img src="{{ asset("assets/images/services/services-icon-1.png") }}" alt="Département Infrastructures">
                            </div>
                            <div class="services-content">
                                <h5 class="title">Département Infrastructures</h5>
                                <p class="desctiption">
                                    Étude et réalisation de projets d’énergie (production, transport, distribution), construction de centrales solaires, groupes électrogènes et hybrides. Solutions énergétiques pour opérateurs télécoms.
                                </p>
                                <ul>
                                    <li><i class="fa-light fa-check"></i> Lignes et postes HTB/HTA/BTA</li>
                                    <li><i class="fa-light fa-check"></i> Électrification rurale et urbaine</li>
                                    <li><i class="fa-light fa-check"></i> Centrales électriques (Groupes, Solaire, Hybrides)</li>
                                    <li><i class="fa-light fa-check"></i> Alimentation de secours (Groupes, Onduleurs)</li>
                                    <li><i class="fa-light fa-check"></i> Énergie sites Télécoms & Data centers</li>
                                    <li><i class="fa-light fa-check"></i> Contrats de maintenance énergie</li>
                                    <li><i class="fa-light fa-check"></i> Cuves carburant</li>
                                    <li><i class="fa-light fa-check"></i> Ingénierie, études & conseils</li>
                                </ul>
                                {{-- <a href="#" class="icon angle-roted"><i class="fa-solid fa-arrow-right"></i></a> --}}
                            </div>
                            <div class="number">
                                <img src="{{ asset("assets/images/services/icon-01.png") }}" alt="Icone 1">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Département Industrie -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one h-100">
                        <div class="services-inner with-shadow card-bg-color h-100">
                            <div class="thumbnail">
                                {{-- Replace with relevant icon/image --}}
                                <img src="{{ asset("assets/images/services/services-icon-2.png") }}" alt="Département Industrie">
                            </div>
                            <div class="services-content">
                                <h5 class="title">Département Industrie</h5>
                                <p class="desctiption">
                                    Gestion des projets d’électricité, d’automatisme industriel, d’instrumentation, de machines électriques et de constructions industrielles pour tous secteurs.
                                </p>
                                <ul>
                                    <li><i class="fa-light fa-check"></i> Tableaux électriques (Coffrets, armoires)</li>
                                    <li><i class="fa-light fa-check"></i> Automatisation process (Automates Siemens, Schneider, etc.)</li>
                                    <li><i class="fa-light fa-check"></i> Télégestion de sites industriels</li>
                                    <li><i class="fa-light fa-check"></i> Variateurs de vitesse (Siemens, Schneider, ABB)</li>
                                    <li><i class="fa-light fa-check"></i> Machines électriques (Installation, maintenance)</li>
                                    <li><i class="fa-light fa-check"></i> Mise en réseau d’Automates (Profibus, Profinet)</li>
                                    <li><i class="fa-light fa-check"></i> Migration WinCC, Tia Portal</li>
                                    <li><i class="fa-light fa-check"></i> Instrumentation (Capteurs niveau, température, pression)</li>
                                    <li><i class="fa-light fa-check"></i> Groupes Froids (Daikin, Carrier, Haier)</li>
                                    <li><i class="fa-light fa-check"></i> Construction industrielle (Conception 2D/3D, montage, charpente, tuyauterie)</li>
                                </ul>
                                {{-- <a href="#" class="icon angle-roted"><i class="fa-solid fa-arrow-right"></i></a> --}}
                            </div>
                            <div class="number">
                                <img src="{{ asset("assets/images/services/icon-02.png") }}" alt="Icone 2">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Département Building Technologies -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one h-100">
                        <div class="services-inner with-shadow card-bg-color h-100">
                            <div class="thumbnail">
                                {{-- Replace with relevant icon/image --}}
                                <img src="{{ asset("assets/images/services/services-icon-3.png") }}" alt="Département Building Technologies">
                            </div>
                            <div class="services-content">
                                <h5 class="title">Département Building Technologies</h5>
                                <p class="desctiption">
                                    Solutions énergétiques et techniques pour le bâtiment (résidentiel, tertiaire, industriel).
                                </p>
                                <ul>
                                    <li><i class="fa-light fa-check"></i> Installation électrique courant fort (230/400V)</li>
                                    <li><i class="fa-light fa-check"></i> Installation électrique courant faible (Vidéosurveillance, contrôle d’accès, internet, sécurité incendie...)</li>
                                    <li><i class="fa-light fa-check"></i> Installation Froid & Climatisation (Split, centralisé, eau glacée)</li>
                                    <li><i class="fa-light fa-check"></i> Installation plomberie sanitaire</li>
                                    <li><i class="fa-light fa-check"></i> Domotique (Gestion Technique du Bâtiment)</li>
                                    <li><i class="fa-light fa-check"></i> Maintenance multi-techniques</li>
                                </ul>
                                {{-- <a href="#" class="icon angle-roted"><i class="fa-solid fa-arrow-right"></i></a> --}}
                            </div>
                            <div class="number">
                                <img src="{{ asset("assets/images/services/icon-03.png") }}" alt="Icone 3">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Département Distribution de Matériels Industriels -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="single-services service-style-one h-100">
                        <div class="services-inner with-shadow card-bg-color h-100">
                            <div class="thumbnail">
                                {{-- Replace with relevant icon/image --}}
                                <img src="{{ asset("assets/images/services/service-icon-4.png") }}" alt="Département Distribution de Matériels Industriels">
                            </div>
                            <div class="services-content">
                                <h5 class="title">Département Distribution de Matériels Industriels</h5>
                                <p class="desctiption">
                                    Importation et vente de matériels industriels et équipements spécifiques.
                                </p>
                                <ul>
                                    <li><i class="fa-light fa-check"></i> Disjoncteurs Masterpact Schneider</li>
                                    <li><i class="fa-light fa-check"></i> Compresseurs Atlas Copco, COMPAIR</li>
                                    <li><i class="fa-light fa-check"></i> Onduleurs APC, RIELLO UPS</li>
                                    <li><i class="fa-light fa-check"></i> Régulateurs de tension IREM, ORTEA</li>
                                    <li><i class="fa-light fa-check"></i> Lampadaires solaires</li>
                                    <li><i class="fa-light fa-check"></i> Baies d’énergie, Batteries Backup</li>
                                    <li><i class="fa-light fa-check"></i> Variateurs de vitesse (Schneider, ABB, Siemens)</li>
                                    <li><i class="fa-light fa-check"></i> Machines électriques (Moteurs, transformateurs)</li>
                                    <li><i class="fa-light fa-check"></i> Motopompes, Pompes immergées</li>
                                    <li><i class="fa-light fa-check"></i> Groupes Électrogènes (Cummins, Caterpillar, SDMO)</li>
                                    <li><i class="fa-light fa-check"></i> Pièces de rechange Groupes Électrogènes</li>
                                    <li><i class="fa-light fa-check"></i> Cuves carburant, Flexibles gasoil</li>
                                    <li><i class="fa-light fa-check"></i> Coffrets, armoires précablés, inverseurs</li>
                                    <li><i class="fa-light fa-check"></i> Automates (Schneider, Siemens, Allen Bradley)</li>
                                    <li><i class="fa-light fa-check"></i> Conteneurs Bureaux</li>
                                </ul>
                                {{-- <a href="#" class="icon angle-roted"><i class="fa-solid fa-arrow-right"></i></a> --}}
                            </div>
                            <div class="number">
                                {{-- Replace with relevant icon/image --}}
                                <img src="{{ asset("assets/images/services/service-icon-5.png") }}" alt="Icone 4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Remove bottom section or adapt if needed --}}
            {{-- <div class="row">
                <div class="col-lg-12">
                    <div class="services-bottom">...</div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- tmp-service area end -->

    {{-- Remove other sections from original template (work process, why choose us, faq) as they are likely redundant or not needed --}}
    {{-- <div class="tpm-services-process-area">...</div> --}}
    {{-- <div class="work-area">...</div> --}}
    {{-- <div class="faq-area">...</div> --}}

    <x-footer/>

@endsection

