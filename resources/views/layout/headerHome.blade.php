<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('ladun/sigma') }}/assets/css/main.css" id="main_style">
  <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,800" rel="stylesheet">
  <link href="https://cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css" rel="stylesheet">
  <title>Sigma</title>
  <link rel="icon" href="{{ asset('ladun/sigma') }}/assets/img/Logo_32x32.png" type="image/png">
</head>
<body>

<!--Switcher-->
<div class="style-switcher">
  <span class="style-switcher__control"></span>
  <div class="style-switcher__list">
    <a class="style-switcher__link style-switcher__link--red active" href="{{ asset('ladun/sigma') }}/assets/css/red.css"></a>
    <a class="style-switcher__link style-switcher__link--blue" href="{{ asset('ladun/sigma') }}/assets/css/blue.css"></a>
    <a class="style-switcher__link style-switcher__link--violet" href="{{ asset('ladun/sigma') }}/assets/css/violet.css"></a>
    <a class="style-switcher__link style-switcher__link--green" href="{{ asset('ladun/sigma') }}/assets/css/green.css"></a> <br/>
    <a class="style-switcher__link style-switcher__link--red-gradient" href="{{ asset('ladun/sigma') }}/assets/css/red-gradient.css"></a>
    <a class="style-switcher__link style-switcher__link--blue-gradient" href="{{ asset('ladun/sigma') }}/assets/css/blue-gradient.css"></a>
    <a class="style-switcher__link style-switcher__link--violet-gradient" href="{{ asset('ladun/sigma') }}/assets/css/violet-gradient.css"></a>
    <a class="style-switcher__link style-switcher__link--green-gradient" href="{{ asset('ladun/sigma') }}/assets/css/green-gradient.css"></a>
  </div>
</div>
<!--Switcher-->

<!--Main menu-->
<div class="menu">
  <div class="container menu__wrapper">
    <div class="row">
      <div class="menu__logo menu__item">
        <a href="index.html">
          <svg class="menu__logo-img" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
            <path data-name="Sigma symbol" class="svg-element"
                  d="M237.418,8583.56a12.688,12.688,0,0,0,.419-3.37c-0.036-5.24-2.691-9.68-7.024-13.2h-3.878a20.819,20.819,0,0,1,4.478,13.01c0,4.56-2.456,10.2-6.413,11.4a16.779,16.779,0,0,1-2.236.51c-10.005,1.55-14.109-17.54-9.489-23.31,2.569-3.21,6.206-4.08,11.525-4.08h17.935A24.22,24.22,0,0,1,237.418,8583.56Zm-12.145-24.45c-8.571.02-12.338,0.98-16.061,4.84-6.267,6.49-6.462,20.69,4.754,27.72a24.092,24.092,0,1,1,27.3-32.57h-16v0.01Z"
                  transform="translate(-195 -8544)"/>
          </svg>
          <p class="menu__logo-title">Sigma</p>
        </a>
      </div>
      <div class="menu__item d-t-none">
        <nav class="menu__center-nav">
          <ul>
            <li>
              <div class="menu__dropdown">
                <a class="link link--gray menu__dropdown-btn">Home
                  <span><i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="menu__dropdown-content menu__dropdown-content--home">
                  <a class="link link--gray link--gray-active" href="">Mobile App</a>
                  <a class="link link--gray" href="02_messenger.html">Messenger</a>
                  <a class="link link--gray" href="03_webapp.html">Web App</a>
                  <a class="link link--gray" href="04_desktop.html">Desktop App</a>
                </div>
              </div>
            </li>
            <li><a href="05_features.html" class="link link--gray">Features</a></li>
            <li><a href="06_pricing.html" class="link link--gray">Pricing</a></li>
          </ul>
        </nav>
      </div>
      <div class="menu__item">
        <nav class="menu__right-nav d-l-none">
          <ul>
            <li><a href="10_get-app.html" class="site-btn site-btn--accent">Get the Sigma</a></li>
            <li>
              <div class="menu__dropdown d-t-none">
                <a class="link link--gray menu__dropdown-btn">En
                  <span><i class="mdi mdi-chevron-down"></i></span>
                </a>
                <div class="menu__dropdown-content">
                  <a class="link link--gray link--gray-active" href="#">En</a>
                  <a class="link link--gray" href="#">Fr</a>
                  <a class="link link--gray" href="#">Ch</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="d-none d-t-block">
          <button type="button" class="menu__mobile-button">
            <span><i class="mdi mdi-menu" aria-hidden="true"></i></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Main menu-->

<!--Mobile menu-->
<div class="mobile-menu d-none d-t-block">
  <div class="container">
    <div class="mobile-menu__logo">
      <svg class="menu__logo-img" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
        <path data-name="Sigma symbol" class="svg-element"
              d="M237.418,8583.56a12.688,12.688,0,0,0,.419-3.37c-0.036-5.24-2.691-9.68-7.024-13.2h-3.878a20.819,20.819,0,0,1,4.478,13.01c0,4.56-2.456,10.2-6.413,11.4a16.779,16.779,0,0,1-2.236.51c-10.005,1.55-14.109-17.54-9.489-23.31,2.569-3.21,6.206-4.08,11.525-4.08h17.935A24.22,24.22,0,0,1,237.418,8583.56Zm-12.145-24.45c-8.571.02-12.338,0.98-16.061,4.84-6.267,6.49-6.462,20.69,4.754,27.72a24.092,24.092,0,1,1,27.3-32.57h-16v0.01Z"
              transform="translate(-195 -8544)"/>
      </svg>
    </div>
    <button type="button" class="mobile-menu__close">
      <span><i class="mdi mdi-close" aria-hidden="true"></i></span>
    </button>
    <nav class="mobile-menu__wrapper">
      <ul class="mobile-menu__ul">
        <li class="mobile-menu__li mobile-menu__li-collapse"><a class="link link--dark-gray">Home
          <span><i class="mdi mdi-chevron-down"></i></span>
        </a></li>
        <li class="mobile-menu__ul--collapsed">
          <ul class="mobile-menu__ul">
            <li class="mobile-menu__li"><a class="link link--gray link--gray-active" href="">Mobile
              App</a>
            </li>
            <li class="mobile-menu__li"><a class="link link--gray" href="02_messenger.html">Messenger</a></li>
            <li class="mobile-menu__li"><a class="link link--gray" href="03_webapp.html">Web App</a></li>
            <li class="mobile-menu__li"><a class="link link--gray" href="04_desktop.html">Desktop App</a></li>
          </ul>
        </li>
        <li class="mobile-menu__li"><a href="05_features.html" class="link link--dark-gray">Features</a></li>
        <li class="mobile-menu__li"><a href="06_pricing.html" class="link link--dark-gray">Pricing</a></li>
        <li class="mobile-menu__li"><a href="10_get-app.html" class="site-btn site-btn--accent">Get the Sigma</a></li>
        <li class="mobile-menu__li mobile-menu__li-collapse"><a class="link link--dark-gray">En
          <span><i class="mdi mdi-chevron-down"></i></span></a></li>
        <li class="mobile-menu__ul--collapsed">
          <ul class="mobile-menu__ul">
            <li class="mobile-menu__li"><a href="" class="link link--gray link--gray-active">En</a></li>
            <li class="mobile-menu__li"><a href="" class="link link--gray">Fr</a></li>
            <li class="mobile-menu__li"><a href="" class="link link--gray">Ch</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!--Mobile menu-->