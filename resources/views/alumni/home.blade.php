@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

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
      <div class="carousel-inner">
        <div class="item active">
          <img src="themes/img/slide1.png" alt="...">
          <div class="carousel-caption">
              <!--h3>Caption Text</h3-->
          </div>
        </div>
        <div class="item">
          <img src="themes/img/slide2.png" alt="...">
        </div>
        <div class="item">
          <img src="themes/img/slide3.png" alt="...">
        </div>
      </div>
    </div> <!-- Carousel -->
    </center>
    </div>

<p>&nbsp;</p>

      <p class="text-justify"><strong class="text-danger">Tracer study</strong> ini dilaksanakan untuk <strong class="text-danger">menjaring informasi/masukan dari alumni</strong> sebagai
      salah satu dasar yang sangat penting bagi  evaluasi dan pengembangan Universitas Lambung Mangkurat, Fakultas dan prodi
      dalam bidang kurikulum, proses pembelajaran, sarana prasarana, dan pelayanan.</p>

      <p class="text-justify"><strong class="text-danger">Data/informasi bersifat rahasia</strong>, sehingga tidak akan dipindah tangankan tanpa seijin yang bersangkutan
      dan semata-mata hanya digunakan untuk pengembangan.</p>

    </div>
  </div><!-- panel -->

@stop