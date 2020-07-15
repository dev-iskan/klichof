@extends('layouts.layout')

@section('aside')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{asset('images/img_bg_4.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-1 slider-text">
                                <div class="slider-text-inner text-center">
                                    @lang('pages.main.slider1')
                                    @include('layouts._buttons')
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/img_bg_2.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-1 slider-text">
                                <div class="slider-text-inner text-center">
                                    @lang('pages.main.slider2')
                                    @include('layouts._buttons')
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/img_bg_3.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluids">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-1 slider-text">
                                <div class="slider-text-inner text-center">
                                    @lang('pages.main.slider3')
                                    @include('layouts._buttons')
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/img_bg_5.jpg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-1 slider-text">
                                <div class="slider-text-inner text-center">
                                    @lang('pages.main.slider4')
                                    @include('layouts._buttons')
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('images/img_bg_6.jpeg')}});">
                    <div class="overlay"></div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-10 col-sm-12 col-md-offset-1 slider-text">
                                <div class="slider-text-inner text-center">
                                    @lang('pages.main.slider5')
                                    @include('layouts._buttons')
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
    <div id="colorlib-intro">
        <div class="container-fluid">
            <div class="row">
                <div id="services-btn" class="col-md-12 tabulation animate-box">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#plan"><i
                                    class="flaticon-worker-1 "></i>@lang('pages.header.management')</a></li>
                        <li><a data-toggle="tab" href="#general"><i
                                    class="flaticon-worker"></i>@lang('pages.header.construction')</a></li>
                        <li><a data-toggle="tab" href="#manage"><i
                                    class="flaticon-sketch"></i>@lang('pages.header.document')</a></li>
                        <li><a data-toggle="tab" href="#build"><i
                                    class="flaticon-urban "></i>@lang('pages.header.organization')</a>
                        </li>
                    </ul>
                    <div class="tab-content main-fsz">
                        <div id="plan" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        @lang('pages.main.services-management')
                                        <div class="text-center">
                                            <a href="{{route('management')}}"
                                               class="btn btn-primary">@lang('pages.buttons.more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="general" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        @lang('pages.main.services-construction')
                                        <div class="text-center">
                                            <a href="{{route('construction')}}"
                                               class="btn btn-primary">@lang('pages.buttons.more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="manage" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        @lang('pages.main.services-document')
                                        <div class="text-center">
                                            <a href="{{route('document')}}"
                                               class="btn btn-primary">@lang('pages.buttons.more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="build" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        @lang('pages.main.services-organization')
                                        <div class="text-center">
                                            <a href="{{route('organization')}}"
                                               class="btn btn-primary">@lang('pages.buttons.more')</a>
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
        <div id="colorlib-about" class="colorlib-about-img img-responsive"
             style="background-image: url({{asset('images/cover_img_2.jpg')}});" data-stellar-background-ratio="0.35">
            <div class="overlay"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 colorlib-heading colorlib-heading2 animate-box center-ver">
                        @lang('pages.main.about-wrap')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="colorlib-services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 animate-box">
                    <div class="about-flex">
                        <div class="col-half">
                            <div class="desc animate-box">

                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="col-md-6">
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingZero">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseZero"
                                                           aria-expanded="false" aria-controls="collapseZero">
																		<span class="icon">
																			<i class="flaticon-urban"></i>
																		</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-1-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseZero" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingZero">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                                @lang('pages.main.7-reasons-1-body')
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseOne"
                                                           aria-expanded="false" aria-controls="collapseOne">
																		<span class="icon">
																			<i class="flaticon-loan"></i>
																		</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-2-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>@lang('pages.main.7-reasons-2-body')
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseTwo"
                                                           aria-expanded="false" aria-controls="collapseTwo"><span
                                                                class="icon">
																			<i class="flaticon-seal"></i>
																		</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-3-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                            <li>@lang('pages.main.7-reasons-3-body')</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseThree"
                                                           aria-expanded="false" aria-controls="collapseThree"><span
                                                                class="icon">
																					<i class="flaticon-leader"></i>
																				</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-4-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                            <li>@lang('pages.main.7-reasons-4-body')</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseFour"
                                                           aria-expanded="false" aria-controls="collapseThree"><span
                                                                class="icon">
																					<i class="flaticon-run"></i>
																				</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-5-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>@lang('pages.main.7-reasons-5-body')</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingSix">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseSix"
                                                           aria-expanded="false" aria-controls="collapseThree"><span
                                                                class="icon">
																					<i class="flaticon-problem-2"></i>
																				</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-6-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingSix">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                            <li>@lang('pages.main.7-reasons-6-body')</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="panel panel-default animate-box">
                                                <div class="panel-heading" role="tab" id="headingFive">
                                                    <h4 class="panel-title" style="border-top: none">
                                                        <a class="collapsed" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseFive"
                                                           aria-expanded="false" aria-controls="collapseThree"><span
                                                                class="icon">
																					<i class="flaticon-bribe"></i>
																				</span>
                                                            <br>
                                                            <br>
                                                            @lang('pages.main.7-reasons-7-header')
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingFive">
                                                    <div class="panel-body">
                                                        <li>@lang('pages.main.7-reasons-7-body')</p>
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
            </div>
        </div>
    </div>
    <div id="colorlib-counter" class="colorlib-counters"
         style="background-image: url({{asset('images/cover_img_1.jpg')}});"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-2 col-sm-6 aside-stretch text-center animate-box">
                    <div class="counter-entry exception">
                        <span class="icon icon-white"><i class="flaticon-research-1"></i></span>
                        <span class="colorlib-counter-label">@lang('pages.main.research1')</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-leader"></i></span>
                        <span class="colorlib-counter-label">@lang('pages.main.research2')</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-idea"></i></span>
                        <span class="colorlib-counter-label">@lang('pages.main.research3')</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-money-2"></i></span>
                        <span class="colorlib-counter-label">@lang('pages.main.research4')</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-startup"></i></span>
                        <span class="colorlib-counter-label">@lang('pages.main.research5')</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-contract"></i></span>
                        <span class="colorlib-counter-label">@lang('pages.main.research5')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
