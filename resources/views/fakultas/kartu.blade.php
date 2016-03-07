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
                           <!-- <form action="{{ route('fakultas::searchkartu')}}" method="POST" accept-charset="UTF-8" enctype ="multipart/form-data"  class="navbar-form navbar-right">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                            <label>Masukkan NIM</label>
                                            <input type="text" class="form-control" name="nim" value="{{ old('nim') }}"placeholder="Enter nim">
                                        </div>
                            </form>-->
                            <form class="navbar-form navbar-right" role="search" action="{{ route('fakultas::searchkartu')}}">
                              <div class="form-group">
                                  <input type="text" name="cari" class="form-control" placeholder="Search">
                              </div>
                                  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
                            </form>

                        </div>
                    </div>

                   
@stop