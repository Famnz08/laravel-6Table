@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/supllier/store">
	@csrf
	<div class="form-group">
		<label>Nama supllier</label>
	<input class="form-control" type="text" name="suplier_nama" placeholder="Nama suplier" >
	</div>
	<div class="form-group">
		<label>Alamat Supplier</label>
	<input class="form-control" type="text" name="suplier_alamat" placeholder="Alamat">
	</div>
	<div class="form-group">
		<label>Phone Supplier</label>
	<input class="form-control" type="text" name="suplier_phone" placeholder="Phone supplier" >
	</div>
	<div class="form-group">
		<label>Supplier Status</label>
	<input class="form-control" type="text" name="suplier_status" placeholder="Suplier status" >
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
@endsection
