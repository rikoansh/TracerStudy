@extends('_layout/baseAkademik')

@section('title','tambahberita')


@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah User</h1>
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
                    <form role="form" method="POST" action="{{ route('akademik::simpan_berita')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" name="judul" value="{{ old('judul') }}"placeholder="Enter judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi</label>
                                            <textarea name="isi" value="{{ old('isi') }}">Masukan isi berita</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Penulis</label>
                                            <input type="text" class="form-control" name="penulis" value="{{ old('penulis') }}"placeholder="Masukan penulis">
                                        </div>

                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file"  name="gambar">
                                        </div>

                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Tambah Berita
                                        </button>
                                        </div>
                                </form>
                            </div>
</div>
@stop
