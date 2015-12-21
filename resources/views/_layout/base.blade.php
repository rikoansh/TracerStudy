<!DOCTYPE html>
<html lang="en">
  <head>
    @include('include/head')
  </head>
  
  <body>
    <div class="container">
      <div class="row visible-print">
        <div class="col-md-12">
          <p>
            <strong>Fakultas Teknik</strong>
            <span class="pull-right"><strong>Tracer Study</strong></span>
          </p>
          <p>
            <strong>&nbsp;</strong>
            <span class="pull-right"><strong>&nbsp;</strong></span>
          </p>
          <hr />
        </div>
      </div>
    </div>

    <script type="text/javascript" src="{{ asset('themes/js/jquery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/jquery.countdown.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/bootstrap-3.1.1.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/holder.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/js/dropdowns-enhancement.js')}}"></script>


    <div id="navtop" class="navbar navbar-inverse" role="navigation">
    @include('include/navbar')
    </div><!-- #navtop -->

    <div id="header" class="hidden-print">
      <div class="container">
        <div class="row hidden-xs">
          <div class="col-md-6 header-left">
            <div class="logougm"></div>
            <h2>Tracer Study</h2>
            <h3>Fakultas Teknik</h3>
            <h3>Universitas Lambung Mangkurat</h3>
          </div>
          <div class="col-md-6 header-right hidden-sm">
            &nbsp;
      </div>
    </div>

    <div class="row navmain navbar-inverse">
    @yield('nav')
    </div> <!-- #header -->

    <div id="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4 col-md-push-8">

                


  <div class="panel panel-info">
    @include('include/sidebar2')
  </div><!-- panel -->

  <div class="panel panel-primary">
  @include('include/sidebar3')
  </div>
</div><!-- col-md-4 -->

<div class="col-md-8 col-md-pull-4">
  <div class="panel panel-default">
    <div class="panel-heading"><strong>Selamat datang</strong></div>
    <div class="panel-body">

  <script type="text/javascript">
      $('.carousel').carousel({
          interval: 300
      })
  </script>

  <div class="row">
  <center>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      @yield('slideshow')
    </div> <!-- Carousel -->
    </center>
    </div>

      <p>&nbsp;</p>

      <p class="text-justify"><strong class="text-danger">Tracer study</strong> ini dilaksanakan untuk <strong class="text-danger">menjaring informasi/masukan dari alumni</strong> sebagai
      salah satu dasar yang sangat penting bagi  evaluasi dan pengembangan Fakultas Teknik UNLAM, Fakultas dan prodi
      dalam bidang kurikulum, proses pembelajaran, sarana prasarana, dan pelayanan.</p>

      <p class="text-justify"><strong class="text-danger">Data/informasi bersifat rahasia</strong>, sehingga tidak akan dipindah tangankan tanpa seijin yang bersangkutan
      dan semata-mata hanya digunakan untuk pengembangan.</p>
    </div>
  </div><!-- panel -->
</div><!-- col-md-7 -->
            </div>
        </div>
      </div>
    </div>

    <div id="footer">
      @include('include/footer')
    </div> <!-- #footer -->

<script type="text/javascript">
$(function () {
    $('.checkall').on('click', function () {
        $(this).closest('fieldset').find(':checkbox').prop('checked', this.checked);
    });
});
</script>

  </body>
</html>