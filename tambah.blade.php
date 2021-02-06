@extends('master.master')
@section('title','Laravel')

@section('content')
<div class="container my-3">
<div class="card">
	<div class="card-header">
		<h4 class="text-center">Data Siswa</h4>
	</div>
	<div class="card-body">
		<a href="/siswa" class="btn btn-primary mb-3">Kembali</a>
		<form method="post" action="/siswa/store">
			@csrf
			<div class="form-group">
			    <label>Nama</label>
			    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">

			    @if ($errors->has('nama'))
			    	<div class="small text-danger">
			    		{{$errors->first('nama')}}
			    	</div>
			    @endif


			  </div>
			  <div class="form-group">
			    <label>Absen</label>
			   <input type="number" class="form-control" placeholder="Masukkan Absen" name="absen">
			     @if ($errors->has('absen'))
			    	<div class="small text-danger">
			    		{{$errors->first('absen')}}
			    	</div>
			    @endif
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
</div>
@endsection