@extends('_layout/baseFakultas')

@section('title','ubah_alumni')


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
                    <form role="form" method="POST" action="{{ route('fakultas::update_alumni',$alumni->nama)}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label>NIM</label>
                                           <input type="text" class="form-control" name="nim" value="{{ ($alumni->nim) }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Nama</label>
                                           <input type="text" class="form-control" name="nama" value="{{ ($alumni->nama) }}">
                                        </div>

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
