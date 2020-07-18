<nav class="colorlib-nav" role="navigation">
    <div class="top-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-2">
                    <div id="colorlib-logo">
                        <a href="{{route('main')}}">
                            <img src="{{asset('images/logo-white.png')}}" alt="logo" class="logo logo-display">
                        </a>
                    </div>
                </div>
                <div class="col-xs-10 text-right menu-1 t-20 ">
                    <ul>
                        <li><a href="{{route('about_us')}}">@lang('pages.header.about')</a></li>
                        <li class="has-dropdown">
                            <a>@lang('pages.header.services')</a>
                            <ul class="dropdown">
                                <li><a href="{{route('management')}}">@lang('pages.header.management')</a></li>
                                <li><a href="{{route('construction')}}">@lang('pages.header.construction')</a></li>
                                <li><a href="{{route('document')}}">@lang('pages.header.document')</a></li>
                                <li><a href="{{route('organization')}}">@lang('pages.header.organization')</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('main')}}#colorlib-services">@lang('pages.header.why_we')</a></li>
                        <li><a href="#colorlib-contact">@lang('pages.header.contact')</a></li>
                        <li class="lang-text">
                            <ul>
                            <li class="lang-text-uz"><a href="#">UZ</a></li>
                            <li class="lang-text-ru"><a href="#"><span>/</span> RU <span>/</span></a></li>
                            <li class="lang-text-en"><a href="#">ENG</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
