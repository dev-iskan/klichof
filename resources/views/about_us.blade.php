@extends('layouts.layout')

@section('aside')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{asset('images/cover_img_3.jpg')}});">
                <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row tc">
                            <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                                <div class="slider-text-inner text-center">
                                    <h1>@lang('pages.header.about')</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
@endsection

@section('content')
    <div id="colorlib-about-us">
        <div class="container-fluid">
            <div class="row row-p-sm">
                <div class="col-lg-7 animate-box border-pr">
                    <div class="about-desc">
                        @lang('pages.about.desc')
                    </div>
                </div>
                <div class="col-lg-5 animate-box">
                    <a href="#" class="staff-img staff-img2" style="background-image: url({{asset('images/owner.jpg')}});"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.about.principle-header')</h2>
            </div>
        </div>
        <div class="container services-width">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-sell"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.principle-body-1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-board"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.principle-body-2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-wage"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.principle-body-3')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.about.order-header')</h2>
            </div>
        </div>
        <div class="container services-width">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-permission"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-technician"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-icon-1556324"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-3')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-checklist"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-4')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-reverse-engineering"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-5')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-money-1"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-6')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-user"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-7')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-team-1"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.order-body-8')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.about.planned-header')</h2>
            </div>
        </div>
        <div class="container services-width">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-search"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.planned-body-1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-construction"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.planned-body-2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-property"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.planned-body-3')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-design"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.planned-body-4')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-cost"></i>
							</span>
                        <div class="desc fsz">
                            <p>@lang('pages.about.planned-body-5')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
