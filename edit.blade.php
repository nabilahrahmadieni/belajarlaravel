@extends('master.master')
@section('title','Laravel')

@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            EDIT Data Siswa
        </div>
        <div class="card-body">
            <br>
            <br>
            <form method="post" action="{{ route('siswa.update', $siswa->id) }}">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Nama</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" name="nama" placeholder="Enter Name" class="form-control" value="{{ $siswa->nama }}">
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col col-md-3">
                        <label class="form-control-label">Absen</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="number" class="form-control" name="absen" value="{{ $siswa->absen }}">
                    </div>
                </div>
                <div class="card-footer text-right">
                <input type="submit" value="Simpan" class="btn btn-primary">
                    
                    <a href="{{ url('/siswa') }}" class="btn btn-success"> Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection