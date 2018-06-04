@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Prestasi 
			  	<div class="panel-title pull-right"><a href="{{ route('prestasi.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('prestasi.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('bidang_eskul') ? ' has-error' : '' }}">
			  			<label class="control-label">Bidang Eskul</label>	
			  			<input type="text" name="bidang_eskul" class="form-control"  required>
			  			@if ($errors->has('bidang_eskul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bidang_eskul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('prestasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Prestasi Yang Di Peroleh</label>	
			  			<input type="text" name="prestasi" class="form-control"  required>
			  			@if ($errors->has('prestasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('prestasi') }}</strong>
                            </span>
                        @endif
			  		</div>
					  <div class="form-group {{ $errors->has('tgl_perolehan') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Perolehan Prestasi</label>	
			  			<input type="date" name="tgl_perolehan" class="form-control"  required>
			  			@if ($errors->has('tgl_perolehan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_perolehan') }}</strong>
                            </span>
                        @endif
					  </div>
					  <div class="form-group {{ $errors->has('eskul_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Eskul Yang Meraih Prestasi</label>	
			  			<select name="eskul_id" class="form-control">
			  				@foreach($eskul as $data)
			  				<option value="{{ $data->id }}">{{ $data->eskul }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('eskul_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('eskul_id') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection