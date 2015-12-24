@extends('_layout/basealumni')

@section('title','Home')

@section('konten')

<div class="row">
                                <div class="col-md-full">

                                    <div class="alert alert-info">
                                    NIM: admin1<br>
                                    Nama: Dr. Rony Riduan, ST., MT.
                                    </div>

                                    
	                                    <form role="form" action="http://localhost/praproposal/daftar" method="POST" enctype="multipart/form-data">
	                                    
	                                    <div class="panel-group" id="accordion">
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="" aria-expanded="true">Bagian A</a>
	                                        </h4>
	                                    </div>
	                                    <div id="collapseOne" class="panel-collapse collapse in" style="" aria-expanded="true">
	                                        <div class="panel-body">
	                                            Pertanyaan Bagian A
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="panel panel-default">
	                                    <div class="panel-heading">
	                                        <h4 class="panel-title">
	                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" class="collapsed">Bagian B</a>
	                                        </h4>
	                                    </div>
	                                    <div id="collapseTwo" class="panel-collapse collapse" style="height: 0px;" aria-expanded="false">
	                                        <div class="panel-body">
	                                            Pertanyaan Bagian B
	                                        </div>
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

	                                        <button type="submit" class="btn btn-default" value="save">Daftar</button>

	                                    </form>
	                                </div>
	                            </div>

@stop


