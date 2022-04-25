@include('layout.headerHome')

<!--Header-->
<header class="header-home">
  <div class="container background background--right background--header background--mobile"
       style="background-image: url('{{ asset('ladun/sigma') }}/assets/img/img_background.png');">
    <div class="row">
      <div class="col-12">
        <h3 class="header-home__title">Sistem presensi terbaik</h3>
        <p class="header-home__description">Dengan AR-Presensi, jadikan pengelolaan presensi di instansi/perusahaan/kampus, menjadi
            transparan, cepat, serta mudah dalam hal manajemen.</p>
        <div class="header-home__btns header-home__btns-mobile">
          <a href="{{ url('apps/presensi') }}" class="site-btn site-btn--accent header-home__btn">Mulai Presensi</a>
          <a href="{{ url('auth/login') }}" class="site-btn site-btn--light header-home__btn">Login</a>
        </div>
      </div>
    </div>
  </div>
</header>
<!--Header-->

@include('layout.footerHome')
