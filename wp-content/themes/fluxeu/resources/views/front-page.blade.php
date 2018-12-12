@extends('layouts.app')

@section('content')
    <div class="section section-about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    {!! get_field('apie_mus')['text'] !!}
                </div>
                <div class="col-lg-6">
                    <div class="illiustration">
                        <img src="{{ get_field('apie_mus')['illustration'] }}" alt="Apie mus">
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
                @if( $offers->have_posts() )
                    @while ( $offers->have_posts() )
                        @php $offers->the_post(); @endphp
                        <div class="offer">
                            <div class="row">
                                <div class="col-lg-3">
                                    <figure>
                                        <img src="{{ get_the_post_thumbnail_url( get_the_ID(), 'medium' ) }}" alt="{{ get_the_title() }}">
                                    </figure>
                                </div>
                                <div class="col-lg-9">
                                    <div class="offer-content">
                                        <h4>{{ get_the_title() }}</h4>
                                        {!! get_the_content() !!}
                                        <div class="row">
                                            <div class="col">
                                                <div class="offer-data">
                                                    <strong>UŽMOKESTIS</strong> {{ get_field('uzmokestis') }}<br>
                                                    <small>{!! get_field('papildoma_uzmokescio_info') !!}</small>
                                                    <strong>DARBO VALANDOS</strong> {{ get_field('darbo_valandos') }}
                                                </div>
                                            </div>
                                            <div class="col">
                                                <a href="{{ get_field('nuoroda') }}" class="btn btn-prenumeruoti">PRETENDUOTI</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endwhile
                    @php wp_reset_query(); @endphp
                @endif
            </div>
        </div>
    </div>

    <div class="section section-contacts mb-0" id="contacts">
        <div class="container">
            <h2>{{ get_field('kontaktai')['title'] }}</h2>
            <h5>{{ get_field('kontaktai')['subtitle'] }}</h5>

            <div class="row">
                <div class="col-lg-6">
                    <h3>KONTAKTAI</h3>
                    <strong>EL. PAŠTAS</strong> <a href="mailto:{{ get_field('kontaktai')['email'] }}">{{ get_field('kontaktai')['email'] }}</a><br>
                    <strong>TEL. NR.</strong> <a href="tel:{{ get_field('kontaktai')['telefonas'] }}">{{ get_field('kontaktai')['telefonas'] }}</a>

                    <p class="mt-3">{{ get_field('kontaktai')['text'] }}</p>
                </div>
                <div class="col-lg-6">
                    {!! do_shortcode('[wpforms id="13" title="false" description="false"]') !!}
                </div>
            </div>
        </div>
    </div>
@stop
