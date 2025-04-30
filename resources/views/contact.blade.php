@extends("layouts.layout1")

@php
    // Variables for the layout, especially the tophead component
    $title = "Contactez-Nous - SETELEC SAS";
    $subtitle = "Contact";
@endphp


@section("content")

    {{-- Include the specific header for inner pages --}}


    <!-- tmp contact area -->
    <div class="contact-area tmp-section-gap">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">Nos Coordonnées</span>
                            <p class="description">
                                N'hésitez pas à nous contacter pour toute demande d'information, de devis ou d'assistance technique.
                            </p>
                        </div>

                        <ul class="ft-link ft-link-style-three">
                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <span>Appelez-nous</span>
                                        <a class="contact-here" href="tel:+2252722392898">(+225) 27 22 39 28 98</a> <br>
                                        <a class="contact-here" href="tel:+2250712919191">(+225) 07 12 91 91 91</a> <br>
                                        <a class="contact-here" href="tel:+2250505870005">(+225) 05 05 87 00 05</a> <br>
                                        <a class="contact-here" href="tel:+2250141418424">(+225) 01 41 41 84 24</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </div>
                                    <div class="content">
                                        <span>E-mail</span>
                                        <a class="contact-here" href="mailto:info@setelec-ci.com">info@setelec-ci.com</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="single-contact background-transparent">
                                    <div class="icon">
                                        <i class="fa-regular fa-map-location-dot"></i>
                                    </div>
                                    <div class="content">
                                        <span>Siège Social</span>
                                        <a class="contact-here" href="#">Abidjan Cocody Angré 8e Tranche, Lot : 610, Ilot : 41</a>
                                        <span>Adresse Postale</span>
                                        <a class="contact-here" href="#">04 BP 357 Abidjan 04</a>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        {{-- Update or remove social links if needed --}}
                        <div class="tmp-tag-list tag-list-one">
                            <a class="tag-list" href="#">Facebook</a>
                            <a class="tag-list" href="#">LinkedIn</a>
                            {{-- <a class="tag-list" href="#">Twitter</a>
                            <a class="tag-list" href="#">Skype</a>
                            <a class="tag-list" href="#">Pinterest</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-inner">
                        <div class="section-head section-head-one-side text-align-left">
                            <span class="title">CONTACTEZ-NOUS</span>
                            <p class="description">
                                Remplissez le formulaire ci-dessous et notre équipe vous répondra dans les plus brefs délais.
                            </p>
                        </div>
                        <div class="contact-form style-two">
                            <div id="form-messages"></div>
                            {{-- The form action needs backend implementation to work --}}
                            <form id="contact-form" action="#" method="post">
                                <div class="contact-form-wrapper row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="name" placeholder="Nom" id="contact-name" type="text" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="contact-phone" placeholder="Téléphone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="input-field" type="text" id="subject" placeholder="Sujet" name="subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="input-field" placeholder="Votre message" name="message" id="contact-message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-submit-group">
                                            <button name="submit" class="tmp-btn btn-gradiant-two" type="submit" id="submit">
                                                Envoyer le Message
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tmp contact area end -->

    <!-- Google Map Area -->
    <div class="tmp-map-area tmp-sectiongapBottom">
        <div class="map-area-flotimg-container">
            {{-- Use the generated iframe code, adjusted for responsiveness --}}
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="gmap_iframe" width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%&amp;height=450&amp;hl=fr&amp;q=Abidjan Cocody Angré 8e Tranche&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                    {{-- <a href="https://embed-googlemap.com">embed google maps in website</a> --}}
                </div>
                <style>
                    .mapouter { position: relative; text-align: right; width: 100%; height: 450px; }
                    .gmap_canvas { overflow: hidden; background: none !important; width: 100%; height: 450px; }
                    .gmap_iframe { width: 100% !important; height: 450px !important; }
                </style>
            </div>
        </div>
    </div>
    <!-- Google Map Area End -->

    <x-footer/>

@endsection

