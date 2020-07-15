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
                                        <p>Заполните предлагаемую форму либо позвоните нам по телефону. Наши специалисты получат от вас информацию и ответят на интересующие вас вопросы.</p>											<div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">Отправьте заявку с сайта</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="second" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>Анализ полученной от вас информации позволяет нам определить именно какие наши услуги будут для вас максимально выгодным и поможет кардинально решать ваши задачи или проблемы. </p>
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">Отправьте заявку с сайта</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="third" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>На личной встрече в нашем офисе, у вас будет возможность более подробно познакомиться с нашими услугами и убедиться в компетенции наших специалистов.</p>											<div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">Отправьте заявку с сайта</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="fourth" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>Детально излагаем планы и обсудим все пункты подготовленного коммерческого предложения для вас, актуализируем договор, исходя из особенностей ваших текущих задач.</p>
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">Отправьте заявку с сайта</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="fifth" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>Определив цель и объем работ, мы полностью берем на себя ответственность за выполнением всех обязанностей, которые мы взяли на себя в рамках заключённого договора.</p>
                                        <div class="text-center">
                                            <a href="#colorlib-contact" class="btn btn-primary">Отправьте заявку с сайта</a>
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
                        <h2>ПОРЯДОК В СТРОИТЕЛЬНОЙ ДОКУМЕНТАЦИИ НЕОБХОДИМ В ЛЮБОМ СЛУЧАЕ И В ЛЮБОЕ ВРЕМЯ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>ОКАЗАНИЕ УСЛУГ ЧАСТНОГО ЗАКАЗЧИКА ПО <span>СОПРОВОЖДЕНИЮ СТРОИТЕЛЬНОЙ ДОКУМЕНТАЦИИ</span> МЕТОДОМ "ХАЛАЛ"</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">
                <p>Организация анализа ПСД - это независимая оценка достоверности составленных документов, отраженных в подсчётах суммы расходов, чтобы возможные неточности не отразились на размерах капиталовложений или у инвесторов, не возникало подозрения о завышенной величине расходов.</p>
                <p>Правильно и грамотно разработанная строительная документация является одним из основных документов, и при любом строительстве инвесторы получат порядок в строительной документации, сокращение затрат на строительство, исключение ошибок при планировании бюджета.</p>
                <p>Организация финансово-строительного изучения документов объекта строительства и сопоставления их с реальными фактами для выявления возможных отклонений, нарушений и оптимизаций строительного процесса с целью защиты от основного риска (перерасхода средств).</p>
                <p>Организация мониторинга договоров обеспечивает контроль проектирования, контроль договора подряда с чётко сформулированными условиями, учитывающими все нюансы действующего законодательства, контроль договоров поставки на строительные материалы, конструкции, изделия и оборудования в пределах сметы и соблюдение технических стандартов.</p>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>СОСТАВ УСЛУГ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center">
                <p>В рамках договора об оказании услуг частного "Заказчика" по сопровождению строительной документации KLICHOF GROUP примет на себя права, обязательства и ответственность за выполнением основного состава услуг, не ограничиваясь следующим:</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-data"></i>
							</span>
                        <div class="desc">
                            <p>организация анализа проектно-сметной документации и выдача рекомендаций</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-portfolio"></i>
							</span>
                        <div class="desc">
                            <p>организация мониторинга и выдача рекомендаций по разработке строительной документации в установленном порядке</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-budget"></i>
							</span>
                        <div class="desc">
                            <p>организация финансово-строительного анализа и выдача рекомендаций</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-contract"></i>
							</span>
                        <div class="desc">
                            <p>организация мониторинга договоров на проектирование, строительные работы, поставки и выдача рекомендаций</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 colorlib-services-text text-center">
                <p>Основной состав услуг остается неизменным, а их детализация, с включением дополнительных или сокращением этих услуг, всегда регулируется KLICHOF GROUP и инвесторами в договоре.</p>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>СТОИМОСТЬ УСЛУГ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">
                <p>Стоимость данных услуг KLICHOF GROUP зависит от объёмов услуг и составляет до 3% от суммы только обоснованных фактических расходов на строительство с учетом установленных налогов, которых в любой момент могут свободно контролировать и проверить инвесторы при любом строительстве.</p>
                <p>На практике стоимость данных услуг является договорной и ограничивается заработной платой специалистов. И почему-то инвесторы стараются сэкономить деньги именно на данных услугах. Поэтому некоторые недобросовестные "специалисты", в основном, работают в интересах проектировщиков, подрядчиков и поставщиков с понятной мотивацией.</p>
                <p>Оплатив стоимость данных услуг KLICHOF GROUP до 3%, инвесторы сэкономят свои средства от 5% до 10% путём применения метода "ХАЛАЛ" при организации управления и контроля за проектированием и качественным строительством в части строительной документации.</p>
            </div>
        </div>
    </div>
@endsection
