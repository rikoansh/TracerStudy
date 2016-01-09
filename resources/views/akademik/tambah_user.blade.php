@extends('_layout/baseAkademik')

@section('title','tambah_user')


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
			                    <form role="form" method="POST" action="{{ route('akademik::simpan_user')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
			                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="status" value="belum">
                                        <div class="form-group">
                                            <label>nim</label>
                                            <input type="text" class="form-control" name="nim" value="{{ old('nim') }}"placeholder="Enter nim">
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}"placeholder="Masukan nama">
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Jenis Kelamin</label>
	                                        <div class="radio">
											  <label><input checked="checked" name="gender" type="radio" value="laki" >Laki-laki</label>
											</div>
											<div class="radio">
											  <label><input type="radio" name="gender" type="radio" value="perempuan">Perempuan</label>
											</div>
										</div>

                                        <div class="form-group">
                                            <label>tanggal lahir</label>
                                            <input type="text" class="form-control" name="lahir" value="{{ old('lahir') }}"placeholder="Masukan tanggal lahir">
                                        </div>

                                        <div class="form-group">
                                            <label>Kota/Kabupaten</label>
                                            <input type="text" class="form-control" name="kota" value="{{ old('kota') }}"placeholder="Masukan Kota">
                                        </div>

                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi') }}"placeholder="Masukan Provinsi">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}"placeholder="Masukan Alamat">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input type="text" class="form-control" name="prodi" value="{{ old('prodi') }}"placeholder="Masukan prodi">
                                        </div>

                                        <div class="form-group">
                                            <label>Fakultas</label>
                                            <input type="text" class="form-control" name="fakultas" value="{{ old('fakultas') }}"placeholder="Masukan fakultas">
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