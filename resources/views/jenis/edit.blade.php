@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Jenis</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/jenis/update/{{$jenis->id}}">
	@csrf
	@method('put')
    <div class="form-group">
		<label>Nama Jenis</label>
	<input class="form-control" type="text" name="jenis_nama" placeholder="Nama suplier" value="{{$jenis->jenis_nama}}">
	</div>
	<div class="form-group">
		<label>Status Jenis</label>
	<input class="form-control" type="text" name="jenis_status" placeholder="Alamat" value="{{$jenis->jenis_status}}">
	</div>
    <div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
    @endsection