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
                    <form role="form" method="POST" action="{{ route('admin::update_user',$user->username)}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                                        
                                        <div class="form-group">
                                            <label>Username</label>
                                           <input type="text" class="form-control" name="username" value="{{ ($user->username) }}">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" value="{{ ($user->email) }}">
                                        </div>
                                      
                                        <div class="form-group">
                                            <label> <h4>Role</h4> </label>
                                            <select name="role" class="form-control">
                                            <option value="{{ $role_user->name }}">{{ $role_user->display_name }}</option>
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->display_name }}</option>
                                            @endforeach
                                            </select>
                                         </div>

                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Edit User
                                                </button>
                                            </div>
                                        </div>
                                </form>
                            </div>
</div>
@stop
