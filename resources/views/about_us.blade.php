@extends('layouts.layout')

@section('aside')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url(images/cover_img_3.jpg);">
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
                    <a href="#" class="staff-img staff-img2" style="background-image: url(images/owner.jpg);"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>@lang('pages.about.services-header1')<span>KLICHOF GROUP</span></h2>
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
                            <p>всегда выполнять свои обещания, никогда и ни при каких условиях не нарушать их первыми</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-board"></i>
							</span>
                        <div class="desc fsz">
                            <p>фактическая стоимость, качественная и своевременная работа, грамотная оформления документов для всех работ, и только в конце - финансовые интересы</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-wage"></i>
							</span>
                        <div class="desc fsz">
                            <p>зарабатывать вознаграждение за оказание услуг только методом "ХАЛАЛ", и никогда не нарушать эти принципы, какие бы выгоды это ни сулило.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>ПОРЯДОК РАБОТЫ <span>KLICHOF GROUP</span></h2>
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
                            <p>принцип "единого окна", который заключается в организации взаимодействия, сопровождения, полной координации и контроля всех работ с учетом рисков, а также со знанием и грамотным подходом ко всему</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-technician"></i>
							</span>
                        <div class="desc fsz">
                            <p>наличие постоянного мониторинга, в ходе которого контролируется весь ход выполнения строительно - монтажных, пуско-наладочных, испытательных работ на объекте строительства с учетом всех рисков</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-icon-1556324"></i>
							</span>
                        <div class="desc fsz">
                            <p>высокий уровень контроля всего состава работ на объекте строительства в режиме 24/7 и своевременное информирование инвесторов о текущем статусе реализации проекта</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-checklist"></i>
							</span>
                        <div class="desc fsz">
                            <p>предоставление постоянных отчётов, отражающих основные КПЭ (ключевые показатели эффективности) KPI (key performance indicators) на ежедневной, еженедельной и ежемесячной основе</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-reverse-engineering"></i>
							</span>
                        <div class="desc fsz">
                            <p>присутствие инженерного подхода с выстраиванием единой 3D - модели на основании имеющихся чертежей, проверка принятых проектных решений на адекватность, полноту и отсутствие недочётов</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-money-1"></i>
							</span>
                        <div class="desc fsz">
                            <p>высокий уровень контроля текущих затрат с возможностью критической оценки будущих затрат и выявления неэффективных расходов (анализ сметной документации).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-user"></i>
							</span>
                        <div class="desc fsz">
                            <p>принцип вариативности при формировании команды, поскольку её состав может меняться в зависимости от стадии реализации проекта</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-team-1"></i>
							</span>
                        <div class="desc fsz">
                            <p>комплексный подход на каждом этапе проекта, так как в команде участвуют инженеры-консультанты по строительству, аудиторы и специалисты по налогообложению, финансовому консультированию, управлению рисками</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>ПЛАНИРУЕМЫЕ УСЛУГИ <span>KLICHOF GROUP</span></h2>
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
                            <p>сюрвейинг (контрольного обмер объема, качества и стоимости выполненных работ) объектов строительства для инвесторов и банков</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-construction"></i>
							</span>
                        <div class="desc fsz">
                            <p>создание лаборатории по испытанию качества строительных материалов, изделий, конструкций</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-property"></i>
							</span>
                        <div class="desc fsz">
                            <p>техническое обследование зданий и сооружений</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-design"></i>
							</span>
                        <div class="desc fsz">
                            <p>аудит проектно - сметной документации</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services about-ser">
							<span class="icon">
								<i class="flaticon-cost"></i>
							</span>
                        <div class="desc fsz">
                            <p>финансово - строительный аудит</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
