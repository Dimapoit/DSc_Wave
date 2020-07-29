@section('menu')

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand py-2 px-4" href="{{route('main')}}">DSC Wave</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{$page == 'main' ? 'active' : ''}}"><a href="{{route('main')}}" class="nav-link">@lang('site-lang.header-main')</a></li>
                <li class="nav-item {{$page == 'services' ? 'active' : ''}}"><a href="{{route('services')}}" class="nav-link">@lang('site-lang.header-services')</a></li>
{{--                <li class="nav-item"><a href="coaches.html" class="nav-link">Тренери</a></li>--}}
{{--                <li class="nav-item"><a href="schedule.html" class="nav-link">Schedule</a></li>--}}
{{--                <li class="nav-item" {{$page == 'about' ? 'active' : ''}}><a href="{{route('about')}}" class="nav-link">@lang('site-lang.header-about')</a></li>--}}
                <li class="nav-item {{$page == 'blog' ? 'active' : ''}}"><a href="{{route('blog')}}" class="nav-link">@lang('site-lang.header-blog')</a></li>
                <li class="nav-item {{$page == 'gallery' ? 'active' : ''}}"><a href="{{route('gallery')}}" class="nav-link">@lang('site-lang.header-gallery')</a></li>
                <li class="nav-item {{$page == 'contact' ? 'active' : ''}}"><a href="{{route('contact')}}" class="nav-link">@lang('site-lang.header-contact')</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('site-lang.header-lang')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="setlocale/ua">Украiнська</a>
                        <a class="dropdown-item" href="setlocale/ru">Русский</a>
                    </div>

            </ul>
        </div>
    </div>
</nav>

@show
<!-- END nav -->
