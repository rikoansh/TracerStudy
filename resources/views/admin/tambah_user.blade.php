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
                                            <input type="text" class="form-control" name="username" value="{{ old('name') }}"placeholder="Enter username">
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
                                            <label>Password</label>
                                            <input type="password" name="password_again" class="form-control" placeholder="Konfirmasi password">
                                        </div>

                                        <div class="form-group">
                                            <label>Pilih Status </label>
                                            <select name="role" class="form-control">
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->display_name }}</option>
                                            @endforeach
                                            </select>
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