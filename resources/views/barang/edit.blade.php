@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Edit Data Jenis</h3>
 </div>
              <!-- /.card-header -->
			  
 <div class="card-body">
 	<form method="POST" action="/barang/update/{{$barang->id}}">
	@csrf
	@method('put')
	<div class="form-group">
		<label>Id barang</label>
		<input class="form-control" type="text" name="id_barang" placeholder="ID barang" value="{{$barang->id_barang}}">
	</div>

	<div class="form-group">
		<label>Kode barang</label>
	<input class="form-control" type="text" name="barang_kode" placeholder="Kode barang" value="{{$barang->barang_kode}}">
	</div>
	<div class="form-group">
		<label>Nama barang</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="Nama barang" value="{{$barang->barang_nama}}">
	</div>
	<div>
		<label>Id jenis</label>
		<select class="form-control" name="id_jenis">
			<option>Silahkan dipilih</option>
			@foreach($jenis as $row)
			<option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Id supplier</label>
	<input class="form-control" type="text" name="id_suplier" placeholder="Id suplier" value="{{$barang->id_suplier}}">
	</div>
	<div class="form-group">
		<label>Harga jual</label>
	<input class="form-control" type="text" name="harga_jual" placeholder="Harga jual" value="{{$barang->harga_jual}}">
	</div>
	<div class="form-group">
		<label>Barang status</label>
	<input class="form-control" type="text" name="barang_status" placeholder="Barang status" value="{{$barang->barang_status}}">
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
@endsection
