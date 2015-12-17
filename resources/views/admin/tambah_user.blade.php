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
                    <form role="form" method="POST" action="{{ route('admin::simpan_user')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"placeholder="Enter username">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"placeholder="Masukan email">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Masukan password">
                                        </div>

                                        <div class="form-group">
                                            <label>Pilih Status</label>
                                        </div>

                                        <div class="panel-body lebar">
                                            <div class="panel-group" id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="" aria-expanded="true">Rektorat</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" style="" aria-expanded="true">
                                                        <div class="panel-body lebar">

                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios1" value="option1">Akademik Rektorat
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios2" value="option2">Kabag Rektorat
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios3" value="option3">Wakil Rektorat III
                                                                    </label>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" class="collapsed">Fakultas Teknik</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                                                        <div class="panel-body lebar">

                                                            <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios4" value="option1">Kemahasiswaan Faklutas Teknik
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios5" value="option2">Dekan Fakultas Teknik
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios6" value="option3">Wakil Dekan III Fakultas Teknik
                                                                    </label>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Fakultas Hukum</a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                                        <div class="panel-body lebar">
                                                            
                                                            <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios7" value="option1">Kemahasiswaan Faklutas Hukum
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios8" value="option2">Dekan Fakultas Hukum
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input type="radio" name="status" id="optionsRadios9" value="option3">Wakil Dekan III Fakultas Hukum
                                                                    </label>
                                                                </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Tambah User
                                        </button>
                                        </div>
                                </form>
                            </div>
</div>
@stop