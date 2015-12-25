@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Setting Profile</strong></div>
    <div class="panel-body">

<div class="col-md-full">

	<div class="alert alert-info">
	NIM: admin1<br>
	Nama: Dr. Rony Riduan, ST., MT.
	</div>


        <form role="form">
                                        <div class="form-group">
                                            <label>Masukan password lama</label>
                                            <input class="form-control" type="password">
                                        </div>

                                        <div class="form-group">
                                            <label>Masukan password baru</label>
                                            <input class="form-control" type="password">
                                        </div>

                                        <div class="form-group">
                                            <label>Masukan lagi password baru</label>
                                            <input class="form-control" type="password">
                                        </div>
                                  
        <button type="submit" class="btn btn-info">Send Message </button>
		</form>

</div>
    </div>
    </div>
  </div><!-- panel -->

@stop