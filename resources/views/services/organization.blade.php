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
                        <h2>ИНВЕСТОРЫ ЖИЛЬЯ ПРИ УЧАСТИИ В ДАННОМ МЕТОДЕ ПОЛУЧАТ КАЧЕСТВА, ЭКОНОМИЮ ВРЕМЕНИ И СРЕДСТВ ДО 50% ИЛИ "ДВЕ КВАРТИРЫ ВМЕСТО ОДНОЙ" И САМОЕ ГЛАВНОЕ, ВЫБИРАЮТ СНАЧАЛА СОСЕДЕЙ И ПОТОМ КВАРТИРУ</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>ОКАЗАНИЕ УСЛУГ ЧАСТНОГО ЗАКАЗЧИКА ПО <span>ОРГАНИЗАЦИИ СТРОИТЕЛЬСТВА ЖИЛЬЯ</span></h2>
            </div>
            <div class="col-md-12 colorlib-services-text" >
                <p>При условии полного предварительного и поэтапного ежемесячного финансирования всего состава услуг со стороны инвесторов жилья (будущих владельцев квартир), команда "KLICHOF GROUP" организует строительства жилья в соответствии технологиями и требованиями строительных норм и правил в Республике Узбекистан, не как "партнёр" в долевом строительстве или "продавец" квартиры, а как ответственный частный "Заказчик" применяющий новый метод организации управления и контроля за проектированием и качественным строительством в строительстве современных и качественных квартир по обоснованным фактическим ценам + 10 % для нуждающихся семей в жилье из разных слоёв населения (в соответствии с их реальными семейными доходами) с экономией средств до 50 % от рыночной стоимости аналогичного жилья на местах строительств</p>
                <p>При этом, "KLICHOF GROUP" как профессиональная команда принимает на себя обязательства, права и самое главное, ответственность по законодательству за нецелевое использование финансовых средств (перед командой инвесторов жилья) с исполнением функции частного "Заказчика" в организации строительства жилья сроком 1,5 - 2 года со дня получения разрешения на строительства в установленном порядке</p>
            </div>
        </div>
    </div>

    <div id="colorlib-services">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>В СОСТАВ УСЛУГ ВХОДИТ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text text-center" >
                <p>В рамках договоров об оказания услуг частного "Заказчика" по организации строительства жилья, команда "KLICHOF GROUP" примет на себя выполнение основных объёмов услуг, но не ограничивается следующими:</p>
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
                            <p>привлечение необходимого количества инвесторов жилья (согласившихся осуществлять полную предварительную и поэтапную ежемесячную финансирование всего состава услуг)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-chart"></i>
							</span>
                        <div class="desc">
                            <p>организации проведения первичного изучения земельных участков в г.Ташкенте и крупных  городах областных центров  с оценкой возможности реализации проекта</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-team"></i>
							</span>
                        <div class="desc">
                            <p>по согласованию с командой инвесторов жилья приобретения земельных участков для организации строительства жилых домов в установленном законом порядке</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-model"></i>
							</span>
                        <div class="desc">
                            <p>организации предпроектных работ, разработки концепции, эскизного буклета и предпроектного бюджета в установленном порядке и согласования их с командой инвесторов жилья</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-icon-1556324"></i>
							</span>
                        <div class="desc">
                            <p>организации получения ИРД во всех государственных инстанциях в установленном законом порядке с получением разрешения на проектирование  и строительства</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-architecture"></i>
							</span>
                        <div class="desc">
                            <p>совместно с командой инвесторов жилья и с учётом их пожеланий,  подготовки задания на проектирование в соответствии с строительными нормами и правилами</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
							<span class="icon">
								<i class="flaticon-blueprint"></i>
							</span>
                        <div class="desc">
                            <p>организации разработки ПСД с детальным бюджетом проекта, получения положительного заключения экспертизы и согласования ее с командой инвесторов жилья</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-unlock"></i>
								</span>
                        <div class="desc">
                            <p>организации получения разрешения на строительство и начало, а также завершение СМР в соответствии ПСД и строительными нормами и правилами в Республике Узбекистан</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-hotel"></i>
								</span>
                        <div class="desc">
                            <p>организации ввода жилого дома в эксплуатацию с получением разрешения подключения всех инженерных коммуникаций, оформление прав собственности всем инвесторам жилья</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-2 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-excel"></i>
								</span>
                        <div class="desc">
                            <p>организации подготовки итогового бюджета всем инвесторам жилья в установленном порядке,  с доказательством экономии средств</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="services">
								<span class="icon">
									<i class="flaticon-town-1"></i>
								</span>
                        <div class="desc">
                            <p>организация эксплуатирующего органа с жильцами с обеспечением контроля гарантированного срока эксплуатации жилого дома в установленные сроки</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-md-12 colorlib-services-text text-center" >
                <p>Основные услуги остаются неизменными, а их детализация, с включением дополнительных или усечением этих услуг всегда регулируется командой "KLICHOF GROUP" и командой инвесторов жилья в договорах</p>
            </div>
        </div>
    </div>

    <div id="colorlib-testimony">
        <div class="container">
            <div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
                <h2>СТОИМОСТЬ УСЛУГ</h2>
            </div>
            <div class="col-md-12 colorlib-services-text" >
                <p>Стоимость данных услуг команды "KLICHOF GROUP" зависит от объёмов  оказываемых услуг и составляет до 10% от суммы только обоснованных фактических расходов на строительство жилья + налоги, которых в любой момент легко могут контролировать и проверить любые инвесторы жилья при строительстве жилого дома</p>
                <p>При этом, самое главное, стоимость квартир для инвесторов жилья в конечном итоге будет обходиться в эквиваленте от 200 $ США ДО 650 $ США за 1кв.м. общей площади (650 $ США это самая максимальная стоимость 1кв.м. общей площади в центральных частях г.Ташкента именно путём применения нового метода организации управления и контроля за проектированием и качественным строительством) и зависит от наличия инженерных коммуникаций, расходов на приобретения земельных участков с учётом мест строительства жилых домов по Республике Узбекистан. И эти стоимости всегда будут до 50% дешевле, чем рыночные стоимости аналогичного жилья на местах строительства. Отсюда "две квартиры вместо одной" или "одна для себя, а другая для продажи"</p>
                <p>На практике стоимость данных услуг не существует. Ни один "заказчик-застройщик" в Узбекистане не оказывает такие услуги по строительству жилья. Будущих владельцев квартир привлекают как "дольщиков -партнеров" или (в соответствии с рекламами) "продают квартиры" со скидками. В нашем случае, инвесторы жилья оплатив только стоимость обоснованных фактических расходов строительства + услуги частного заказчика до 10% в процессе строительства команде "KLICHOF GROUP", получат квартиры по обоснованным фактическим расходам + 10%</p>
            </div>
        </div>
    </div>
@endsection
