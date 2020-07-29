<section class="hero-wrap" style="background-image: url('{{asset('images/bg_2.jpg')}}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                @switch($page)
                    @case('about')
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">@lang('site-lang.header-main')</a></span> <span>@lang('site-lang.header-about')</span></p>
                    @break

                    @case('services')
                    <h1 class="mb-3 bread">Our Services</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">@lang('site-lang.header-main')</a></span> <span>>@lang('site-lang.header-services')</span></p>
                    @break

                    @case('blog')
                    <h1 class="mb-3 bread">Our Journal</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">@lang('site-lang.header-main')</a></span> <span>@lang('site-lang.header-blog')</span></p>
                    @break

                    @case('gallery')
                    <h1 class="mb-3 bread">Our Gallery</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">@lang('site-lang.header-main')</a></span> <span>@lang('site-lang.header-gallery')</span></p>
                    @break

                    @case('contact')
                    <h1 class="mb-3 bread">Contact Us</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{route('main')}}">@lang('site-lang.header-main')</a></span> <span>@lang('site-lang.header-contact')</span></p>
                    @break

                    @default
                    <span>Something went wrong, please try again</span>
                @endswitch

            </div>
        </div>
    </div>
</section>
