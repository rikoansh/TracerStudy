@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Komentar</strong></div>
    <div class="panel-body">
        @if (Session::has('message'))
     <div class="alert alert-info">
        <h3>{{ Session::get('message') }}</h3>
     </div>

    @elseif (Session::has('error'))
     <div class="alert alert-info">
        <h3>{{ Session::get('error') }}</h3>
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
<div class="col-md-full">

	<div class="alert alert-info">
	NIM: admin1<br>
	Nama: Dr. Rony Riduan, ST., MT.
	</div>


        <form role="form" method="POST" action="{{ route('home::simpan_saran')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <div class="form-group">
            <label>Masukan saran anda dibawah ini:</label>
            <textarea name="isi" value="{{ old('isi') }}">Masukan saran anda...</textarea>
        </div>
                                  
        <button type="submit" class="btn btn-info">Send Message </button>
		</form>

</div>
    </div>
    </div>
  </div><!-- panel -->

@stop