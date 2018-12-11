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
@stop
