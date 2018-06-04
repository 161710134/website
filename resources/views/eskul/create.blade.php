@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Tambah Data Eskul 
			  	<div class="panel-title pull-right"><a href="{{ route('eskul.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('eskul.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('eskul') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Eskul</label>	
			  			<input type="text" name="eskul" class="form-control"  required>
			  			@if ($errors->has('eskul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('eskul') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('hari') ? ' has-error' : '' }}">
			  			<label class="control-label">Hari Kegiatan Eskul</label>	
			  			<input type="text" name="hari" class="form-control"  required>
			  			@if ($errors->has('hari'))
                            <span class="help-block">
                                <strong>{{ $errors->first('hari') }}</strong>
                            </span>
                        @endif
					</div>
					<div class="form-group {{ $errors->has('keterangan') ? ' has-error' : '' }}">
			  			<label class="control-label">Keterangan Eskul</label>	
			  			<input type="text" name="keterangan" class="form-control"  required>
			  			@if ($errors->has('keterangan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('keterangan') }}</strong>
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