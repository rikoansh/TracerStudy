@extends('_layout/baseFakultas')

@section('title','transfer')


@section('isi')

 <div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Menu Ubah Status ke Alumni</h2>
    </div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i>Menu
    </div>

    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body yellow">
                            <i class="fa fa-bar-chart-o fa-3x"></i>
                            <h3>1200 Mahasiswa</h3>
                        </div>
                        <div class="panel-footerpakai">
                            <button type="button" class="btn btn-outline btn-warning btn-block">Data Mahasiswa</button>
                        </div>
                    </div>

                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>800 Alumni</h3>
                        </div>
                        <div class="panel-footerpakai">
                            <button type="button" class="btn btn-outline btn-info btn-block">Data Alumni</button>
                        </div>
                    </div>

            </div>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.panel-body -->
</div>
@stop