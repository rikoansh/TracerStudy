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
      <div id="navmain" class="col-md-12 navmain-left collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
          @if(Auth::user()->username)
          <li><a href="{{route('getLogin')}}">Home</a></li>
          <li><a href="#">Form Tarcer Study</a></li>
          <li><a href="berita.html">Berita</a></li>
          <li><a href="{{ route('home::kontak') }}">Kontak</a></li>
          <li><a href="tentang.html">Tentang</a></li>
          <li><a href="{{ route('getLogout')}}">Logout</a></li>
          @else
          <li><a href="{{route('home')}}">Home</a></li>
            @endif
        </ul>
          </div>
        </div>
      </div>