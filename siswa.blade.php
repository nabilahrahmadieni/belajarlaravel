@extends('master.master')
@section('title','Laravel')

@section('content')
<div class="container my-3">
<div class="card">
	<div class="card-header">
		<h4 class="text-center">Data Siswa</h4>
	</div>
	<div class="card-body">
		<a href="/siswa/tambah" class="btn btn-primary mb-3">Input Data Siswa</a>
		<table class="table-bordered table">
			<thead>
				<tr class="text-center">
					<th>Nama</th>
					<th>Absen</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				@foreach($siswa as $p)
				<tr>
					<td class="text-center">{{ $p-> nama}}</td>
					<td class="text-center">{{ $p-> absen}}</td>
					<td class="text-center">
						<a href="" class="btn btn-info">Edit</a>
						<a href="" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
</div>
@endsection