@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

  <div class="panel panel-default">
    <div class="panel-heading"><strong>Form Tracer Study</strong></div>
    <div class="panel-body">

<!--BATAS KUISIONER-->

<div class="row">
        <div class="col-md-full">

            <div class="alert alert-info">
            NIM: H1G110218<br>
            Nama: Ryan Maulana
            </div>

            
            <form role="form" action="http://localhost/praproposal/daftar" method="POST" enctype="multipart/form-data">
                
            <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="" aria-expanded="true">A. KARAKTERISTIK SOSIO­BIOGRAFI, PENDIDIKAN DAN PEKERJAAN SEBELUM KULIAH</a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" style="" aria-expanded="true">
                    <div class="panel-body">
                        
<!--A1-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A1 Tempat Tanggal Lahir</strong></div>
                    	
                    	<input name="a1" class="form-control" type="text" placeholder="05/12/1994">
                    	<p class="help-block">Mis : Banjarmasin, 02/06/1990</p>
                		</div>

<!--A2-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A2 Jenis Kelamin</strong></div>
                            <div class="radio">
                                <label>
                                    <input name="a2" type="radio" id="optionsRadios1" value="option1" checked="">Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input name="a2" type="radio" id="optionsRadios2" value="option2">Perempuan
                                </label>
                            </div>
                        </div>

<!--A3-->	             <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A3. Status Pernikahan</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a3" id="optionsRadios1" value="option1" checked="">Menikah
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a3" id="optionsRadios2" value="option2">Bercerai
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a3" id="optionsRadios2" value="option2">Lajang/Tidak Menikah
                                </label>
                            </div>
                        </div>

<!--A4-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A4 Jenis Sekolah Lanjutan Tingkat Atas (SLTA)?</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a4" id="optionsRadios1" value="option1" checked="">Negeri
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a4" id="optionsRadios2" value="option2">Swasta
                                </label>
                            </div>
                        </div>

<!--A5-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A5. Apa nama SLTA Anda?</strong></div>
                    	
                    	<input name="a5" class="form-control" type="text" placeholder="SMA Negeri 11 Banjarmasin">
                    	<p class="help-block">Mis : SMA Negeri 11 Banjarmasin</p>
                		</div>

<!--A6-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A6 Dimana Lokasi SLTA Anda?</strong></div>
                    	
                    	<div class="input-group">
					      <span class="form-group input-group-btn">
					        <label class="label-pakai">Negara</label>
					      </span>
					      <input name="a6a" type="text" class="form-control" placeholder="Indonesia">
					    </div>
                    	<div class="input-group">
					      <span class="form-group input-group-btn">
					        <label class="label-pakai">Kota/Kabupaten</label>
					      </span>
					      <input name="a6b" type="text" class="form-control" placeholder="Banjarmasin">
					    </div>
                		<div class="input-group">
					      <span class="form-group input-group-btn">
					        <label class="label-pakai">Provinsi</label>
					      </span>
					      <input name="a6c" type="text" class="form-control" placeholder="Kalimantan Selatan">
					    </div>
						</div>

<!--A7-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A7 Jurusan yang Anda ambil pada saat di SLTA?</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a7" id="optionsRadios1" value="option1" checked="">IPA
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a7" id="optionsRadios2" value="option2">IPS
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a7" id="optionsRadios2" value="option2">SMK
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a7" id="optionsRadios2" value="option2">Madrasah Aliyah
                                </label>
                            </div>
                        </div>

<!--A8-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A8 Tahun Anda Lulus</strong></div>
                    	
                    	<input name="a8" class="form-control" type="text" placeholder="2017">
                		</div>

<!--A9-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A9 Kebangsaan</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a9" id="optionsRadios1" value="option1" checked="">WNI
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="a9" id="optionsRadios2" value="option2">WNA
                                </label>
                            </div>
                        </div>

<!--A10-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A10 Apakah Anda bekerja sebelum kuliah di universitas</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="has_submenu" name="has_child" value="1">Ya
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="no_submenu" name="has_child" value="0">Tidak
                                </label>
                            </div>
                        </div>

<!--JQUERY PA ALKAF TAMPIL-->	<div id="singlemenu">
							    {{ csrf_field() }}
							    <input type="hidden" name="has_child" value="1">
							  	<div class="tab-content">
							    <div id="id1" class="tab-pane fade in active">

<!--A11-->				<div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A11 Jika ya, apa jenis pekerjaannya?</strong></div>
                        <label>Pekerjaan yang berhubungan dengan pendidikan</label>
                        <input name="a11a" class="form-control" type="text" placeholder="Guru les">
                        <p class="help-block">Mis : asisten laboratorium, mekanik, guru les, dll</p>
                        </div>
                        <label>Pekerjaan yang tidak berhubungan dengan pendidikan</label>
                        <input name="a11b" class="form-control" type="text" placeholder="Pramugari">
                        <p class="help-block">Mis : SPG, pramugari, model, artis, dll</p>
                        </div>

<!--A12-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A12 Berapa bulan Anda melakukan pekerjaan tersebut?</strong></div>
                    	<div class="input-group">
					      <input name="a12" class="form-control" type="text" placeholder="12">
					        <span class="form-group input-group-btn">
					        <label class="label-pakai-kiri">bulan</label>
					      </span>
					    </div>
                		</div>

												</div>
<!--BATAS JQUERY PA ALKAF TAMPIL-->		        </div>

<!--A13-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A13 Berapa bulan Anda habiskan untuk aktivitas di bawah ini setelah lulus SLTA dan sebelum masuk universitas</strong></div>
                    	<div class="input-group">
					      <input name="a13a" class="form-control" type="text" placeholder="12">
					        <span class="form-group input-group-btn">
					        <label class="label-pakai-kiri">bulan</label>
					      </span>
					    </div>
					    <p class="help-block">Pendidikan lain/training/magang/bimbingan belajar</p>
					    <div class="input-group">
					      <input name="a13b" class="form-control" type="text" placeholder="12">
					        <span class="form-group input-group-btn">
					        <label class="label-pakai-kiri">bulan</label>
					      </span>
					    </div>
					    <p class="help-block">Bekerja/wiraswasta</p>
                		<div class="input-group">
					      <input name="a13c" class="form-control" type="text" placeholder="12">
					        <span class="form-group input-group-btn">
					        <label class="label-pakai-kiri">bulan</label>
					      </span>
					    </div>
					    <p class="help-block">Mengurus keluarga</p>
                		<div class="input-group">
					      <input name="a13d" class="form-control" type="text" placeholder="12">
					        <span class="form-group input-group-btn">
					        <label class="label-pakai-kiri">bulan</label>
					      </span>
					    </div>
					    <p class="help-block">Wajib militer</p>
					    <div class="input-group">
					      <input name="a13e" class="form-control" type="text" placeholder="12">
					        <span class="form-group input-group-btn">
					        <label class="label-pakai-kiri">bulan</label>
					      </span>
					    </div>
					    <p class="help-block">Tidak bekerja, mencari pekerjaan</p>
                		</div>

<!--A1-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>A14 Apa latar belakang terakhir pendidikan orang tua Anda?</strong></div>
                    	<div class="input-group">
					      <span class="form-group input-group-btn">
					      <label class="label-pakai">Ayah</label>
					      </span>
					      <select name="mk1" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="A">Tidak sekolah</option>
                            <option value="B+">Tidak lulus SD</option>
                            <option value="B">Lulus SD</option>
                            <option value="C+">Tidak Lulus SLTA</option>
                            <option value="C">Lulus SLTA</option>
                            <option value="D+">Tidak lulus diploma</option>
                            <option value="D">Tidak Lulus Sarjana (S1)</option>
                            <option value="D">Lulus Sarjana (S1)</option>
                            <option value="D">Tidak Lulus (S2)</option>
                            <option value="D">Lulus (S2)</option>
                            <option value="D">Tidak Lulus (S3) </option>
                            <option value="D">Lulus (S3)</option>
                        </select>
					    </div>
					    <div class="input-group">
					      <span class="form-group input-group-btn">
					      <label class="label-pakai">Ibu</label>
					      </span>
					      <select name="mk1" class="form-control">
                            <option value="">--Pilih--</option>
                            <option value="A">Tidak sekolah</option>
                            <option value="B+">Tidak lulus SD</option>
                            <option value="B">Lulus SD</option>
                            <option value="C+">Tidak Lulus SLTA</option>
                            <option value="C">Lulus SLTA</option>
                            <option value="D+">Tidak lulus diploma</option>
                            <option value="D">Tidak Lulus Sarjana (S1)</option>
                            <option value="D">Lulus Sarjana (S1)</option>
                            <option value="D">Tidak Lulus (S2)</option>
                            <option value="D">Lulus (S2)</option>
                            <option value="D">Tidak Lulus (S3) </option>
                            <option value="D">Lulus (S3)</option>
                        </select>
					    </div>
                		</div>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" class="collapsed">B. KEGIATAN PENDIDIKAN DAN PENGALAMAN PEMBELAJARAN</a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
                    <div class="panel-body">

<!--B1-->	            <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B1 Apakah Anda bekerja sebelum kuliah di universitas</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="has_submenu2" name="has_child2" value="1">Ya
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="no_submenu2" name="has_child2" value="0">Tidak
                                </label>
                            </div>
                        </div>

<!--JQUERY PA ALKAF TAMPIL-->	<div id="singlemenu2">
							    {{ csrf_field() }}
							    <input type="hidden" name="has_child2" value="1">
							  	<div class="tab-content">
							    <div id="id3" class="tab-pane fade in active">

<!--B2-->				<div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B2 Seberapa besar alasan­alasan dibawah ini menyebabkan ketidaktepatan masa studi Anda? Mohon diisi semuanya</strong></div>

                        <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sangat Besar</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Tidak sama sekali</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="70px">1</td>
                                            <td width="70px">2</td>
                                            <td width="70px">3</td>
                                            <td width="70px">4</td>
                                            <td width="70px">5</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b2a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2a" id="optionsRadios2" value="1"></td>
                                            <td>Alasan keuangan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b2b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2b" id="optionsRadios2" value="1"></td>
                                            <td>Tidak lulus ujian (banyak mengulang)</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b2c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2c" id="optionsRadios2" value="1"></td>
                                            <td>Penulisan skripsi lambat</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b2d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2d" id="optionsRadios2" value="1"></td>
                                            <td>Alasan keluarga</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b2e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b2e" id="optionsRadios2" value="1"></td>
                                            <td>Kesehatan</td>
                                        </tr>
                                    </tbody>
                        </table>

                        </div>
                        </div>   

												</div>
<!--BATAS JQUERY PA ALKAF TAMPIL-->		        </div>

<!--B3-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B3 Selama kuliah kebanyakan Anda tinggal dimana?</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b3" id="optionsRadios1" value="option1" checked="">Sendiri di asrama
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b3" id="optionsRadios2" value="option2">Sendiri di tempat kos
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b3" id="optionsRadios2" value="option2">Bersama orangtua/keluarga
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b3" id="optionsRadios2" value="option2">Bersama keluarga
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b3" id="optionsRadios2" value="option2">Berbagi kamar kos/apartemen
                                </label>
                            </div>
                        </div>

<!--B4-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B4 Siapa yang terutama membiayai kuliah Anda?</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b4" id="optionsRadios1" value="option1" checked="">Beasiswa (misalnya dari pemerintah, universitas)
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b4" id="optionsRadios2" value="option2">Sebagian beasiswa
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b4" id="optionsRadios2" value="option2">Orang tua/keluarga
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b4" id="optionsRadios2" value="option2">Biaya sendiri
                                </label>
                            </div>
                        </div>

<!--B5-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B5 Selama kuliah, apakah Anda menjadi anggota dari suatu organisasi (sosial, pemuda, organisasi keagamaan) di dalam atau di luar kampus?</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="has_submenu3" name="has_child3" value="1">Ya
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="no_submenu3" name="has_child3" value="0">Tidak
                                </label>
                            </div>
                        </div>

<!--JQUERY PA ALKAF TAMPIL-->   <div id="singlemenu3">
                                {{ csrf_field() }}
                                <input type="hidden" name="has_child3" value="1">
                                <div class="tab-content">
                                <div id="id3" class="tab-pane fade in active">

<!--B6-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B6 Seberapa aktif Anda di organisasi tersebut?</strong></div>

                        <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sangat Aktif</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Pasif</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="70px">1</td>
                                            <td width="70px">2</td>
                                            <td width="70px">3</td>
                                            <td width="70px">4</td>
                                            <td width="70px">5</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b6" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b6" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b6" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b6" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b6" id="optionsRadios2" value="1"></td>
                                        </tr>
                                    </tbody>
                        </table>

                        </div>
                        </div>   

                                                </div>
<!--BATAS JQUERY PA ALKAF TAMPIL-->             </div>

<!--B7-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B7 Pada saat Anda kuliah di perguruan tinggi, apakah Anda mengambil kursus atau pendidikan tambahan?</strong></div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b7" id="optionsRadios1" value="option1" checked="">Ya
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="b7" id="optionsRadios2" value="option2">Tidak
                                </label>
                            </div>
                        </div>

<!--B8-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B8 Menurut Anda seberapa besar penekanan pada aspek­aspek pembelajaran di bawah ini dilaksanakan di program studi Anda?</strong></div>

                        <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sangat Besar</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Tidak sama sekali</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="70px">1</td>
                                            <td width="70px">2</td>
                                            <td width="70px">3</td>
                                            <td width="70px">4</td>
                                            <td width="70px">5</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b8a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8a" id="optionsRadios2" value="1"></td>
                                            <td>Perkuliahan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b8b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8b" id="optionsRadios2" value="1"></td>
                                            <td>Demonstrasi (peragaan)</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b8c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8c" id="optionsRadios2" value="1"></td>
                                            <td>Partisipasi dalam proyek riset</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b8d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8d" id="optionsRadios2" value="1"></td>
                                            <td>Magang</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b8e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8e" id="optionsRadios2" value="1"></td>
                                            <td>Praktikum/kerja lapangan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b8f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b8f" id="optionsRadios2" value="1"></td>
                                            <td>Diskusi</td>
                                        </tr>
                                    </tbody>
                        </table>

                        </div>

<!--B9-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B9 Bagaimana penilaian Anda terhadap aspek belajar mengajar di bawah ini?</strong></div>

                        <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sangat Baik</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Sangat Buruk</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="70px">1</td>
                                            <td width="70px">2</td>
                                            <td width="70px">3</td>
                                            <td width="70px">4</td>
                                            <td width="70px">5</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b9a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9a" id="optionsRadios2" value="1"></td>
                                            <td>Kesempatan untuk berinteraksi dengan dosen­dosen di luar jadwal kuliah</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b9b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9b" id="optionsRadios2" value="1"></td>
                                            <td>Kesempatan berpartisipasi dalam proyek riset</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b9c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9c" id="optionsRadios2" value="1"></td>
                                            <td>Kondisi umum belajar mengajar</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b9d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b9d" id="optionsRadios2" value="1"></td>
                                            <td>Kesempatan untuk memasuki dan menjadi bagian dari jejaring ilmiah profesional</td>
                                        </tr>
                                    </tbody>
                        </table>

                        </div>

<!--B10-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B10 Bagaimana penilaian Anda terhadap kondisi fasilitas belajar di bawah ini? Mohon diisi semuanya</strong></div>

                        <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sangat Baik</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Sangat Buruk</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="70px">1</td>
                                            <td width="70px">2</td>
                                            <td width="70px">3</td>
                                            <td width="70px">4</td>
                                            <td width="70px">5</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10a" id="optionsRadios2" value="1"></td>
                                            <td>Perpustakaan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10b" id="optionsRadios2" value="1"></td>
                                            <td>Teknologi Informasi dan Komunikasi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10c" id="optionsRadios2" value="1"></td>
                                            <td>Modus belajar</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10d" id="optionsRadios2" value="1"></td>
                                            <td>Ruang belajar</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10e" id="optionsRadios2" value="1"></td>
                                            <td>Laboratorium</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10f" id="optionsRadios2" value="1"></td>
                                            <td>Variasi matakuliah yang ditawarkan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10g" id="optionsRadios2" value="1"></td>
                                            <td>Akomodasi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10h" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10h" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10h" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10h" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10h" id="optionsRadios2" value="1"></td>
                                            <td>Kantin</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10i" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10i" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10i" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10i" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10i" id="optionsRadios2" value="1"></td>
                                            <td>Pusat kegiatan mahasiswa dan fasilitasnya, ruang rekreasi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b10j" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10j" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10j" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10j" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b10j" id="optionsRadios2" value="1"></td>
                                            <td>Fasilitas layanan kesehatan</td>
                                        </tr>
                                    </tbody>
                        </table>

                        </div>

<!--B11-->               <div class="form-group">
                        <div class="alert-pakai alert-warning"><strong>B11 Bagaimana penilaian Anda terhadap pengalaman belajar di bawah ini? Mohon diisi semuanya</strong></div>

                        <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sangat Baik</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th>Sangat Buruk</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td width="70px">1</td>
                                            <td width="70px">2</td>
                                            <td width="70px">3</td>
                                            <td width="70px">4</td>
                                            <td width="70px">5</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11a" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11a" id="optionsRadios2" value="1"></td>
                                            <td>Pembelajaran di kelas</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11b" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11b" id="optionsRadios2" value="1"></td>
                                            <td>Magang/kerja lapangan/praktikum</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11c" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11c" id="optionsRadios2" value="1"></td>
                                            <td>Pengabdian dan penjangkauan masyarakat</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11d" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11d" id="optionsRadios2" value="1"></td>
                                            <td>Pelaksanaan riset/penulisan skripsi</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11e" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11e" id="optionsRadios2" value="1"></td>
                                            <td>Organisasi kemahasiswaan</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11f" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11f" id="optionsRadios2" value="1"></td>
                                            <td>Kegiatan ekstrakurikuler</td>
                                        </tr>
                                        <tr>
                                            <td><input type="radio" name="b11g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11g" id="optionsRadios2" value="1"></td>
                                            <td><input type="radio" name="b11g" id="optionsRadios2" value="1"></td>
                                            <td>Rekreasi dan olahraga</td>
                                        </tr>
                                    </tbody>
                        </table>

                        </div>

<!--BATAS KUISIONER--></div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed" aria-expanded="false">Bagian C</a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                    	Pertanyaan Bagian C
                    </div>
                </div>
            </div>
        </div>

                    <button type="submit" class="btn btn-default" value="save">Submit</button>

                </form>
            </div>
        </div>
  </div>
    </div>
  </div><!-- panel -->

@stop


