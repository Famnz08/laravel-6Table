@extends('layout.layout')

@section('content')
 <div class="card-header">
                <h3 class="card-title">Tambah Data Supplier</h3>
 </div>
              <!-- /.card-header -->
 <div class="card-body">
<form method="POST" action="/transaksi/store">
	@csrf<div class="form-group">
		<label>Id admin</label>
	<input class="form-control" type="text" name="id_admin" placeholder="Transaksi status" >
	</div>
	<div class="form-group">
		<label>Transaksi tangal</label>
	<input class="form-control" type="date" name="transaksi_tanggal" placeholder="Transaksi Tanggal">
	</div>
	<div class="form-group">
		<label>Transaksi Nonota</label>
	<input class="form-control" type="text" name="transaksi_nonota" placeholder="Transaksi Nonota" >
	</div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" name="transaksi_status" placeholder="Transaksi status" >
	</div>
	
	<div class="form-group">
		<label>Id barang</label>
		<select class="form-control" name="id_barang">
			<option>Silahkan dipilih</option>
			@foreach($barang as $row)
			<option value="{{$row->id_barang}}">{{$row->barang_nama}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label>Transaksi jenis</label>
	<input class="form-control" type="text" name="transaksi_jenis" placeholder="Transaksi jenis" >
	</div>
	<div class="form-group">
		<label>Transaksi harga</label>
	<input class="form-control" type="text" name="transaksi_harga" placeholder="Transaksi harga" >
	</div>
	<div class="form-group">
		<label>Transaksi jumlah</label>
	<input class="form-control" type="text" name="transaksi_jumlah" placeholder="Transaksi jumlah" >
	</div>
	<div class="form-group">
		<label>Transaksi Status</label>
	<input class="form-control" type="text" name="transaksi_detail_status" placeholder="Transaksi detail status" >
	</div>
	<div class="form-group">
	<input class="btn btn-primary" type="submit" name="Edit">
	</div>
</form>
</div>
@endsection
