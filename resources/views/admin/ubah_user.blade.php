@extends('_layout/admin')

@section('title','home')


@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Edit User</h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit User
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

                        <form class="form-horizontal" method="POST" action="{{ route('admin::update_user',$user->name)}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Username:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" value="{{ ($user->username) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" name="email" value="{{ ($user->email) }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Old Password:</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">New Password:</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="newpassword" >
                                </div>
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
            </div>
        </div>
    </div>
</div>
@stop