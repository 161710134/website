@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Eskul 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Eskul</label>	
			  			<input type="text" name="eskul" class="form-control" value="{{ $eskul->eskul }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Hari Kegiatan Eskul</label>
						<input type="text" name="hari" class="form-control" value="{{ $eskul->hari }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Keterangan Eskul</label>
						<input type="text" name="keterangan" class="form-control" value="{{ $eskul->keterangan }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection