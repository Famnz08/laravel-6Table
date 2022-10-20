@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Transaksi</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/transaksi/update/{{$transaksi->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id Transaksi</label>
		<input class="form-control" type="text" name="id_transaksi" placeholder="ID transaksi" value="{{$transaksi->id_transaksi}}">
	</div>

	<div class="form-group">
		<label>Id admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="Id admin" value="{{$transaksi->id_admin}}">
	</div>
	<div class="form-group">
		<label>Transaksi tangal</label>
	<input class="form-control" type="date" name="transaksi_tanggal" placeholder="Transaksi Tanggal" value="{{$transaksi->transaksi_tanggal}}">
	</div>
	<div class="form-group">
		<label>Transaksi Nonota</label>
	<input class="form-control" type="text" name="transaksi_nonota" placeholder="Transaksi Nonota" value="{{$transaksi->transaksi_nonota}}">
	</div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" name="transaksi_status" placeholder="Transaksi status" value="{{$transaksi->transaksi_status}}">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
@endsection
