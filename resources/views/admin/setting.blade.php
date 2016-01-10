 <div class="panel panel-default">
        <div class="panel-heading">Ubah Password</div>
        <div class="panel-body">
           
            <form action="{{ route('admin::updatesetting') }}" method="post" accept-charset="UTF-8" enctype ="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Masukan password lama</label>
                    <input type="password" class="form-control" name="password_lama">
                </div>

                <div class="form-group">
                    <label>Masukan password baru</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <label>Masukan lagi password baru</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-info">Oke </button>
        </form>
        </div>
    </div>
</form>

@if (Session::has('pesan'))
     <div class="alert alert-info">
        <h3>{{ Session::get('pesan') }}</h3>
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