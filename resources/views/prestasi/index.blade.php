@extends('layouts.app')
@section('content')

<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">Data Prestasi Yang Di Peroleh
					<div class="panel-title pull-right"><a href="{{ route('prestasi.create') }}">Tambah Data</a>
				</div>
			</div>
<div class="panel-body">
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Bidang Eskul</th>
					<th>Prestasi Yang Di Peroleh</th>
					<th>Tanggal Perolehan Prestasi</th>
					<th>Eskul Yang Memperoleh Prestasi</th>
					<th colspan="3">Action</th>
				</tr>	
</thead>
<tbody>
	@php $no = 1; @endphp
	@foreach($prestasi as $data)
	<tr>
		<td> {{ $no++ }} </td>
		<td><p> {{ $data->bidang_eskul }} </p></td>
		<td><p> {{ $data->prestasi }} </p></td>
		<td><p> {{ $data->tgl_perolehan }} </p></td>
		<td><p>{{ $data->Eskul->eskul }}</p></td>
	<td>
		<a class="btn btn-primary" href=" {{ route('prestasi.edit',$data->id)}} ">Edit Data</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('pretasi.show',$data->id)}} ">Lihat data</a>
	</td>
	<td>
							<form method="post" action="{{ route('prestasi.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Hapus Data</button>
							</form>
						</td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection