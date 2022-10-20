@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Jenis</h3>
 </div>
              <!-- /.card-header -->
			  
 <div class="card-body">
 	<form method="POST" action="/admin/update/{{$admin->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id admin</label>
		<input class="form-control" type="text" name="id_admin" placeholder="ID admin" value="{{$admin->id_admin}}">
	</div>

	<div class="form-group">
		<label>Username</label>
	<input class="form-control" type="text" name="username" placeholder="Username" value="{{$admin->username}}">
	</div>
	<div class="form-group">
		<label>Password</label>
	<input class="form-control" type="text" name="Password" placeholder="Password" value="{{$admin->password}}">
	</div>
	<div class="form-group">
		<label>Admin_level</label>
	<input class="form-control" type="text" name="admin_level" placeholder="Admin level" value="{{$admin->admin_level}}">
	</div>
	<div class="form-group">
		<label>Admin_nama</label>
	<input class="form-control" type="text" name="admin_nama" placeholder="Admin nama" value="{{$admin->admin_nama}}">
	</div>
	<div class="form-group">
		<label>Admin_status</label>
	<input class="form-control" type="text" name="admin_status" placeholder="Admin status" value="{{$admin->admin_status}}">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
@endsection
