@extends('_layout/baseFakultas')

@section('title','transfer data')


@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Transfer Data</h1>
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
			                    <form role="form" method="POST" action="{{ route('fakultas::simpan_data')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
			                            <input type="hidden" name="_token" value="{{ csrf_token() }}">			     
			                             <input type="hidden" name="status" value="Selesai">
			                             <input type="hidden" name="nim" value="{{ $tes->nim }}">
			                             <input type="hidden" name="nama" value="{{ $tes->nama }}">
			                             <input type="hidden" name="lahir" value="{{ $tes->lahir }}">
			                             <input type="hidden" name="gender" value="{{ $tes->gender }}">
			                             <input type="hidden" name="kota" value="{{ $tes->kota }}">
			                             <input type="hidden" name="provinsi" value="{{ $tes->provinsi }}">
			                             <input type="hidden" name="alamat" value="{{ $tes->alamat }}">
			                             <input type="hidden" name="prodi" value="{{ $tes->prodi }}">
			                             <input type="hidden" name="fakultas" value="{{ $tes->fakultas }}">
                                        
                                        <div class="form-group">
			                              <label >NIM</label>
			                                <input class="form-control disabled"  type="text" name="nim" 
			                                 placeholder="{{($tes->nim)}}"disabled>
			                            </div>

                                        <div class="form-group">
                                            <label>nama</label>
                                            <input class="form-control disabled"  type="text" name="nama" 
			                                 placeholder="{{($tes->nama)}}"disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>tanggal lahir</label>
                                            <input class="form-control disabled"  type="text" name="lahir" 
			                                 placeholder="{{($tes->lahir)}}"disabled>
                                        </div>

                                        <div class="form-group">
                                            <label>Kota/Kabupaten</label>
                                           <input class="form-control disabled"  type="text" name="kota" 
			                                 placeholder="{{($tes->kota)}}"disabled>
			                            </div>

                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input class="form-control disabled"  type="text" name="provinsi" 
			                                 placeholder="{{($tes->provinsi)}}"disabled>
			                            </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control disabled"  type="text" name="alamat" 
			                                 placeholder="{{($tes->alamat)}}"disabled>
			                                 </div>
                                        
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input class="form-control disabled"  type="text" name="prodi" 
			                                 placeholder="{{($tes->prodi)}}"disabled></div>

                                        <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Transfer User
                                        </button>
                                        </div>
                                </form>
                            </div>
</div>
@stop