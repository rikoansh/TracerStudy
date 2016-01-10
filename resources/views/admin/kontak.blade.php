@extends('_layout/admin')

@section('title','home')


@section('isi')

 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">User</h1>
    </div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i>Simple Table Example
        <div class="pull-right">
            <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                    Actions
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Action</a>
                    </li>
                    <li><a href="#">Action 2</a>
                    </li>
                    <li><a href="#">Action 3</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#">Action 4</a>
                    </li>
                </ul>
            </div>
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
                                <th>Nim</th>
                                <th>Isi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($kontak as $pengguna)
                            <tr class="success">
                                <td>{{ $no++}}</td>
                                <td>{{ $pengguna->nim }}</td>
                                <td>{{ $pengguna->isi }}</td>
                                <td style="text-align:center">
                                    <form method="POST" action="#" accept-charset="UTF-8" style="margin:0 auto" >
                                        <a href="#" class="btn btn-primary">Edit</a> ||
                                        
                                        <input name="_method" type="hidden" value="delete">
                                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                        <input id="confirm" class="btn btn-warning" data-toogle="confirmation" 
                                            data-popout="true" type="submit" value="hapus">
                                    </form>
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