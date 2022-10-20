@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/admin/store">
	@csrf
	<div class="form-group">
		<label>username</label>
	<input class="form-control" type="text" name="username" placeholder="Id admin">
</div>
	<div class="form-group">
		<label>password</label>
	<input class="form-control" type="text" name="password" placeholder="Id admin">
</div>
	<div class="form-group">
		<label>id_level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="Id admin">
</div>
	<div class="form-group">
		<label>admin_nama</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="Id admin">
</div>
	<div class="form-group">
		<label>admin_status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="Id admin">
</div>
<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Tambah">
	</div>
	
</form>
</div>

@endsection