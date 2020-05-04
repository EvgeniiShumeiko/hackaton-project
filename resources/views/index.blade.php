<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Metas -->
  <meta charset="utf-8">
  <title>OnLine Forward - удобное образование</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Css -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
  <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,600,700" rel="stylesheet">
  <link href="css/fonts.css" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
  <!-- Preloader -->
  <div class="loader">
    <!-- Preloader inner -->
    <div class="loader-inner">
      <svg width="120" height="220" viewbox="0 0 100 100" class="loading-spinner" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <circle class="spinner" cx="50" cy="50" r="21" fill="#ffffff" stroke-width="6" />
      </svg>
    </div>
    <!-- End preloader inner -->
  </div>
  <!-- End preloader-->
  <!--Wrapper-->
  <div class="wrapper">
    <!--Header-->
    <header class="header default">
      <div class="header-section">
        <!--Container-->
        <div class="container ">
          <nav class="navbar navbar-expand-lg header-navbar ">
            <a class=" navbar-brand navbar-logo scroll" href="#wrapper">
              <h2 class="logo-light" style="color: #fff">OnLine Forward</h2>
              <h2 class="logo-dark" style="color: #3c424a">OnLine Forward</h2>
              <!-- <img class="mb-0 logo-light" src="img/logo.png" alt="">
              <img class="mb-0 logo-dark" src="assets/svg/logo-dark.svg" alt=""> -->
            </a>
            <button class="navbar-toggler btn-navbar-toggler" type="button" data-toggle="collapse" data-target=".nav-menu" aria-expanded="true" aria-label="Toggle navigation"> <span class="fa fa-bars"></span>
            </button>
            <div class="nav-menu collapse navbar-collapse navbar-collapse justify-content-end py-0 ">
              <ul class=" navbar-nav  header-navbar-nav">
                <li><a class="nav-link scroll" href="/">Главная</a>
                </li>
                <li><a class="nav-link scroll" href="#about">О нас</a>
                </li>
                <li><a class="nav-link scroll" href="#about">Учителям</a>
                </li>
                <li><a class="nav-link scroll" href="#topics">Ученикам</a>
                </li>
                <li><a class="nav-link scroll" href="#speakers">Методистам</a>
                </li>
                </li>
                <li class="mb-4 mb-lg-0"><a class="nav-link scroll" href="#faq">Вопрос/Ответ</a>
                </li>
              </ul>
              <ul class="navbar-nav ">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
            </div>
          </nav>
        </div>
        <!--End container-->
      </div>
    </header>
    <!--End header-->
    <!--Hero section-->
    <section class="gradient-overlay gradient-overlay-blue ">
      <img class="bg-image" style="height: 80%" src="/img/head.jpg" alt="">
      <!--Container-->
      <div class="container">
        <!--Row-->
        <div class="row spacer-lg-bottom spacer-lg-top align-items-center z-index-2 position-relative">
          <div class="col-12">

          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      <!--Container-->
      <div class="container">
        <!--Row-->
        <div class="row z-index-2 position-relative align-items-center">
          <div class="col-sm-8 col-md-6 col-lg-4  offset-lg-0 mb-5 mb-lg-0">
            <div class="media align-items-center">
              <img class="max-width-md mr-3" src="assets/svg/map-icon.svg" alt="">
              <div class="media-body">
                <h2 class="h5 text-white mb-0">По всей России</h2>
                <p class="text-light mb-0">На каждом устройстве</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media align-items-center">
              <img class="max-width-md mr-3" src="assets/svg/speaker-icon.svg" alt="">
              <div class="media-body">
                <h3 class="h5 text-white mb-0">Учителей</h3>
                <p class="text-light mb-0">31415 Учителей с нами</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 text-lg-right"> <a class="scroll btn btn-primary btn-lg mb-5 mb-lg-0" href="#tickets">
              Присоединиться
            </a>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      <div class="curved-decoration splash">
        <svg version="1.1" class="bg-white-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 5492.1021 581.185" enable-background="new 0 0 5492.1021 581.185" xml:space="preserve">
          <path d="M5492.1021,0v581.185H0.0054c-0.0068,0-0.0073-0.01-0.0006-0.0107L5492.1021,0z" />
        </svg>
      </div>
    </section>
    <!--End hero section-->
    <!--About section-->
    <section id="about" class="o-hidden">
      <!--Container-->
      <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row justify-content-between  position-relative align-items-center z-index-2">
          <div class="col-md-6 mb-5 mb-md-0">
            <h1 class="mb-4">Агрегатор всех существующих инструментов образования.</h1>
            <p class="lead">Никакой перегрузки учителей, им не приходится переключаться между разными платформами, платформа собирает выполнение заданий на разных сайтах и разными способами. </p>
            <p class="lead  mb-0">Виртуальный кабинет методиста берет на себя нагрузку подготовки материалов к уроку</p>
          </div>
          <div class="col-md-5"> <span class="d-block  text-uppercase span-style mb-5 ">Наши партнеры</span>
            <ul class="d-flex flex-wrap list-unstyled">
              <li class="mr-4 mb-5 ">
                <img src="/img/rostelecom.png" width="230" alt="">
              </li>
              <li class="mr-4 mb-5 ">
                <img src="/img/zoom.png" alt="">
              </li>
              <li class="mr-4 mb-5 ">
                <img src="img/vk.png" alt="">
              </li>
              <li class="mr-4 mb-5 ">
                <img src="img/whatsapp.png" alt="">
              </li>
            </ul>
          </div>
        </div>
        <!--Row-->
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-6 col-sm-8">
            <div class=" mb-2 pb-5 mt-5 pt-5 mx-auto">
              <hr>
            </div>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      <div class="svg-decoration-container">
        <div class="svg-decoration middle-left " data-jarallax-element="0 20">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 595.5502 940.8977" enable-background="new 0 0 595.5502 940.8977" xml:space="preserve">
            <path fill="#43c370" d="M373.7599,14.944C289.25-19.552,191.88,6.531,144.11,84.32
   C78.6499,190.932,0,345.204,0,471.004c0,70.759,20.99,148.159,49.1899,220.205c69.87,178.526,262.7,263.046,453.814,247.976l0,0
   c82.354-6.49,119.774-119.26,70.407-185.499c-61.899-83.05-110.851-186.085-79.618-282.682c2.777-8.589,5.69-17.008,8.724-25.258
   C557.3939,296.542,520.952,75.021,373.7599,14.944L373.7599,14.944z" />
          </svg>
        </div>
        <div class="svg-decoration bottom-right " data-jarallax-element="0 -50">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1444.184 1029.8875" enable-background="new 0 0 1444.184 1029.8875" xml:space="preserve">
            <path fill="#234dd4" d="M1419.1539,768.5245c-36.38,185.74-219.6129,303.7499-400.1959,247.08
   c-160.16-50.26-349.103-118.27-497.925-197.4c-282.0127-149.95-473.504-497.559-516.634-581.413
   c-5.963-11.593-5.794-25.256,0.083-36.893l0,0c127.433-252.327,523.503-234.246,781.387-118.473
   c38.989,17.504,80.126,30.704,123.295,38.149l0,0c253.097,43.652,579.3799,294.627,530.02,546.67L1419.1539,768.5245z" />
          </svg>
        </div>
      </div>
      <div class="curved-decoration ">
        <svg version="1.1" class="bg-secondary-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2560 221" enable-background="new 0 0 2560 221" xml:space="preserve">
          <polygon points="2560,221 0,221 2560,0 "></polygon>
        </svg>
      </div>
    </section>
    <!--End about section-->
    <!--Topics section-->
    <section id="topics" class="bg-secondary">
      <!--Container-->
      <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row">
          <div class="col">
            <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark  rounded-circle mb-3">
                <img class="icon-title-inner" src="assets/svg/topic-icon.svg" alt="">
              </span>
              <h2 class="h1">Наши решения</h2>
              <p class="w-md-60 mx-auto mb-0 lead">Современные онлайн инструменты позволяют легко адаптироваться к существующим потребностям</p>
            </div>
          </div>
        </div>
        <!--End row-->
        <div class="card-columns-count card-count-3  card-count-2  card-count-1">
          <div class="card rounded mb-3">
            <div class=" card-body p-5  justify-content-between">
              <div class="mb-3">
                <img class="max-width-md " src="assets/svg/dollarsun-icon.svg" alt="">
              </div>
              <h3 class="h5">Кроссплатформенность</h3>
              <p>Наша система поддерживает использование продукта на любой платформе.</p>
            </div>
          </div>
          <div class="card rounded mb-3 ">
            <div class=" card-body p-5  justify-content-between">
              <div class="mb-3">
                <img class="max-width-md " src="assets/svg/idea-icon.svg" alt=" ">
              </div>
              <h3 class="h5">Поддержка</h3>
              <p>Методисты оказывают огромную поддержку учителям, поэтому мы создали кабинет методиста.</p>
            </div>
          </div>
          <div class=" card rounded mb-3 ">
            <div class=" card-body p-5  justify-content-between">
              <div class="mb-3">
                <img class="max-width-md " src="assets/svg/settings-icon.svg" alt=" ">
              </div>
              <h3 class="h5">Все в одном месте</h3>
              <p>Платформа агрегирует большое количество частоиспользуемых решений, которые помогают при онлайн образовании.</p>
            </div>
          </div>

          <div class=" card rounded mb-3 ">
            <div class=" card-body p-5  justify-content-between">
              <div class="mb-3">
                <img class="max-width-md " src="assets/svg/speedometer-icon.svg" alt=" ">
              </div>
              <div>
                <h3 class="h5">Развитие</h3>
                <p class="text-secondary">Мы стараемся развиваться и делать наш продукт еще более удобным.</p>
              </div>
            </div>
          </div>

          <div class=" card rounded mb-3 ">
            <div class="  card-body p-5  justify-content-between">
              <div class="mb-3">
                <img class="max-width-md " src="assets/svg/target-icon.svg" alt=" ">
              </div>
              <h3 class="h5">Интеграция</h3>
              <p>Чат-боты в социальных сетях, мессенджерах с легкостью собирают домашние задания и отправляют их учителю на нашу платформу.</p>
            </div>
          </div>

          <div class="card rounded mb-3 ">
            <div class=" card-body p-5  justify-content-between">
              <div class="mb-3">
                <img class="max-width-md " src="assets/svg/clock-icon.svg" alt=" ">
              </div>
              <h3 class="h5 ">Подробная статистика и отчеты</h3>
              <p>Система позволяет автоматически собирать статистику и на её основе состовлять отчеты.</p>
            </div>
          </div>

        </div>
        <!--Row-->
        <div class="row">
          <div class="col">
            <div class="mt-5 pt-5 text-center"> <a class="btn btn-secondary btn-wide " href="/register">
                Присоединиться
              </a>
            </div>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      
    </section>
    <!--End topics section-->
    <!--Video cover section-->

    <!--End video cover section-->
    <!--Speakers section-->



<!-- 
    <section id="speakers" class="">

      <div class="container spacer-double-sm">

        <div class="row">
          <div class="col">
            <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark rounded-circle  mb-3">
                <img class="icon-title-inner" src="assets/svg/speaker-icon-2.svg" alt="">
              </span>
              <h2 class="h1">Main Speakers</h2>
              <p class="w-md-60 mx-auto mb-0 lead">We are bringing you the perfect combination of content and experience to ignite your heart equip your mind and spark your skill.</p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10 col-lg-11">
            <div class="row">
              <div class="col-sm-6 col-md-4 text-center mb-5">
                <div class="d-flex flex-column align-items-center">
                  <img src="assets/img/p1.jpg" class=" avatar-lg mb-4 rounded-circle" alt="">
                  <h5 class="mb-0">Jeremy Spivak</h5>
                  <span class="mb-3 text-secondary">CEO, Founder</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 text-center mb-5">
                <div class="d-flex flex-column align-items-center">
                  <img src="assets/img/p2.jpg" class=" avatar-lg mb-4 rounded-circle" alt="">
                  <h5 class="mb-0">David Taylor</h5>
                  <span class="mb-3 text-secondary">User Research</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 text-center mb-5">
                <div class="d-flex flex-column align-items-center">
                  <img src="assets/img/p3.jpg" class=" avatar-lg mb-4 rounded-circle" alt="">
                  <h5 class="mb-0">Renee Mu</h5>
                  <span class="mb-3 text-secondary">Content Strategy</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 text-center mb-5 mb-lg-0">
                <div class="d-flex flex-column align-items-center">
                  <img src="assets/img/p4.jpg" class=" avatar-lg mb-4 rounded-circle" alt="">
                  <h5 class="mb-0">Melissa Wagner</h5>
                  <span class="mb-3 text-secondary">UX Metrics</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 text-center mb-5 mb-lg-0">
                <div class="d-flex flex-column align-items-center">
                  <img src="assets/img/p3.jpg" class=" avatar-lg mb-4 rounded-circle" alt="">
                  <h5 class="mb-0">Renee Mu</h5>
                  <span class="mb-3 text-secondary">Visual Design</span>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 text-center ">
                <div class="d-flex flex-column align-items-center">
                  <img src="assets/img/p1.jpg" class=" avatar-lg mb-4 rounded-circle" alt="">
                  <h5 class="mb-0">Jeremy Spivak</h5>
                  <span class="mb-3 text-secondary">User Research</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center mt-5 pt-5">
          <div class="col-auto">
            <div class="alert shadow-lg mb-0 text-center">
              <p class="mb-0">Interested in attending Foxeconf ? <a href="#tickets" class="hover-arrow text-blue scroll">Get a ticket
                  <span class="fa fa-arrow-right"></span></a>
              </p>
            </div>
          </div>
        </div>

      </div>

      <div class="curved-decoration ">
        <svg version="1.1" class="bg-secondary-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2560 221" enable-background="new 0 0 2560 221" xml:space="preserve">
          <polygon points="2560,221 0,221 2560,0 "></polygon>
        </svg>
      </div>
    </section> -->




    <!--End speakers section-->
    <!--Schedule section-->
    <section id="schedule" class="bg-white">
      <!--Conatiner-->
      <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row">
          <div class="col">
            <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark rounded-circle p-2 mb-3">
                <img class="icon-title-inner" src="assets/svg/schedule-icon.svg" alt="">
              </span>
              <h2 class="h1">Удобное расписание уроков</h2>
              <p class="w-md-60 mx-auto mb-0 lead">Мы интегрировали в нашу платформу расписание уроков и сделали его удобным.</p>
            </div>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row justify-content-around text-left">
          <div class="col-lg-12">
            <ul class="nav nav-tabs bg-primary" role="tablist">
              <li> <a class="btn btn-primary  p-4  active show" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">
                  Понедельник <span class="font-weight-400 ml-1 font-size-14 d-none d-md-inline">Май 4, 2020</span>
                </a>
              </li>
              <li> <a class="btn btn-primary  p-4 " data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">
                  Вторник<span class="font-weight-400 ml-1 font-size-14 d-none d-md-inline">Май 5, 2020</span>
                </a>
              </li>
              <li> <a class="btn btn-primary  p-4 " data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">
                  Среда<span class="font-weight-400 ml-1 font-size-14 d-none d-md-inline">Май 6, 2020</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row no-gutters  d-md-flex d-none  pl-4 pr-4 pt-3 pb-3 bg-white">
          <div class="col-xl-7 col-md-5"> <span class="h6 mb-0 text-muted">Урок</span>
          </div>
          <div class="col"> <span class="h6 mb-0 text-muted">Время</span>
          </div>
          <div class="col"> <span class="h6 mb-0 text-muted">Учитель</span>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row justify-content-around text-left">
          <div class="col-md-12 ">
            <div class="tab-content">
              <!--Tab-->
              <div class="tab-pane fade active show" id="tab-one" role="tabpanel">
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class="h5 mb-0"><a href="#">Математика</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">08:00 - 08:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Рутс Наталья</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Русский язык</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">09:00 - 09:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p1.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Низамова Ольга</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">История</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">10:00 - 10:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p2.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Диннер Виктор</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0">Обществознание</h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">11:00 - 11:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Никитин Алексей</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Обеденное время</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">11:40 - 13:00</span>
                  </div>
                  <div class="col-md"> <span class=" mb-0 h5 text-secondary">-</span>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Физика</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">13:00 - 13:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Гладких Андрей</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0">Астрономия</h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">14:00 - 14:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Крутких Олег</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
              </div>
              <!--End tab-->
              <!--Tab-->
              <div class="tab-pane fade" id="tab-two" role="tabpanel">

                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0">Астрономия</h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">08:00 - 08:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Крутких Олег</a></h6>
                      </div>
                    </div>
                  </div>
                </div>


                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Русский язык</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">09:00 - 09:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p1.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Низамова Ольга</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">История</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">10:00 - 10:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p2.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Диннер Виктор</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0">Обществознание</h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">11:00 - 11:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Никитин Алексей</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Обеденное время</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">11:40 - 13:00</span>
                  </div>
                  <div class="col-md"> <span class=" mb-0 h5 text-secondary">-</span>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Физика</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">13:00 - 13:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Гладких Андрей</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class="h5 mb-0"><a href="#">Математика</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">14:00 - 14:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Рутс Наталья</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->

              </div>
              <!--End tab-->
              <!--Tab-->
              <div class="tab-pane fade" id="tab-three" role="tabpanel">
              <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class="h5 mb-0"><a href="#">Математика</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">08:00 - 08:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Рутс Наталья</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Русский язык</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">09:00 - 09:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p1.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Низамова Ольга</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">История</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">10:00 - 10:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p2.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Диннер Виктор</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0">Обществознание</h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">11:00 - 11:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Никитин Алексей</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Обеденное время</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">11:40 - 13:00</span>
                  </div>
                  <div class="col-md"> <span class=" mb-0 h5 text-secondary">-</span>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0"><a href="#">Физика</a></h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">13:00 - 13:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Гладких Андрей</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
                <hr>
                <!--Row-->
                <div class="row no-gutters  d-md-flex  p-4  align-items-center">
                  <div class="col-xl-7 col-md-5">
                    <h5 class=" mb-0">Астрономия</h5>
                  </div>
                  <div class="col-md"> <span class="text-secondary font-size-15">14:00 - 14:40</span>
                  </div>
                  <div class="col-md">
                    <div class="media d-flex align-items-center mt-2 mt-md-0">
                      <img src="assets/img/p4.jpg" class=" rounded-circle avatar-sm mr-3" alt="">
                      <div class="media-body">
                        <h6 class=" mb-0"><a href="#">Крутких Олег</a></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End row-->
              </div>
              <!--End tab-->
            </div>
          </div>
        </div>
        <!--End row-->
      </div>

    </section>
    <!--End schedule section-->

    <!--Tickets section-->

    <!--End tickets section-->
    <!--Registration section-->
    <section class=" jarallax gradient-overlay gradient-overlay-dark">
      <div class="curved-decoration  img-decoration img-decoration-top">
        <svg version="1.1" class="bg-secondary-svg" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2560 221" enable-background="new 0 0 2560 221" xml:space="preserve">
          <polygon points="0,0 2560,0 0,221 " />
        </svg>
      </div>
      <img class="jarallax-img " src="assets/img/1.jpg" alt="">
      <!--Container-->
      <div class="container z-index-2 position-relative spacer-double-md">
        <!--Row-->
        <div class="row justify-content-lg-between align-items-lg-center">
          <div class="col-lg-5 mb-5 mb-lg-0"> <span class="d-block text-white text-uppercase span-style mb-2"></span>
            <h1 class="display-4  text-white mb-0">Регистрируйтесь прямо сейчас</h1>
          </div>
          <div class="col-lg-5">
            <div class="bg-white rounded p-6">
              <form>
                <div class="mb-4">
                  <h2 class="h4">Форма регистрации</h2>
                </div>
                <div class=" mb-3">
                  <div class=" input-group input-group form">
                    <input type="text" class="form-control " name="username" placeholder="Введите имя">
                  </div>
                </div>
                <div class=" mb-3">
                  <div class=" input-group input-group form">
                    <input type="email" class="form-control " name="email" placeholder="Введите E-mail">
                  </div>
                </div>
                <div class="mb-3">
                  <div class="js-focus-state input-group input-group form">
                    <select class="custom-select">
                      <option selected="">Выберите роль</option>
                      <option value="budget">Ученик</option>
                      <option value="budget">Учитель</option>
                      <option value="budget">Методист</option>
                    </select>
                  </div>
                </div>
                <button type="submit" class="btn btn-block btn-light">Отправить</button>
              </form>
            </div>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      <div class="curved-decoration img-decoration img-decoration-bottom ">
        <svg version="1.1" class="bg-secondary-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2560 221" enable-background="new 0 0 2560 221" xml:space="preserve">
          <polygon points="2560,221 0,221 2560,0 "></polygon>
        </svg>
      </div>
    </section>
    <!--End registration section-->
    <!--Venue section-->
    <section id="venue" class="bg-secondary">
      <!--Container-->
      <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row">
          <div class="col">
            <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark rounded-circle mb-3">
                <img class="icon-title-inner" src="assets/svg/hotel-icon.svg" alt="Image Description">
              </span>
              <h2 class="h1">У каждого свой кабинет</h2>
              <p class="w-md-60 mx-auto mb-0 lead">Каждый участник имеет свой собственный электронный кабинет.</p>
            </div>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-sm-6 mb-4 mb-sm-0">
                <h2 class="h5">Кабинет учителя</h2>
                <address class="mb-0">
                  <ul class="list-unstyled text-secondary mb-2 ">
                    <li class="py-1">Учитель смотрит расписание и назначает план урока.</li>
                    <li class="py-1">Проверяет домашнее задание и выставляет оценки. </li>
                    <li class="py-1">Все домашние задания в одном месте.</li>
                  </ul>
                
                </address>
              </div>
              <div class="col-sm-6">
                <img class="img-fluid rounded" src="assets/img/2.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6 ">
            <div class="row">
              <div class="col-sm-6 mb-4 mb-sm-0">
                <h2 class="h5">Кабинет ученика</h2>
                <address class="mb-0">
                  <ul class="list-unstyled text-secondary mb-2">
                    <li class="py-1">Ученик загружает домашнее задание</li>
                    <li class="py-1">Проверяет расписание и пользуется электронными учебниками</li>
                  </ul>
                 
                </address>
              </div>
              <div class="col-sm-6">
                <img class="img-fluid rounded" src="assets/img/5.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row">
          <div class="col">
            <div class="mb-5 pb-4 mt-5 pt-4">
              <hr>
            </div>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-sm-6 mb-4 mb-sm-0">
                <h2 class="h5">Кабинет Методиста</h2>
                <p class="mb-0">Методист загружает материалы для проведения урока.</p>
                <p class="mb-0">Занимается расписание и поиском интерактивных материалов.</p>
              </div>
              <div class="col-sm-6">
                <img class="img-fluid rounded" src="assets/img/3.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-sm-6 mb-4 mb-sm-0">
                <h2 class="h5">Кабинет проведения урока</h2>
                <p class="mb-0">Место встречи преподавателя с учениками.</p>
                <p class="mb-0">Интеграция с видеосервисом ZOOM.</p>
                <p class="mb-0">Поддержкой отпраки выполненного задания во время урока.</p>
              </div>
              <div class="col-sm-6">
                <img class="img-fluid rounded" src="assets/img/4.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      <div class="curved-decoration ">
        <svg version="1.1" class="bg-white-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2560 221" enable-background="new 0 0 2560 221" xml:space="preserve">
          <polygon points="2560,221 0,221 2560,0 "></polygon>
        </svg>
      </div>
    </section>
    <!--End venue section-->
    <!--Gallery section-->
    <section id="gallery" class="">
      <!--Container-->
      <div class="container spacer-double-sm position-relative">
        <div class="svg-decoration-container ">
          <div class="svg-decoration middle-left z-index-2 boundary " data-jarallax-element="50 0">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 618.7321 953.8541" enable-background="new 0 0 618.7321 953.8541" xml:space="preserve">
              <path fill="#43C370" d="M537.1101,778.5433
  c51.8586-99.02,78.9947-189.8956,81.4083-272.6271c1.7134-58.731-6.8779-121.056-25.7739-186.975l0,0
  C536.3835,122.3246,352.033-9.579,147.7484,0.5448L100,2.9109C42.4495,5.763-1.8924,54.7289,0.9596,112.2795
  c1.0715,21.6219,8.8424,42.3749,22.2356,59.3831c89.1792,113.2492,116.0558,219.6618,80.6299,319.2379
  c-20.3856,57.3003-45.0635,108.945-74.0337,154.9342l0,0c-56.9401,90.3902-29.8234,209.825,60.5669,266.765
  c7.9332,4.9974,16.2192,9.4114,24.7926,13.207l0,0C272.6364,995.5298,457.2053,931.1155,537.1101,778.5433L537.1101,778.5433z" />
            </svg>
          </div>
          <div class="svg-decoration bottom-right boundary z-index-2 " data-jarallax-element="-50 0">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 645.0645 726.0726" enable-background="new 0 0 645.0645 726.0726" xml:space="preserve">
              <path fill="none" stroke="#234DD4" stroke-width="35" stroke-miterlimit="10" d="
  M173.2631,110.4345c-50.5356,54.1457-83.8452,107.4337-99.9288,159.864c-11.4178,37.2202-16.8839,78.5479-16.3984,123.9829l0,0
  c1.4481,135.519,96.0394,252.1913,228.3301,281.6306l30.9209,6.881c37.2686,8.2935,74.204-15.1954,82.4975-52.4639
  c3.1159-14.0019,1.7991-28.6263-3.7679-41.8464c-37.0681-88.0264-35.5347-160.7343,4.6003-218.1236
  c23.0954-33.0243,47.9389-61.6809,74.5306-85.9698l0,0c52.2652-47.7392,55.9341-128.8087,8.1949-181.0738
  c-4.1899-4.5871-8.7077-8.8635-13.5178-12.7954l0,0C380.3669,18.2949,251.1294,27.0056,173.2631,110.4345L173.2631,110.4345z" />
            </svg>
          </div>
        </div>
        <!--Row-->
        <div class="row align-items-center justify-content-between z-index-2 position-relative">
          <div class="col-12 col-md-6 mb-5 mb-md-0">
            <div class="row">
              <div class="col-6 mr-n mt-5">
                <a href="assets/img/gallery/2.jpg" class="popup-image">
                  <img src="assets/img/gallery/2.jpg" class="img-fluid mb-3 rounded " alt="">
                </a>
                <a href="assets/img/gallery/4.jpg" class="popup-image">
                  <img src="assets/img/gallery/4.jpg" class="img-fluid rounded " alt="">
                </a>
              </div>
              <div class="col-6 ">
                <a href="assets/img/gallery/1.jpg" class="popup-image">
                  <img src="assets/img/gallery/1.jpg" class="img-fluid mb-3 rounded " alt="">
                </a>
                <a href="assets/img/gallery/3.jpg" class="popup-image">
                  <img src="assets/img/gallery/3.jpg" class="img-fluid rounded " alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-5 ">
            <h2 class="h1">
              Онлайн мероприятия
            </h2>
            <p class="lead">Мы стараемся сделать наш продукт интересным, поэтому иногда устраиваем интересные мероприятия.</p>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End container-->
      <div class="curved-decoration ">
        <svg version="1.1" class="bg-secondary-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 2560 221" enable-background="new 0 0 2560 221" xml:space="preserve">
          <polygon points="2560,221 0,221 2560,0 "></polygon>
        </svg>
      </div>
    </section>
    <!--End gallery section-->
    <!--Faq section-->
    <section id="faq" class="bg-secondary">
      <!--Container-->
      <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row">
          <div class="col">
            <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark rounded-circle mb-3">
                <img class="icon-title-inner" src="assets/svg/faq-icon.svg" alt="">
              </span>
              <h2 class="h1">Часто задаваемые вопросы </h2>
              <p class="w-md-60 mx-auto mb-0 lead"></p>
            </div>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="faq-accordion">
              <div class="card card-collapse mb-3 ">
                <div class="card-header accordion-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block d-flex justify-content-between accordion-collapse-btn collapsed" data-toggle="collapse" data-target="#faq-accordion-1" aria-expanded="false" aria-controls="faq-accordion-1">
                      Как мне начать с вами сотрудничать ?
                      <span class="accordion-arrow">
                        <span class="fa fa-angle-down accordion-arrow-inner"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="faq-accordion-1" class="collapse" data-parent="#faq-accordion">
                  <div class="card-body accordion-body">Вам необходимо зарегистрироваться на нашей платформе и выбрать роль учителя, методиста или ученика.</div>
                </div>
              </div>
              <div class="card card-collapse mb-3">
                <div class="card-header accordion-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block d-flex justify-content-between accordion-collapse-btn collapsed" data-toggle="collapse" data-target="#faq-accordion-2" aria-expanded="false" aria-controls="faq-accordion-2">
                      Можно ли стать вашим партнером ?
                      <span class="accordion-arrow">
                        <span class="fa fa-angle-down accordion-arrow-inner"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="faq-accordion-2" class="collapse" data-parent="#faq-accordion">
                  <div class="card-body accordion-body">Да, необходимо связаться с администрацией и обсудить детали сотрудничества.</div>
                </div>
              </div>
              <div class="card card-collapse mb-3 ">
                <div class="card-header accordion-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block d-flex justify-content-between accordion-collapse-btn collapsed" data-toggle="collapse" data-target="#faq-accordion-3" aria-expanded="false" aria-controls="faq-accordion-3">
                      Каким методом можно отправлять домашнее задание ?
                      <span class="accordion-arrow">
                        <span class="fa fa-angle-down accordion-arrow-inner"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="faq-accordion-3" class="collapse" data-parent="#faq-accordion">
                  <div class="card-body accordion-body">Отправлять домашнее задание можно любым удобным для вас способом, нужно всего лишь отсканировать QR-код и выбрать привычный Вам мессенджер или социальную сеть.</div>
                </div>
              </div>
              <div class="card card-collapse mb-3">
                <div class="card-header accordion-header">
                  <h5 class="mb-0">
                    <button class="btn btn-link btn-block d-flex justify-content-between accordion-collapse-btn collapsed" data-toggle="collapse" data-target="#faq-accordion-4" aria-expanded="false" aria-controls="faq-accordion-4">
                      Могу ли я выставлять оценки на вашей платформе ?
                      <span class="accordion-arrow">
                        <span class="fa fa-angle-down accordion-arrow-inner"></span>
                      </span>
                    </button>
                  </h5>
                </div>
                <div id="faq-accordion-4" class="collapse" data-parent="#faq-accordion">
                  <div class="card-body accordion-body">Да, мы постарались интегрировали множество электронных журналов.</div>
                </div>
              </div>
            </div>
            <div class="w-75 mx-auto mt-4 text-center">
              <p class="mb-0">Как мы можем связаться с вами <a href="#" class="hover-arrow text-blue">Через форму обратной связи
                  <span class="fa fa-arrow-right"></span></a>
              </p>
            </div>
          </div>
        </div>
        <!--End row-->
      </div>
    </section>
    <!--End faq section-->
    <!--Newsletter section-->
    <section class="bg-primary-3 newsletter">
      <!--Container-->
      <div class="container z-index-2 position-relative ">
        <!--Row-->
        <div class="row justify-content-center align-items-lg-center">
          <div class="col-lg-10">
            <div class="bg-white shadow-lg rounded p-lg position-relative mt-n text-center o-hidden">
              <div class="bg-decoration-container">
                <div class="bg-decoration" data-jarallax-element="150 0">
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 749.2 848.7" enable-background="new 0 0 749.2 848.7;" xml:space="preserve">
                    <path fill="#F5F8FB" d="M184.3,0.4C93.2,6.1,16.9,72,7.8,162.8C-4.8,287.3-8.4,460.4,46.3,573.6c30.8,63.7,83.4,124.3,140.1,176.9
  C327,880.8,537.4,873,702.9,776.3l0,0c71.4-41.7,56-159.5-17.3-197.7c-91.8-47.8-180.8-119.3-194.7-219.9c-1.2-9-2.3-17.8-3.2-26.6
  C472.3,174,343-9.5,184.3,0.4L184.3,0.4z" />
                  </svg>
                </div>
              </div>
              <div class="z-index-2 position-relative">
                <h2 class="mb-5 h1">Подписаться на наши обновления</h2>
                <form>
                  <div class="form-row">
                    <div class="col-sm-8 ">
                      <div class=" input-group form mb-3 mb-lg-0">
                        <input class="form-control" name="email" placeholder="Email" type="email">
                      </div>
                    </div>
                    <div class="col-sm-4 mb-lg-0 mb-2">
                      <button type="submit" class="btn btn-block btn-primary">Подписаться</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!--End row-->
      </div>
      <!--End conatiner-->
    </section>
    <!--End newsletter section-->
    <!--Footer-->
    <footer class="bg-primary-3">
      <!--Container-->
      <div class="container spacer-double-md">
        <!--Row-->
        <div class="row mb-5">
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="media">
              <img class="max-width-sm  mr-3" src="assets/svg/contact-icon.svg" alt="">
              <div class="media-body">
                <h4 class="text-white h6 mb-0">Позвоните нам</h4>
                <span class="d-block text-light font-size-15">(952) 733-69-89 </span>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="media">
              <img class="max-width-sm  mr-3" src="assets/svg/email-icon.svg" alt="">
              <div class="media-body">
                <h4 class="text-white h6 mb-0">Email us</h4>
                <span class="d-block text-light font-size-15">menager@forward-web.ru</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-md-0">
            <div class="media">
              <img class="max-width-sm  mr-3" src="assets/svg/location-icon.svg" alt="">
              <div class="media-body">
                <h4 class="text-white h6 mb-0">Адрес</h4>
                <span class="d-block text-light font-size-15">Россия, г. Москва, ул. Строителей, д. 12 </span>
              </div>
            </div>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row justify-content-center ">
          <div class="col-auto">
            <ul class="list-inline mb-2 mt-3">
              <li class="list-inline-item "><a class="social-icon" href="https://vk.com/forwardonline"><span class="fab fa-vk"></span></a>
              </li>
              <li class="list-inline-item "><a class="social-icon " href="#"><span class="fab fa-google"></span></a>
              </li>
              <li class="list-inline-item "><a class="social-icon " href="#"><span class="fab fa-instagramm"></span></a>
              </li>
            </ul>
          </div>
        </div>
        <!--End row-->
        <!--Row-->
        <div class="row justify-content-center ">
          <div class="col-auto">
            <p class="font-size-14 text-muted text-center mb-3">&copy; 2020 все права защищены - OnLine Forward.
          </div>
        </div>
        <!--End row-->
        <!--Row-->

        <!--End row-->
      </div>
      <!--End containers-->
    </footer>
    <!--End footer section-->
    <!--To the top--> <a class="scroll-to-top scroll rounded-circle" href="#wrapper"><span class=" fas fa-arrow-up top-icon "></span></a>
    <!-- End to the top -->
  </div>
  <!-- End wrapper-->
  <!--Javascript-->
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/smooth-scroll.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/placeholders.min.js"></script>
  <script src="js/jarallax.min.js"></script>
  <script src="js/jarallax-element.min.js"></script>
  <script src="js/script.js"></script>
  <!-- Google analytics -->
  <!-- End google analytics -->
</body>

</html>