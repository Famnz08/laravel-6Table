@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Barang</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/barang/store">
	@csrf
	<div class="form-group">
		<label>kode Barang </label>
	<input class="form-control" type="text" name="barang_kode" placeholder="Barkod">
	</div>
	<div class="form-group">
		<label>Nama Barang</label>
	<input class="form-control" type="text" name="barang_nama" placeholder="Barkod">
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
    <div>
		<label>Id Supplier</label>
		<select class="form-control" name="id_suplier">
			<option>Silahkan dipilih</option>
			@foreach($supllier as $row)
			<option value="{{$row->id_suplier}}">{{$row->suplier_nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Harga jual</label>
	<input class="form-control" type="int" name="harga_jual" placeholder="Harga jual">
	</div>
	<div class="form-group">
		<label>Status barang</label>
	<input class="form-control" type="text" name="barang_status" placeholder="Status barang" >
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
@endsection
</div>