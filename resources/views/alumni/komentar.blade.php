@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Komentar</strong></div>
    <div class="panel-body">

<div class="col-md-full">

	<div class="alert alert-info">
	NIM: admin1<br>
	Nama: Dr. Rony Riduan, ST., MT.
	</div>


        <form role="form">
        <div class="form-group">
        <label>Masukan koemntar anda dibawah ini:</label>
        <textarea class="form-control" rows="3"></textarea>
        </div>
                                  
        <button type="submit" class="btn btn-info">Send Message </button>
		</form>

</div>
    </div>
    </div>
  </div><!-- panel -->

@stop