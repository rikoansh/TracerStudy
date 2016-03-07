<!-- <div class="form-group">
    <label>nim</label>
    {{$alumni->nim}}
    <br>
    
    {{$alumni->nama}}
</div>

<a class="btn btn-primary lebar" href="{{ route('fakultas::print', $alumni->nama) }}">Print</a>
-->
@extends('_layout/baseFakultas')

@section('title','Hasil Search')


@section('isi')

<h4>Hasil pencarian untuk <strong>'{{ $query }}'<strong></h4>
    <h5>Ditemukan {{ count($results) }} hasil</h5>
  <ul>
    @foreach($results as $result)
    <li>{{ $result->nim }}</li>
    @endforeach
  </ul>
@stop