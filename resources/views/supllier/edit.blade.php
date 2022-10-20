@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
 	<form method="POST" action="/supllier/update/{{$supllier->id}}">
	@csrf
	@method('put')
    <div class="form-group">
		<label>Id Supplier</label>
		<input class="form-control" type="text" name="id_suplier" placeholder="ID supplier" value="{{$supllier->id_suplier}}">
	</div>

	<div class="form-group">
		<label>Nama supllier</label>
	<input class="form-control" type="text" name="suplier_nama" placeholder="Nama suplier" value="{{$supllier->suplier_nama}}" >
	</div>
	<div class="form-group">
		<label>Alamat Supplier</label>
	<input class="form-control" type="text" name="suplier_alamat" placeholder="Alamat" value="{{$supllier->suplier_alamat}}">
	</div>
    
	<div class="form-group">
		<label>Phone Supplier</label>
	<input class="form-control" type="text" name="suplier_phone" placeholder="Phone" value="{{$supllier->suplier_phone}}">
	</div>
    
	<div class="form-group">
		<label>Suplier status</label>
	<input class="form-control" type="text" name="suplier_status" placeholder="Status" value="{{$supllier->suplier_status}}">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
@endsection
