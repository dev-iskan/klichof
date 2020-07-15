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
                        <li><a href="{{route('about_us')}}">О КОМПАНИИ</a></li>
                        <li class="has-dropdown">
                            <a>УСЛУГИ</a>
                            <ul class="dropdown">
                                <li><a href="{{route('management')}}">Управление строительством</a></li>
                                <li><a href="{{route('construction')}}">Сопровождение строительства</a></li>
                                <li><a href="{{route('document')}}">Сопровождение строительной документации</a></li>
                                <li><a href="{{route('organization')}}">Организации строительства жилья</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('main')}}#colorlib-services">ПОЧЕМУ МЫ?</a></li>
                        <li><a href="#colorlib-contact">КОНТАКТЫ</a></li>
                        <li>
                            <ul>
                                <li><a href="">UZ</a>
                                </li>
                                <li><a href="">RU</a>
                                </li><li><a href="">ENG</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
