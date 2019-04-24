@extends('includes.head')
@section('title', 'Welcome')

@section('content')


 <!-- banner -->
<section class="banner position-relative" id="home" style="background: url(../../images/baner.jpg) no-repeat center">
  <div class="container">
    <div class="banner-text">
      <div class="slider-info">
        <div class="agileinfo-logo mt-lg-5">
          <h2>Bus Anything <br> Around the World</h2>
          <a href="contact.html">Click For More</a>
        </div>
      </div>
    </div>
    <div class="choose text-center position-absolute d-lg-flex">
      <div class="choose-icon">
        <span class="fa fa-bus" aria-hidden="true"></span>
        <div class=" choose-grid">
          <h3 class="mt-4">Bus Travel</h3>
          <p class="">Get Bus for every travel.</p>
        </div>
      </div>
      <div class="choose-icon">
        <span class="fa fa-bus" aria-hidden="true"></span>
        <div class="choose-grid">
          <h3 class="mt-4">Bus Tourism</h3>
          <p class="">Bus for every tourism.</p>
        </div>
      </div>
      <div class="choose-icon">
        <span class="fa fa-bus" aria-hidden="true"></span>
        <div class="choose-grid">
          <h3 class="mt-4">Bus</h3>
          <p class="">Bus for every.</p>
        </div>
      </div>
      <div class="choose-icon mr-0">
        <span class="fa fa-bus" aria-hidden="true"></span>
        <div class="choose-grid">
          <h3 class="mt-4">Bus</h3>
          <p class="">Bus for every.</p>
        </div>
      </div>
      <div class="choose-icon mr-0">
        <span class="fa fa-bus" aria-hidden="true"></span>
        <div class="choose-grid">
          <h3 class="mt-4">Bus</h3>
          <p class="">Bus for every.</p>
        </div>
      </div>
      
      <div class="clearfix"></div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<!-- //banner -->

<!-- about -->
<section class="about py-5" id="how">
  <div class="container py-lg-5">
    <div class="row about-grids">
      <div class="col-lg-6 about-left">
        <img src="{{asset('images/busCover.jpeg')}}" alt="" class="img-fluid"/>
      </div>
      <div class="col-lg-6 grid1 mt-lg-0 mt-4 pl-lg-5">
        <h3 class="my-lg-4 mb-2">Lebih Jauh Tentang Kami</h3>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>
        <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        </p>
      </div>
    </div>
  </div>
</section>
<!-- //about -->

<!-- services -->
<section class="services py-5 bg-clr" id="services">
  <div class="container py-lg-5">
    <div class="row mt-lg-5">
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 mb-md-0 mb-4">
        <h4 class="heading mt-3 ml-3">Kenapa Anda Harus Memilih Jasa Kami</h4>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-icon">
              <span class="fa fa-bus" aria-hidden="true"></span>
            </div>
            <div class="our-services-text">
              <h4>Harga Terbaik</h4>
              <p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-60">
          <div class="services-inner">
            <div class="our-services-icon">
              <span class="fa fa-bus" aria-hidden="true"></span>
            </div>
            <div class="our-services-text">
              <h4>Kualitas Terbaik</h4>
              <p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-md-0 mb-60">
          <div class="services-inner">
            <div class="our-services-icon">
              <span class="fa fa-bus" aria-hidden="true"></span>
            </div>
            <div class="our-services-text">
              <h4>Pelayanan Maksimal</h4>
              <p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper mb-md-0 mb-60">
          <div class="services-inner">
            <div class="our-services-icon">
              <span class="fa fa-bus" aria-hidden="true"></span>
            </div>
            <div class="our-services-text">
              <h4>Partner Terverifikasi</h4>
              <p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
        <div class="our-services-wrapper">
          <div class="services-inner">
            <div class="our-services-icon">
              <span class="fa fa-bus" aria-hidden="true"></span>
            </div>
            <div class="our-services-text">
              <h4>Partner Terpercaya</h4>
              <p>Proin varius pellentesque nunc ut ipsum tincidunt ante. Init id lacus sed semper at tempus vel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //services -->

<!-- stats -->
<section class="stats py-5">
  <div class="container py-lg-5 py-md-3">
    <div class="row stat-grids">
      <div class="col-lg-5">
        <h4 class="heading mb-3">Jumlah Partner Kami</h4>
        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
      <div class="col-lg-6 offset-lg-1 stats-right">
        <div class="row stats-inner-grid">
          <div class="col-sm-6 col-6">
            <h4>950</h4>
            <p>Bis <br>Lokal</p>
          </div>
          <div class="col-sm-6 col-6">
            <h4>250+</h4>
            <p>Bis <br>Interlokal</p>
          </div>
        </div>
        <div class="row stats-inner-grid mt-5">
          <div class="col-sm-6 col-6">
            <h4>350</h4>
            <p>Bis <br>Antar Pulau</p>
          </div>
          <div class="col-sm-6 col-6">
            <h4>100+</h4>
            <p>Bis <br>Pemerintah</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //stats -->

<!-- shipping -->
<section class="shipping py-5">
  <div class="container py-lg-5 py-md-3">
    <div class="row">
      <div class="col-lg-5 p-md-0">
        <img src="{{asset('images/busss.jpg')}}" alt="" class="img-fluid"/>
      </div>
      <div class="col-lg-7 p-0 mt-lg-0 mt-4">
        <div class="shipping-right">
          <h4 class="heading"> Bus terbaik untuk anda mulai dari Rp. 1.000.000/ hari.</h4>
            <p class="mt-3">Integer pulvinar leo id viveerrra feugiat. Pellenttesque libero ut justo, semper at tempus vel, ultrices ipsum ligula. Nullae sollicit udin velit. semper at tempus vel  pulvinar leo id viverra feugiat semper at tempus ultrices ipsum pulvinar.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- //shipping -->

<!--/Blog-Posts-->
<!--//Blog-Posts-->


@endsection




<style type="text/css">
    .header_info .descrip .mengetik{
            font-family: arial;
            font-weight: 700;
            color: gold;
            width: 290px;
            font-size: 18px;
            white-space:nowrap;
            overflow:hidden;
            -webkit-animation: ketik 5s steps(50, end);
            animation: ketik 5s steps(50, end);
    }
    

    @keyframes ketik{
                from { width: 0; }
        }

        @-webkit-keyframes ketik{
                from { width: 0; }
        }
</style>