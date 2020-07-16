@extends('services.layout')

@section('content')
    <div id="service-intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 tabulation animate-box">
                    @include('layouts._menu')
                    <div class="tab-content">
                        <div id="first" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>@lang('pages.application.content-1')</p>	
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">@lang('pages.buttons.apply')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="second" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>@lang('pages.application.content-2')</p>
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">@lang('pages.buttons.apply')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="third" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>@lang('pages.application.content-3')</p>											
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">@lang('pages.buttons.apply')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="fourth" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>@lang('pages.application.content-4')</p>
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">@lang('pages.buttons.apply')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="fifth" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>@lang('pages.application.content-5')</p>
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">@lang('pages.buttons.apply')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-wrap">
        <div id="colorlib-about" class="colorlib-service-img" style="background-image: url({{asset('images/cover_img_2.jpg')}});" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 colorlib-heading colorlib-heading2 animate-box text-center">
                        <h2>@lang('pages.construction.header-other')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.construction.service-header')</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">@lang('pages.construction.service-text')</div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.construction.service-consist-header')</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center">@lang('pages.construction.service-consist-text-1')</div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-money-1"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.construction.service-consist-part-1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-loan"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.construction.service-consist-part-2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-reverse-engineering"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.construction.service-consist-part-3')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-checklist"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.construction.service-consist-part-4')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-permission"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.construction.service-consist-part-5')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-blueprint"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.construction.service-consist-part-6')</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-12 colorlib-services-text text-center">@lang('pages.construction.service-consist-text-2')</div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.construction.service-price-header')</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">@lang('pages.construction.service-price-text')</div>
        </div>
    </div>
@endsection
