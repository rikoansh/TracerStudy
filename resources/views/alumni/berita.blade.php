@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Berita</strong></div>
    <div class="panel-body">

  <div class="row">
  <main id="main" class="site-main" role="main">
    @foreach($berita as $dberita)	
    <article class="rata">

    <header class="entry-headers col-md-12">
    <div class="entry-meta">    
    </div><!-- .entry-meta -->
                    
    <h1 class="entry-titles">{{ $dberita->judul}}</h1>
    <span class="posted-on">Posted on  {{ $dberita->created_at }} by {{ $dberita->penulis }}</span>
    </header><!-- .entry-header -->
    
    <div class="col-sm-6 post-image">							
    <a href="#"> <img height="150" width="100%" src="{{ asset($dberita->gambar) }}"/></a>
    </div>

    <div class="entry-summary col-sm-6">
    <p>{!! str_limit($dberita->isi, 400) !!}</p>
    <a class="btn  btn-primary" href="{{ route('home::tampil_berita', $dberita->slug) }}"> Read More </a>
    </div><!-- .entry-summary -->

    <div class="clearfix"></div>
    </article><!-- #post-## -->
    @endforeach 
   
</main>

    </div>
  </div>
</div>
</div><!-- panel -->

@stop


