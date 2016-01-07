 <div class="panel panel-default">
        <div class="panel-heading">Ubah Password</div>
        <div class="panel-body">
           
            <form action="{{ route('admin::updatesetting') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
            <label><h4>Masukkan Password Lama</h4></label>
            <input type="password" name="password_lama" class="form-control">
            </div>
            <div class="form-group">
            <label><h4>Masukkan Password Baru</h4></label>
            <input type="password" name="password" class="form-control">
            </div>
            <p>Apabila password dikosongkan maka akan tetap menggunakan password yang lama.</p>
            <div class="form-group">
            <label><h4>Konfirmasi Password Baru</h4></label>
            <input type="password" name="password_confirmation" class="form-control">
            </div>
            <br>
            <hr>
            <div class="form-group">
            <input type="submit" value="Save" class="btn btn-lg btn-success">
            </div>
        </div>
    </div>
</form>

@if (Session::has('message'))
         <div class="alert alert-info">
            <h3>{{ Session::get('message') }}</h3>
         </div>   
        @elseif (Session::has('error'))
         <div class="alert alert-info">
            <h3>{{ Session::get('error') }}</h3>
         </div>   
         @elseif (Session::has('errors'))
         <div class="alert alert-info">
            <h3>{{ Session::get('errors') }}</h3>
         </div>   

        @else
<div class="panel-body">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
@endif