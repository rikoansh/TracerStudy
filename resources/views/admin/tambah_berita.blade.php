@extends('_layout/admin')

@section('title','home')

@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah User</h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Form Elements
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
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

                        <form class="form-horizontal" method="POST" action="{{ route('simpan_user')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="control-label col-sm-2" >Judul:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="judul" value="{{ old('judul') }}"placeholder="Enter username">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" >isi:</label>
                                <div class="col-sm-10">
                                  <input type="textarea" rows="4" cols="50" class="form-control" name="isi" value="{{ old('isi') }}"placeholder="Enter Isi">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah Berita
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop