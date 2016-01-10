@extends('_layout/baseFakultas')

@section('title','data maba')

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
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($alumni as $pengguna)
                            <tr class="success">
                                <td>{{ $no++}}</td>
                                <td>{{ $pengguna->nim }}</td>
                                <td>{{ $pengguna->nama }}</td>
                                <td>{{ $pengguna->prodi }}</td>
                                <td style="text-align:center">
                                    <a href="{{ route('fakultas::ubah_alumni',$pengguna->nama)}}" class="btn btn-primary">Edit</a>
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