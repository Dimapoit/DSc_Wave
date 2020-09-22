@extends('layouts.master')

@section('menu')
    @parent
@endsection

@section('content')

    <!-- @include('partials._smallheader') -->
    <section class="hero-wrap" style="background-image: url('{{asset('images/contact.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">

                <h1 class="mb-3 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">@lang('site-lang.header-main')</a></span> <span>@lang('site-lang.header-contact')</span></p>

            </div>
        </div>
    </div>
</section>


    <!-- @include('partials._feedback') -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2716.589965205882!2d37.526849052026684!3d47.08750394593515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e6e48f697964fb%3A0x2cba9f9448b7ff5b!2z0IbQu9C70ZbRh9GW0LLQtdGG0Yw!5e0!3m2!1suk!2sua!4v1598041033079!5m2!1suk!2sua" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
{{--    <div id="map" class="map"></div>--}}
@endsection
