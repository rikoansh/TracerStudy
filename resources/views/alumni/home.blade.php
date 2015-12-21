@extends('_layout/base')

@section('title','Home')

@section('nav')

<div id="navmain" class="col-md-12 navmain-left collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-left">
          @if(Auth::guest())
          <li><a href="{{route('home')}}">Home</a></li>
          @else
          <li><a href="{{route('getLogin')}}">Home</a></li>
          <li><a href="#">Form Tarcer Study</a></li>
          <li><a href="berita.html">Berita</a></li>
          <li><a href="{{ route('home::kontak') }}">Kontak</a></li>
          <li><a href="{{ route('home::setting')}}">Setting Profile</a></li>
          <li><a href="{{ route('getLogout')}}">Logout</a></li>
            @endif
        </ul>
          </div>
        </div>
      </div>
@stop

@section('slideshow')
@include('include/slideshow')
@stop
