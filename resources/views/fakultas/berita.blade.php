@extends('_layout/baseFakultas')

@section('title','berita')

@section('isi')

 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Menu Berita</h1>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i>Simple Table Example
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    Actions
                    <span class="caret"></span>
                </button>
                 <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="{{ route('fakultas::tambah_berita')}}">Tambah Berita</a>
                    </li>
                    <li><a href="#">Action 2</a>
                    </li>
                    <li><a href="#">Action 3</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Action 4</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Gambar</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($berita as $pengguna)
                            <tr class="success">
                                <td>{{ $no++}}</td>
                                <td>{{ $pengguna->judul }}</td>
                                <td>{{ $pengguna->isi }}</td>
                                <td><center><img src="{{ asset($pengguna->gambar) }}" alt="" style="width:200px; height=200px;"/></center></td>
                                <td>{{ $pengguna->slug }}</td>
                                <td style="text-align:center">
                                    <form method="POST" action="{{ route('fakultas::hapus_berita', $pengguna->id) }}" accept-charset="UTF-8" style="margin:0 auto" >
                                        <a href="{{ route('fakultas::ubah_berita',$pengguna->id)}}" class="btn btn-primary">Edit</a> ||

                                        <input name="_method" type="hidden" value="delete">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input id="confirm" class="btn btn-warning" data-toogle="confirmation" 
                                            data-popout="true" type="submit" value="hapus">
                                    </form>
                                </td>
                            </tr>
                            @endforeach</tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.panel-body -->
</div>
@stop
@section('isi')

 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User</h1>
    </div>
</div>

<div class="panel panel-primary">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i>Simple Table Example
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    Actions
                    <span class="caret"></span>
                </button>
                 <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="{{ route('akademik::tambah_berita')}}">Tambah Berita</a>
                    </li>
                    <li><a href="#">Another action</a>
                    </li>
                    <li><a href="#">Something else here</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Isi</th>
                                <th>Gambar</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($berita as $pengguna)
                            <tr class="success">
                                <td>{{ $no++}}</td>
                                <td>{{ $pengguna->judul }}</td>
                                <td>{{ $pengguna->isi }}</td>
                                <td><center><img src="{{ asset($pengguna->gambar) }}" alt="" style="width:200px; height=200px;"/></center></td>
                                <td>{{ $pengguna->slug }}</td>
                                <td style="text-align:center">
                                    <form method="POST" action="{{ route('akademik::hapus_berita', $pengguna->id) }}" accept-charset="UTF-8" style="margin:0 auto" >
                                        <a href="{{ route('akademik::ubah_berita',$pengguna->id)}}" class="btn btn-primary">Edit</a> ||

                                        <input name="_method" type="hidden" value="delete">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input id="confirm" class="btn btn-warning" data-toogle="confirmation" 
                                            data-popout="true" type="submit" value="hapus">
                                    </form>
                                </td>
                            </tr>
                            @endforeach</tbody>
                    </table>
                </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.panel-body -->
</div>
@stop