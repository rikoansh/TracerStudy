@extends('_layout/baseFakultas')

@section('title','saran')

@section('isi')

 <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Menu Berita</h1>
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
                                <th>ninm</th>
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
                                    <form method="POST" action="{{ route('fakultas::hapus_saran', $pengguna->id) }}" accept-charset="UTF-8" style="margin:0 auto" >
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