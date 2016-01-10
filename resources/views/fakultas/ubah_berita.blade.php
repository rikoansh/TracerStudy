@extends('_layout/baseFakultas')

@section('title','ubah_berita')


@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Berita</h1>
    </div>
    <!--end page header -->
</div>

<div class="panel panel-info">
                        <div class="panel-heading">
                           Masukan data sesuai form yang tersedia
                        </div>
                        <div class="panel-body">

                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Sepertinya ada kesalahan.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                    <form role="form" method="POST" action="{{ route('fakultas::update_berita',$berita->id)}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label>Judul</label>
                                           <input type="text" class="form-control" name="judul" value="{{ ($berita->judul) }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Isi</label>
                                            <textarea name="isi" value="{{ old('isi') }}">Masukan isi berita</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input type="text" class="form-control" name="penulis" value="{{ ($berita->penulis) }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="text" class="form-control" name="penulis" value="{{ ($berita->penulis) }}">
                                        </div>

                                         @if($berita->gambar)
                                        <img src="{{ asset($berita->gambar) }}" style="width:300px; height:200px">
                                        @else
                                        <h4>Tidak ada Gambar!</h4>
                                        @endif
                                        <hr>
                                        <input type="file" name="gambar">
                                        <br>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Edit Berita
                                                </button>
                                            </div>
                                        </div>
                                </form>
                            </div>
</div>
@stop
