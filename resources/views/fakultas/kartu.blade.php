@extends('_layout/baseFakultas')

@section('title','kartu')


@section('isi')

 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Kartu Alumni</h1>
    </div>
</div>

<div class="panel panel-success">
                        <div class="panel-heading">
                            Menu Kartu Alumni
                        </div>
                        <div class="panel-body">
                            <p>Masukan NIM/Nomor Identitas Alumni untuk melakukan printout Kartu Alumni</p>

                            <div class="alert alert-warning text-center">
                            <div class="form-group input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            </div>
                        </div>
                    </div>
@stop