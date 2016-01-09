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
			                    <form role="form" method="POST" action="{{ route('akademik::update_user',$user->nim)}}" accept-charset="UTF-8" enctype ="multipart/form-data">
			                            <input name="_method" type="hidden" value="PATCH">
                      					 {{ csrf_field() }}
                       	                 <div class="form-group">
                                            <label>nim</label>
                                            <input type="text" class="form-control" name="nim" value="{{ ($user->nim) }}">
                                        </div>
                                        <div class="form-group">
                                            <label>nama</label>
                                            <input type="text" class="form-control" name="nama" value="{{ ($user->nama) }}">
                                        </div>
                                        
                                        <div class="form-group">
                                        <label>Jenis Kelamin</label>
	                                        <div class="radio">
											  <label><input @if ($user->gender=="laki") checked="checked" @endif name="gender" type="radio" value="laki" >Laki-laki</label>
											</div>
											<div class="radio">
											  <label><input @if ($user->gender=="perempuan") checked="checked" @endif name="gender" type="radio" value="perempuan">Perempuan</label>
											</div>
										</div>

                                        <div class="form-group">
                                            <label>tanggal lahir</label>
                                            <input type="text" class="form-control" name="lahir" value="{{ ($user->lahir) }}"placeholder="Masukan tanggal lahir">
                                        </div>

                                        <div class="form-group">
                                            <label>Kota/Kabupaten</label>
                                            <input type="text" class="form-control" name="kota" value="{{($user->kota) }}"placeholder="Masukan Kota">
                                        </div>

                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <input type="text" class="form-control" name="provinsi" value="{{ ($user->provinsi) }}"placeholder="Masukan Provinsi">
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat" value="{{ ($user->alamat) }}"placeholder="Masukan Alamat">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Prodi</label>
                                            <input type="text" class="form-control" name="prodi" value="{{ ($user->prodi) }}"placeholder="Masukan prodi">
                                        </div>

                                        <div class="form-group">
                                            <label>Fakultas</label>
                                            <input type="text" class="form-control" name="fakultas" value="{{ ($user->fakultas) }}"placeholder="Masukan fakultas">
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