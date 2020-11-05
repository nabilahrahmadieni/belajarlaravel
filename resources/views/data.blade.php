@extends('master.master')
@section('title','Laravel')

@section('content')
<form action="/data" method="post">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">nama:</label>
    <input name ="nama" type="text" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">telepon:</label>
    <input name ="telepon" type="number" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">alamat:</label>
    <input name ="alamat" type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection