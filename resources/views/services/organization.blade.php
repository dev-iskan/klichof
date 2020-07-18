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
                        <h2>@lang('pages.organization.header-other')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.organization.service-header')</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">@lang('pages.organization.service-text')</div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.organization.service-consist-header')</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center">
                <p>@lang('pages.organization.service-consist-text-1')</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-investor"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-1')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-chart"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-2')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-team"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-3')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-model"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-4')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-icon-1556324"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-5')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-architecture"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-6')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-blueprint"></i>
							</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-7')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-unlock"></i>
								</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-8')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-hotel"></i>
								</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-9')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-excel"></i>
								</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-10')</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-town-1"></i>
								</span>
                        <div class="desc">
                            <p>@lang('pages.organization.service-consist-part-11')</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 colorlib-services-text text-center">
                <p>@lang('pages.organization.service-consist-text-2')</p>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.organization.service-price-header')</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">@lang('pages.organization.service-price-text')</div>
        </div>
    </div>
@endsection
