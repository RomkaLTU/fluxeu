@extends('layouts.app')

@section('content')
    <div class="section section-about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>APIE MUS</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Suspendisse vitae tempus lectus. Fusce maximus nisl in orci molestie consectetur et vel ante.
                        Nullam eget ligula sit amet magna viverra aliquet et in sapien. Sed nec leo et tortor facilisis viverra.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="illiustration">
                        <img src="@asset('images/illustration.png')" alt="Apie mus">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-offers" id="offers">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>DARBO PASIŪLYMAI</h3>
                </div>
            </div>
            <div class="row offers">
                <?php for( $i=0; $i<8; $i++ ): ?>
                    <div class="offer">
                        <div class="row">
                            <div class="col-lg-3">
                                <figure>
                                    <img src="https://via.placeholder.com/260x220" alt="">
                                </figure>
                            </div>
                            <div class="col-lg-9">
                                <div class="offer-content">
                                    <h4>Sandėlinikas logistikos įmonėje</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tempus
                                        lectus. Fusce maximus nisl in orci molestie consectetur et vel ante. Nullam eget
                                        ligula sit amet </p>
                                    <div class="row">
                                        <div class="col">
                                            <div class="offer-data">
                                                <strong>UŽMOKESTIS</strong> 12 eur/h<br>
                                                <small>(šeštadieniais <strong>150%</strong>, sekmadieniais <strong>200%</strong>)</small>
                                                <strong>DARBO VALANDOS</strong> 40h/sav
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a href="javascript:" class="btn btn-prenumeruoti">PRETENDUOTI</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="section section-contacts">
        <div class="container">
            <h2>IEŠKOTE KITOKIO POBŪDŽIO DARBO?</h2>
            <h5>Atsiųskite mums savo CV elektroniniu paštu info@flux.eu ir mes su jumis susisieksime.</h5>

            <div class="row">
                <div class="col-lg-6">
                    <h3>KONTAKTAI</h3>
                    <strong>EL. PAŠTAS</strong> <a href="mailto:info@fluxeu.lt">info@fluxeu.lt</a><br>
                    <strong>TEL. NR.</strong> <a href="tel:+37064022822">+370 640 22822</a>

                    <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-lg-6">
                    {!! do_shortcode('[wpforms id="13" title="false" description="false"]') !!}
                </div>
            </div>
        </div>
    </div>
@stop
