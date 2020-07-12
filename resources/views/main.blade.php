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
                                    <h1>НОВЫЙ МЕТОД ОРГАНИЗАЦИИ СТРОИТЕЛЬСТВА: <br> УСЛУГИ НЕЗАВИСИМОГО, ЧАСТНОГО <span>"ЗАКАЗЧИКА"</span>
                                        ИНВЕСТОРАМ ПРИ СТРОИТЕЛЬСТВЕ ЛЮБЫХ ОБЪЕКТОВ</h1>
                                    <a href="#colorlib-contact" class="btn btn-primary mr-15">Оставить заявку</a>
                                    <a href="#services-btn" class="btn-light btn-primary ">Подробнее</a>
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
                                    <h1>МЫ ЗНАЕМ КАК ИЗМЕНИТЬ СИТУАЦИЮ В ПОЛЬЗУ ИНВЕСТОРОВ В СТРОИТЕЛЬСТВЕ И ЖИЛЬЕ</h1>
                                    <a href="#colorlib-contact" class="btn btn-primary mr-15">Оставить заявку</a>
                                    <a href="#services-btn" class="btn-light btn-primary ">Подробнее</a>
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
                                    <h1><span>KLICHOF GROUP</span> - ЭТО КАЧЕСТВО, ЭКОНОМИЯ ВРЕМЕНИ И <br>СРЕДСТВ ДО
                                        <span>50%</span> ИЛИ <span>ДВЕ</span> КВАРТИРЫ вместо <span>ОДНОЙ</span></h1>
                                    <a href="#colorlib-contact" class="btn btn-primary mr-15">Оставить заявку</a>
                                    <a href="#services-btn" class="btn-light btn-primary ">Подробнее</a>
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
                                    <h1><span>KLICHOF GROUP</span> РАБОТАЕТ ТОЛЬКО НА ВАС, ДЛЯ ВАС И <br> В ПОЛЬЗУ ВАС
                                    </h1>
                                    <a href="#colorlib-contact" class="btn btn-primary mr-15">Оставить заявку</a>
                                    <a href="#services-btn" class="btn-light btn-primary ">Подробнее</a>
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
                        <li class="active"><a data-toggle="tab" href="#plan"><i class="flaticon-worker-1 "></i>
                                Управление строительством</a></li>
                        <li><a data-toggle="tab" href="#general"><i class="flaticon-worker"></i> Сопровождение
                                строительства</a></li>
                        <li><a data-toggle="tab" href="#manage"><i class="flaticon-sketch"></i> Строительная
                                документация</a></li>
                        <li><a data-toggle="tab" href="#build"><i class="flaticon-urban "></i>строительства жилья</a>
                        </li>
                    </ul>
                    <div class="tab-content main-fsz">
                        <div id="plan" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>Команда "KLICHOF GROUP" осуществляет полное управление любым строительством
                                            по сценариям, оговорёнными с инвесторами до начала работ. Управление любым
                                            строительством осуществляется, когда инвесторы поручают по договору команде
                                            "KLICHOF GROUP" выполнять данную услугу.</p>
                                        <p>Таким образом, "KLICHOF GROUP" как профессиональная команда принимает на себя
                                            обязательства, права и ответственность исполнять функции частного
                                            "Заказчика" новым методом организации управления и контроля за
                                            проектированием и качественным строительством с самого начала до конечного
                                            момента с экономией средств инвесторов от 20% до 50% и времени инвесторов
                                            (срок 1,5 - 2 года со дня получения разрешения на строительство в
                                            установленном порядке), снимает с инвесторов всю ответственность и все
                                            проблемы по синхронизации взаимодействий, сопровождений с государственными
                                            инстанциями и контролирующими организациями в области строительства,
                                            организует управления и контроль за работами, выбирает для этих целей ряд
                                            контрагентов (проектировщиков, подрядчиков и поставщиков) с согласием
                                            инвесторов, исключить любой обман, недопустить дорогого некачественного
                                            долгостроя для инвесторов.</p>
                                        <div class="text-center">
                                            <a href="{{route('management')}}" class="btn btn-primary">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="general" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>Любое строительство часто начинается, как многообещающий проект, а результате
                                            превращается в головную боль для инвесторов из-за непорядочных
                                            проектировщиков, подрядчиков и поставщиков. Смета растёт, сроки постоянно
                                            сдвигаются, качество работ на практике ниже, чем планировалось, и т.д. К
                                            сожалению, это "хронические болезни" любого строительства. Если
                                            строительства не избежать, то команда "KLICHOF GROUP" поможет инвесторам
                                            устранить все эти основные и другие риски, через услугу по "Сопровождению
                                            строительства" (услуга частного "Технического заказчика") путём применения
                                            нового метода организации и контроля за проектированием и качественным
                                            строительством.</p>
                                        <div class="text-center">
                                            <a href="{{route('construction')}}" class="btn btn-primary">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="manage" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>Организация анализа ПСД - это независимая оценка достоверности составленных
                                            документов отраженные в подсчётах суммы расходов, чтобы возможные неточности
                                            не отразились на размеры капиталовложений или у инвесторов есть подозрение
                                            на завышенные показатели расходов.</p>
                                        <p>Правильная и грамотная разработанная строительная документация, является
                                            одним из основных документов и во время любого строительства инвесторы
                                            получают сокращение сроков строительства, сокращение затрат на
                                            строительство, исключение ошибок при планировании бюджета.</p>
                                        <p>Организации финансово-строительного изучения документов объекта строительства
                                            и сопоставления их с реальными фактами для выявления возможных отклонений,
                                            нарушений и оптимизации строительного процесса с целью защиты от основных
                                            рисков (перерасход средств, продление сроков и некачественные работы).
                                            Организация мониторинга договоров обеспечивает контроль проектирования,
                                            контроль договора подряда с чётко сформулированными условиями, учитывающего
                                            все нюансы действующего законодательства, контроль договоров поставки на
                                            строительные материалы, конструкций, изделий и оборудования со сметой и
                                            соблюдением технических стандартов.</p>
                                        <div class="text-center">
                                            <a href="{{route('document')}}" class="btn btn-primary">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="build" class="tab-pane fade">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="services-desc">
                                        <p>При условии полного предварительного и поэтапного ежемесячного финансирования
                                            всего состава услуг со стороны инвесторов жилья (будущих владельцев
                                            квартир), команда "KLICHOF GROUP" организует строительство жилья в
                                            соответствии с технологиями и требованиями строительных норм и правил в
                                            Республике Узбекистан, не как "партнёр" в долевом строительстве или
                                            "продавец" квартиры, а как ответственный частный "Заказчик" применяющий
                                            новый метод организации управления и контроля за проектированием и
                                            качественным строительством в строительстве современных и качественных
                                            квартир по обоснованным фактическим ценам + 10% для нуждающихся семей в
                                            жилье из разных слоёв населения (в соответствии с их реальными семейными
                                            доходами) с экономией средств до 50% от рыночной стоимости аналогичного
                                            жилья на местах строительств или <b>"две квартиры вместо одной"</b> .</p>
                                        <p>При этом, "KLICHOF GROUP" как профессиональная команда принимает на себя
                                            обязательства, права и самое главное, ответственность по законодательству за
                                            нецелевое использование финансовых средств (перед командой инвесторов жилья)
                                            с исполнением функции частного "Заказчика" в организации строительства жилья
                                            сроком 1,5 - 2 года со дня получения разрешения на строительства в
                                            установленном порядке.</p>
                                        <div class="text-center">
                                            <a href="{{route('organization')}}" class="btn btn-primary">Подробнее</a>
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
                        <h2>ПУТЕМ ПРИМЕНЕНИЯ НОВОГО МЕТОДА ОРГАНИЗАЦИИ УПРАВЛЕНИЯ И КОНТРОЛЯ ЗА ПРОЕКТИРОВАНИЕМ И
                            КАЧЕСТВЕННЫМ СТРОИТЕЛЬСТВОМ КОМАНДА "KLICHOF GROUP":
                            <br> <span>-</span> ЗАЩИТИТ ВСЕ ЭКОНОМИЧЕСКИЕ ИНТЕРЕСЫ И ЮРИДИЧЕСКИЕ ПРАВА ИНВЕСТОРОВ В
                            СТРОИТЕЛЬСТВЕ С ЭКОНОМИЕЙ ВРЕМЕНИ И СРЕДСТВ ДО 50% ПРИ ОРГАНИЗАЦИИ ЛЮБОГО КАЧЕСТВЕННОГО
                            СТРОИТЕЛЬСТВА ПО РЕСПУБЛИКЕ УЗБЕКИСТАН;
                            <br> <span>-</span> ОБЕСПЕЧИТ ОРГАНИЗАЦИЮ КАЧЕСТВЕННОГО И СВОЕВРЕМЕННОГО СТРОИТЕЛЬСТВА
                            КВАРТИР ПО ОБОСНОВАННЫМ ФАКТИЧЕСКИМ ЦЕНАМ И С ЭКОНОМИЕЙ СРЕДСТВ ДО 50% ИЛИ "ДВЕ КВАРТИРЫ
                            вместо ОДНОЙ" ИМЕННО ДЛЯ ТЕХ КТО ИНВЕСТИРУЕТ В СОБСТВЕННОЕ ЖИЛЬЕ.</h2>
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
                                <h2> 7 ВАЖНЫХ ПОВОДОВ ДЛЯ РАБОТЫ С КОМАНДОЙ <span
                                        class="company-name">"KLICHOF GROUP"</span></h2>
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
                                                            квартиры по фактическим ценам
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseZero" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingZero">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li><span>Недолевое участие и непокупка квартиры, а при условии полного предварительного и поэтапного финансирования со стороны инвесторов жилья (будущих владельцев квартир) нового метода организации управления и контроля за проектированием и качественным строительством, команда "KLICHOF GROUP" организует строительства современных и качественных квартир по обоснованным фактическим ценам + <strong>10%</strong> для нуждающихся семей из разных слоёв населения (в соответствии с их реальными семейными доходами) сроком <strong>1,5 - 2 года</strong> со дня получения разрешения на строительство и с экономией средств инвесторов жилья до <strong>50%</strong> от рыночной стоимости аналогичного жилья на местах строительства.</span>
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
                                                            экономия средств и времени
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li><span>Экономия средств (минимум на <strong>5%</strong>, а максимум на <strong>50%</strong> от предлагаемых подрядчиками цен или установляемых сметных текущих цен по Республике Узбекистан) и времени (срок <strong>1,5 - 2 года</strong>  в соответствии с строительными технологиями и требованиями со дня получения разрешения на строительство) для инвесторов при организации любого строительства.</span>
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
                                                            обеспечения качества
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                                <span><strong>Обеспечение гарантированного качества</strong> для инвесторов (в соответствии ПСД, с требованиями и условиями строительных норм и правил и согласованного дизайна) при организации любого строительства.</span>
                                                            </li>
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
                                                            необходимость специалиста
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>
                                                                <span>Команда "KLICHOF GROUP" окажет услуги частного <strong>"Заказчика"</strong>  инвесторам, в первую очередь, как независимый, (от проектировщиков, подрядчиков и поставщиков), профессиональный и надёжный специалист, защитит только экономические интересы и юридические права инвесторов (во всех инстанциях, вплоть до судебных) с самого начала и до конца при организации любого строительства в установленном порядке.</span>
                                                            </li>
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
                                                            <br>избавление от "хождения по мукам"
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li><span>Любое строительство - это взаимодействие с государственными инстанциями и контролирующими организациями, выбор, сопровождение и приемка работ проектировщиков, подрячиков, организация поставки и приёмки материалов, управление и контроль за проектированием, качественным строительством и поставками, которые являются настоящими <strong>"хождением по мукам"</strong> если инвесторы неспециалисты по строительству. Команда "KLICHOF GROUP" полностью избавит от этой проблемы.</span>
                                                            </li>
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
                                                            <br>если у вас проблемный объект
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingSix">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li><span>Если уже есть проблемный объект, "KLICHOF GROUP" как независимая, профессиональная и надёжная команда с грамотным юридическим сопровождением защитит только экономические интересы и юридические права инвесторов (во всех инстанциях, вплоть до судебных споров с проектировщиками в части нарушения норм и правил при проектировании, с подрядчиками в части стоимости, сроков и качества в строительстве, а также с поставщиками в части стоимости, сроков и качества материалов, изделий, конструкций, оборудований) и решит их путем минимизирования основных рисков, связанные с получением непригодного к эксплуатации здания, с удорожанием и срывом сроков любого строительства в целях дальнейшего недопущения <strong>дорогого некачественного долгостроя.</strong></span>
                                                            </li>
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
                                                            <br>исключение обмана
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingFive">
                                                    <div class="panel-body">
                                                        <p>Закономерные различия в целях участников процесса
                                                            строительства или реконструкции между <strong>проектировщиком,
                                                                подрядчиком, поставщиком</strong> (больше прибыли) и
                                                            инвестором или владельцом (максимальная экономия средств и
                                                            времени, обеспечения качества) возможно могут привести (а в
                                                            действительности очень часто приводят) к обману инвесторов
                                                            со стороны недобросовестных проектировщиков, подрядчиков и
                                                            поставщиков:</p>
                                                        <ul>
                                                            <li><span>замене материалов, конструкций, изделий и оборудования, которые заложены в проекты, на более дешёвые</span>
                                                            </li>
                                                            <li><span>упрощение, оптимизация и т.д., утвержденных проектом решения без согласия инвесторов, в результате чего удешевления СМР в пользу подрядчика при паушальной(твёрдой) ценой строительства</span>
                                                            </li>
                                                            <li><span>предъявление к оплате те виды работ, которые в действительности ещё не выполнялись или были оформлены искусственно (путём подлога) в целях досрочного получения финансовых средств</span>
                                                            </li>
                                                            <li><span>выполнение и сдачи некачественных работ, имеющие явные, но в основном скрытые дефекты</span>
                                                            </li>
                                                            <li><span>завышенные стоимости работ путём необоснованного использования самых <strong>"дорогих"</strong>  расценок, накрутков и нормативов</span>
                                                            </li>
                                                            <li><span>нецелевое (не по назначению) использование финансовых средств инвесторов именно во время строительства</span>
                                                            </li>
                                                        </ul>
                                                        <p><strong>Команда "KLICHOF GROUP" гарантированно исключит любой
                                                                обман.</strong></p>
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
    <div id="colorlib-counter" class="colorlib-counters" style="background-image: url({{asset('images/cover_img_1.jpg')}});"
         data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-md-2 col-sm-6 aside-stretch text-center animate-box">
                    <div class="counter-entry exception">
                        <span class="icon icon-white"><i class="flaticon-research-1"></i></span>
                        <span class="colorlib-counter-label">Индивидуальный подход к каждому клиенту</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-leader"></i></span>
                        <span class="colorlib-counter-label">квалифицированные специалисты</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-idea"></i></span>
                        <span class="colorlib-counter-label">Инновационные решения</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-money-2"></i></span>
                        <span class="colorlib-counter-label">Гибкий бюджет</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-startup"></i></span>
                        <span class="colorlib-counter-label">Комплексное ведение проекта</span>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 text-center animate-box">
                    <div class="counter-entry">
                        <span class="icon"><i class="flaticon-contract"></i></span>
                        <span class="colorlib-counter-label">Полная прозрачность</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
