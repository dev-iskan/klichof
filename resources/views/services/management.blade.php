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
                        <h2>УПРАВЛЕНИЕ СТРОИТЕЛЬСТВОМ НЕОБХОДИМО ДОВЕРИТЬ НЕЗАВИСИМОЙ (от проектировщиков, подрядчиков и поставщиков), профессиональной и надёжной команде "KLICHOF GROUP"    </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>ОКАЗАНИЕ УСЛУГ ЧАСТНОГО ЗАКАЗЧИКА ПО <span>УПРАВЛЕНИЮ СТРОИТЕЛЬСТВОМ</span></h2>
            </div>
            <div class="col-md-12 colorlib-services-text">
                <p>Команда "KLICHOF GROUP" осуществляет полное управление любым строительством по сценариям, оговорёнными с инвесторами до начала работ. Управление любым строительством осуществляется, когда инвесторы поручают по договору команде "KLICHOF GROUP" выполнять данную  услугу</p>
                <p>Таким образом, "KLICHOF GROUP" как профессиональная команда принимает на себя обязательства, права и ответственность исполнять функции частного "Заказчика" новым методом организации управления и контроля за проектированием и качественным строительством с самого начала до конечного момента с экономией средств инвесторов от 20% до 50% и времени инвесторов (срок 1,5 - 2 года со дня получения разрешения на строительство в установленном порядке), снимает с инвесторов всю ответственность и все проблемы по синхронизации  взаимодействий, сопровождений с государственными инстанциями и контролирующими организациями в области строительства, организует управления  и контроль за работами, выбирает для этих целей ряд контрагентов (проектировщиков, подрядчиков и поставщиков) с согласием инвесторов, исключить любой обман, недопустить дорогого некачественного  долгостроя для инвесторов</p>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>В СОСТАВ УСЛУГ ВХОДИТ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center" >
                <p>В рамках договора по управлению с любым строительством команда "KLICHOF  GROUP" примет на себя обязательства и ответственность за выполнением основного состава услуг, но не ограничивается следующими:</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-chart"></i>
							</span>
                        <div class="desc">
                            <p>организации первичного анализа для принятия инвестиционного решения, обследования земельного участка или зданий и сооружений при реконструкции, оценки возможности реализации проекта</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-blueprint-1"></i>
							</span>
                        <div class="desc">
                            <p>организации предпроектных работ, разработки концепции, эскизного буклета и предпроектного бюджета в установленном порядке и согласования их с инвестором</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-icon-1556324"></i>
							</span>
                        <div class="desc">
                            <p>организации получения ИРД во всех государственных инстанциях, получения разрешения на проектирования  и строительства</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-model"></i>
							</span>
                        <div class="desc">
                            <p>подготовка (адаптация) ТЗ на проектирование в соответствии с требованиями инвесторов, а также строительных норм и правил в Республике Узбекистан</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-architecture"></i>
							</span>
                        <div class="desc">
                            <p>организации проектирования, разработки (адаптации) проектной, рабочей, сметной документации с детальным бюджетом проекта, получения положительного заключения экспертизы</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-unlock"></i>
							</span>
                        <div class="desc">
                            <p>организации получения разрешения на строительство, управления и контроля за качественным строительством объекта в соответствии ПСД, а также строительными нормами и правилами</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-hotel-1"></i>
							</span>
                        <div class="desc">
                            <p>организации ввода объекта в эксплуатацию, постановки объекта на кадастровый учёт с оформлением права собственности инвесторов на новый объект в установленном порядке</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-excel"></i>
								</span>
                        <div class="desc">
                            <p>организации подготовки итогового бюджета проекта для бухгалтерского учета в установленном порядке с доказательством экономии средств инвесторов</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-town-1"></i>
								</span>
                        <div class="desc">
                            <p>организация эксплуатации объекта, контроль выхода на плановые показатели, контроль за операционной деятельностью объекта или реализации объекта, как готовую продукцию</p>
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
            <div class="col-md-12 colorlib-services-text" >
                <p>Стоимость данных услуг команды "KLICHOF GROUP" зависит от объёмов услуг и составляет до 10% от суммы только обоснованных  фактических расходов на строительство + налоги, которых в любой момент легко могут контролировать и проверить инвесторы при любом строительстве</p>
                <p>На практике стоимость данных услуг составляет до 5% от установленной сметной стоимости по текущим ценам в Республике Узбекистан, со всеми "дорогими" расценками, накруткими и нормативами. И при этом недобросовестный "Заказчик", в основном, работает в пользу проектировщиков, подрядчиков и поставщиков с понятной мотивацией. А оплатив стоимость данных услуг команды "KLICHOF GROUP" до 10%, инвесторы сэкономят свои средства от 20% до 50 % путём применения при строительстве нового метода организации управления и контроля за проектированием и качественным строительством</p>
            </div>
        </div>
    </div>
@endsection