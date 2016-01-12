 <div class="form-group">
    <label>nim</label>
    {{$alumni->nim}}
    <br>
    
    {{$alumni->nama}}
</div>

<a class="btn btn-primary lebar" href="{{ route('fakultas::print', $alumni->nama) }}">Print</a>

