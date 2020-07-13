@extends('services.layout')

@section('content')
    <div id="service-intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 tabulation animate-box">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#first"><span class="number">I</span><span class="step">Свяжитесь с нами</span></a></li>
                        <li><a data-toggle="tab" href="#second"><span class="number">II</span><span class="step">Излагаем планы</span></a></li>
                        <li><a data-toggle="tab" href="#third"><span class="number">III</span><span class="step">Собираем  инвесторов жилья</span></a></li>
                        <li><a data-toggle="tab" href="#fourth"><span class="number">IV</span><span class="step">Заключаем договора</span></a></li>
                        <li><a data-toggle="tab" href="#fifth"><span class="number">V</span><span class="step">Организуем строительства</span></a></li>
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
                        <h2>ИНВЕСТОРЫ ЖИЛЬЯ ПРИ УЧАСТИИ В ДАННОМ МЕТОДЕ ПОЛУЧАТ КАЧЕСТВО, ОЩУТИМУЮ ЭКОНОМИЮ ВРЕМЕНИ И СРЕДСТВ ДО 50% ИЛИ "ДО ДВУХ КВАРТИР ВМЕСТО ОДНОЙ". И САМОЕ ГЛАВНОЕ, ВЫБИРАЮТ СНАЧАЛА СОСЕДЕЙ И ТОЛЬКО ПОТОМ КВАРТИРУ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>ОКАЗАНИЕ УСЛУГ ЧАСТНОГО ЗАКАЗЧИКА ПО <span>ОРГАНИЗАЦИИ СТРОИТЕЛЬСТВА ЖИЛЬЯ,</span> ИМЕННО, МЕТОДОМ "ХАЛАЛ"</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">
                <p>При условии полного предварительного и поэтапного ежемесячного финансирования (размеры финансирования зависят от фактических расходов на строительство) всего состава услуг со стороны команды инвесторов собственного жилья (будущих владельцев квартир), KLICHOF GROUP организует строительства многоэтажных жилых домов в соответствии с технологиями и требованиями строительных норм и правил, действующих в Республике Узбекистан.</p>
                <p>Организует строительство жилья не как "партнёр" в долевом строительстве или "продавец" пока несуществующих или строящихся квартир со скидками. А как ответственный частный "Заказчик", применяющий методом "ХАЛАЛ" при организации управления и контроля за проектированием и качественным строительством современных квартир. По обоснованным фактическим ценам + 10% для совместной командой инвесторов и нуждающихся семей в жилье из разных слоёв населения (в соответствии с их реальными семейными доходами) с экономией средств до 50% от рыночной стоимости аналогичного жилья на месте строительства.</p>
                <p>При этом, KLICHOF GROUP как профессиональная команда принимает на себя права, обязательства и самое главное, ответственность по законодательству за качественное строительство и за нецелевое использование финансовых средств (перед совместной командой инвесторов жилья) с исполнением функции частного "Заказчика" при организации строительства жилья сроком 1,5 - 2 года со дня получения разрешения на строительство в установленном порядке.</p>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>СОСТАВ УСЛУГ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center">
                <p>В рамках договора об оказании услуг частного "Заказчика" по организации строительства жилья, KLICHOF GROUP примет на себя права, обязательства и ответственность за выполнением основного состава услуг, не ограничиваясь следующим:</p>
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
                            <p>привлечение необходимого количества инвесторов жилья (согласившихся осуществлять полное предварительное и поэтапное ежемесячное финансирование всего состава услуг)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-chart"></i>
							</span>
                        <div class="desc">
                            <p>организация проведения первичного изучения земельных участков в г. Ташкенте и крупных городах областных центров с оценкой всех рисков, и возможности реализации проекта</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-team"></i>
							</span>
                        <div class="desc">
                            <p>по согласованию с командой инвесторов жилья - приобретение земельных участков в установленном законом порядке для организации строительства жилых домов</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-model"></i>
							</span>
                        <div class="desc">
                            <p>организация предпроектных работ, разработки концепции, эскизного буклета и предпроектного бюджета в установленном порядке и согласования их с командой инвесторов жилья</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-icon-1556324"></i>
							</span>
                        <div class="desc">
                            <p>организация получения ИРД во всех государственных инстанциях в установленном законом порядке с получением разрешения на проектирование строительства.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-architecture"></i>
							</span>
                        <div class="desc">
                            <p>совместно с командой инвесторов жилья и с учётом их пожеланий - подготовка задания на проектирование в соответствии со строительными нормами и правилами</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-blueprint"></i>
							</span>
                        <div class="desc">
                            <p>организация разработки ПСД с детальным бюджетом проекта, получения положительного заключения экспертизы и согласования ее с командой инвесторов жилья</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-unlock"></i>
								</span>
                        <div class="desc">
                            <p>организация получения разрешения на строительство и начало, а также завершение СМР в соответствии с ПСД и строительными нормами и правилами, действующими в Республике Узбекистан</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-hotel"></i>
								</span>
                        <div class="desc">
                            <p>организация ввода жилого дома в эксплуатацию с получением разрешения на подключение всех инженерных коммуникаций, оформление прав собственности всем инвесторам жилья</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-excel"></i>
								</span>
                        <div class="desc">
                            <p>организация подготовки итогового бюджета всем инвесторам жилья в установленном порядке, с подтверждением экономии средств</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-town-1"></i>
								</span>
                        <div class="desc">
                            <p>организация создания эксплуатирующего органа совместно с жильцами с обеспечением контроля гарантированного срока эксплуатации жилого дома в установленные сроки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 colorlib-services-text text-center">
                <p>Основной состав услуг остается неизменным, а их детализация, с включением дополнительных или сокращением этих услуг, всегда регулируется KLICHOF GROUP и командой инвесторов жилья в договорах.</p>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>СТОИМОСТЬ УСЛУГ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text">
                <p>Стоимость данных услуг KLICHOF GROUP зависит от объёмов оказываемых услуг и составляет до 10% от суммы только обоснованных фактических расходов на строительство жилья с учетом установленных налогов, которых в любой момент могут свободно контролировать и проверить любые инвесторы жилья при строительстве жилого дома.</p>
                <p>При этом, самое главное, путём применения метода "ХАЛАЛ" при организации управления и контроля за проектированием и качественным строительством жилья, стоимость квартир для инвесторов жилья в конечном итоге будет обходиться в эквиваленте от 200 $ США ДО 650 $ США за 1 кв.м. общей площади (650 $ США — это самая максимальная стоимость 1 кв.м. общей площади именно в центральных частях г. Ташкента).  В эти стоимости также включены согласованная планировка, дизайн, качественная отделка, сантехника и мебель.</p>
                <p>Стоимость квартир будут зависит от наличия инженерных коммуникаций, расходов на приобретение земельных участков с учётом мест строительства жилых домов по Республике Узбекистан. И эта стоимость всегда будет до 50% дешевле, чем рыночная стоимость аналогичного жилья на месте строительства. Отсюда "до двух квартир вместо одной" или "одна для себя, а другая для продажи".</p>
                <p>На практике сложившейся стоимости данных услуг не существует. Ни один "заказчик-застройщик" в Узбекистане не оказывает такие услуги при строительстве жилья. Будущих владельцев квартир привлекают как "дольщиков -партнеров" или (в соответствии с рекламой) "продают пока несуществующие или строящиеся квартиры" со скидками.</p>
                <p>В нашем случае, инвесторы жилья, оплатив только стоимость обоснованных фактических расходов строительства + услуги частного заказчика до 10% в процессе строительства KLICHOF GROUP, получат квартиры по обоснованным фактическим расходам + 10%, при этом инвесторы жилья сэкономят свои средства до 50%.</p>
            </div>
        </div>
    </div>
@endsection
