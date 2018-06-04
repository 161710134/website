@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Masjid
			  	<div class="panel-title pull-right"><a href="{{ route('masjids.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  		<div class="form-group">
			  			<label class="control-label">Nama Masjid</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $masjids->nama }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Nama Imam Masjid</label>	
			  			<input type="text" name="imam" class="form-control" value="{{ $masjids->imam }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Lokasi</label>	
			  			<input type="text" name="lokasi" class="form-control" value="{{ $masjids->lokasi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Luas</label>	
			  			<input type="text" name="luas" class="form-control" value="{{ $masjids->luas }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Sejarah</label>	
			  			<input type="text" name="sejarah" class="form-control" value="{{ $masjids->sejarah }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection