@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Berita</strong></div>
    <div class="panel-body">

  <div class="row">
  <main id="main" class="site-main" role="main">
	
    <article>
    
    <header class="entry-headers col-md-12">
    <div class="entry-meta">    
    </div><!-- .entry-meta -->
                    
    <h1 class="entry-titles">{{ $berita->judul}}</h1>
    <span class="posted-on">Posted on  {{ $berita->created_at }} by {{ $berita->penulis }}</span>
    </header><!-- .entry-header -->
    
    <div class="col-sm-6 post-image">							
    <a href="#"> <img class="img-responsive" src="{{ asset($berita->gambar) }}"/></a>
    </div>
    <div class="clearfix"></div> <br>
    <div class="entry-summary col-sm-6">
    <p>{{$berita->isi}}</p>
    </div><!-- .entry-summary -->
    <div class="clearfix"></div> <br>

	<a  class="btn btn-primary" href="{{ route('home::beritaAlumni')}}">Back</a>
    </article><!-- #post-## -->
    
   
</main>

    </div>
  </div>
</div>
</div><!-- panel -->

@stop


