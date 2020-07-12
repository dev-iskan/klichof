@extends('services.layout')

@section('content')
    <div id="service-intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 tabulation animate-box">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#first"><span class="number">I</span><span class="step">Свяжитесь с нами</span></a></li>
                        <li><a data-toggle="tab" href="#second"><span class="number">II</span><span class="step">Анализируем задачу</span></a></li>
                        <li><a data-toggle="tab" href="#third"><span class="number">III</span><span class="step">Организуем встречу</span></a></li>
                        <li><a data-toggle="tab" href="#fourth"><span class="number">IV</span><span class="step">Излагаем планы</span></a></li>
                        <li><a data-toggle="tab" href="#fifth"><span class="number">V</span><span class="step">При согласии заключаем договор</span></a></li>
                    </ul>
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
                <h2>ОКАЗАНИЕ УСЛУГ ЧАСТНОГО ЗАКАЗЧИКА ПО <span>СОПРОВОЖДЕНИЮ СТРОИТЕЛЬНОЙ ДОКУМЕНТАЦИИ</span></h2>
            </div>
            <div class="col-md-12 colorlib-services-text" >
                <p>Организация анализа ПСД - это независимая оценка достоверности составленных документов отраженные в подсчётах суммы расходов, чтобы возможные неточности не отразились на размеры капиталовложений или у инвесторов есть подозрение на завышенные показатели расходов</p>
                <p>Правильная и грамотная разработанная строительная документация является одним из основных документов и во время любого строительства инвесторы получать сокращение сроков строительства, сокращение затрат на строительство, исключение ошибок при планировании бюджета</p>
                <p>Организации финансово-строительного изучения документов объекта строительства и сопоставления их с реальными фактами для выявлению возможных отклонений, нарушений и оптимизации строительного процесса с целью защиты от основных рисков (перерасход средств, продления сроков и некачественные работы)</p>
                <p>Организация мониторинга договоров обеспечивает контроль проектирования, контроль договора подряда с чётко сформулированными условиями, учитывающего все нюансы действующего законодательства, контроль договоров поставки на строительные материалы, конструкций, изделий и оборудования со сметой и соблюдением технических стандартов</p>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>В СОСТАВ УСЛУГ ВХОДИТ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center">
                <p>В рамках договора по сопровождению строительной документации команда "KLICHOF GROUP" на себя обязательства и ответственность основного состава услуг, но не ограничивается следующими:</p>
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
                            <p>организация анализа проектно-сметной документации и рекомендации</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-portfolio"></i>
							</span>
                        <div class="desc">
                            <p>организация мониторинга и рекомендации по разработки строительной документации в установленном порядке</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-budget"></i>
							</span>
                        <div class="desc">
                            <p>организация финансово-строительного анализа и рекомендации</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-contract"></i>
							</span>
                        <div class="desc">
                            <p>организация мониторинга договоров на проектирование, строительные работы, поставки и рекомендации</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 colorlib-services-text text-center">
                <p>Основной состав услуг остаются неизменными, а их детализация, с включением дополнительных или усечением этих услуг всегда регулируется командой "KLICHOF GROUP" и инвесторами в договоре</p>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>СТОИМОСТЬ УСЛУГ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">
                <p>Стоимость данных услуг команды "KLICHOF GROUP" зависит от объёмов услуг и составляет до 3 % от суммы только  обоснованных  фактических расходов на строительство + налоги, которых в любой момент легко могут контролировать и проверить инвесторы при любом строительстве</p>
                <p>В практике стоимость данных услуг договорные и ограничиваются заработной платой специалистам. И почему-то инвесторы стараются сэкономить деньги именно на данные услуги. Поэтому недобросовестные "специалисты", в основном, работают в пользу проектировщиков, подрядчиков и поставщиков с понятной мотивацией. А оплатив стоимость данных услуг команды "KLICHOF GROUP" до 3 %, инвесторы сэкономят свои средства от 5 % до 10 % путём применения при строительстве нового метода организации управления и контроля за проектированием и качественным строительством</p>
            </div>
        </div>
    </div>
@endsection
