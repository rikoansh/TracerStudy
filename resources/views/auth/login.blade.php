@extends('_layout/login')

@section('form')
@if (count($errors)>0)
@foreach($errors->all() as $error)
<ul>
    <li>{{ $error}}</li>
</ul>
@endforeach
@endif
                <form method="POST" action="{{ route('getLogin')}}" role="login">
                    <img src={{asset('loginassets/images/logo.png') }} class="img-responsive" alt="" />
                    {!! csrf_field() !!}
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Email" required class="form-control input-lg" />
                    <input type="password" name="password" placeholder="Password" required class="form-control input-lg" />

                    <input type="checkbox" name="remember" value="1" /> Remember me<br />
                    <input type="checkbox" name="tos" value="1" /> You agree to <a href="#" class="text-primary">Terms</a> and
                    <a href="#" class="text-primary">Privacy Policy</a>

                    <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Sign in</button>
                </form>

@stop


