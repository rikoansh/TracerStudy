@extends('_layout/admin')

@section('title','home')


@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Password</h1>
    </div>
    <!--end page header -->
</div>

@if (Session::has('pesan'))
     <div class="alert alert-success">
        <h5>{{ Session::get('pesan') }}</h5>
     </div>

    @elseif (Session::has('error'))
     <div class="alert alert-danger">
        <h5>{{ Session::get('error') }}</h5>
     </div>   
    @else
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
    @endif

<div class="panel panel-info">
                        <div class="panel-heading">
                           Masukan data sesuai form yang tersedia
                        </div>
                        <div class="panel-body">

                    <form action="{{ route('admin::updatesetting') }}" method="post" accept-charset="UTF-8" enctype ="multipart/form-data">
                    <input name="_method" type="hidden" value="PATCH">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Masukan password lama</label>
                            <input type="password" class="form-control" name="password_lama">
                        </div>

                        <div class="form-group">
                            <label>Masukan password baru</label>
                            <input type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label>Masukan lagi password baru</label>
                            <input type="password" class="form-control" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-info">Ubah</button>
                </form>
                </div>
                            </div>
</div>

@stop