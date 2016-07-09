<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OnLine</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{ asset('/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="{{ asset('/css/creative.min.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">OnLine</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">О нас</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Услуги</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Прайслист</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">О компании</h1>
                <hr>
                <p>Мы работаем на ИТ-рынке с 2002 года. <br> Компания "Онлайн" производит поставку компьютерной техники, серверов, периферии, сетевого оборудования   и программного обеспечения, а также осуществляет гарантийное, послегарантийное и техническое обслуживание любого офисного оборудования. </p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Узнать больше</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Мы предоставляем IT-услуги высочайшего качества.</h2>
                    <hr class="light">
                    <p class="text-faded">Мы организуем наладку каналов связи, создание структурированных кабельных сетей, монтаж и программирование АТС. <br> Наша компания осуществляет гарантийное, послегарантийное и техническое обслуживание любого офисного оборудования. </p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">К услугам</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Наши услуги</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-wrench text-primary sr-icons"></i>
                        <h3>Обслуживание техники</h3>
                        <p class="text-muted">Профессиональное обслуживание компьютерной техники и периферии.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-laptop text-primary sr-icons"></i>
                        <h3>Удаленное IT-обслуживание</h3>
                        <p class="text-muted">Помощь с техническими проблемами. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-server text-primary sr-icons"></i>
                        <h3>Настройка Linux-серверов</h3>
                        <p class="text-muted">WEB-сервера, Firewall'ы, NAS-сервера и другие. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-phone text-primary sr-icons"></i>
                        <h3>Обслуживание АТС</h3>
                        <p class="text-muted">Настройка и программирование офисных АТС. </p>
                    </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('/img/portfolio/fullsize/1.jpg') }}" class="portfolio-box">
                        <img src="{{ asset('/img/portfolio/thumbnails/1.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('/img/portfolio/fullsize/2.jpg') }}" class="portfolio-box">
                        <img src="{{ asset('/img/portfolio/thumbnails/2.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('/img/portfolio/fullsize/3.jpg') }}" class="portfolio-box">
                        <img src="{{ asset('/img/portfolio/thumbnails/3.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('/img/portfolio/fullsize/4.jpg') }}" class="portfolio-box">
                        <img src="{{ asset('/img/portfolio/thumbnails/4.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('/img/portfolio/fullsize/5.jpg') }}" class="portfolio-box">
                        <img src="{{ asset('/img/portfolio/thumbnails/5.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="{{ asset('/img/portfolio/fullsize/6.jpg') }}" class="portfolio-box">
                        <img src="{{ asset('/img/portfolio/thumbnails/6.jpg') }}" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Наши контакты</h2>
                    <hr class="primary">
                    <p>Сервис по телефону доступен с 8 утра до 5 вечера.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+7(4852)580359 <br> +7(4852)590360</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:info@optinet.ru"></a>info@optinet.ru</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-map-marker fa-3x sr-contact"></i>
                    <p>г. Ярославль, пр. Октября 73, 150054</p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ asset('/vendor/scrollreveal/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

    <!-- Theme JavaScript -->
    <script src="{{ asset('/js/creative.min.js') }}"></script>

</body>

</html>
