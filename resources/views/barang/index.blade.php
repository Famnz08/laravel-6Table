@extends('layout.layout')
@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/barang/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Barang</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Id jenis</th>
                    <th>Id supplier</th>
                    <th>Harga jual</th>
                    <th>Status barang</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($barang as $row)
					<tr>
						<td>{{$row->id_barang}}</td>
						<td>{{$row->barang_kode}}</td>
						<td>{{$row->barang_nama}}</td>
						<td>{{$row->jenis_nama}}</td>
						<td>{{$row->suplier_nama}}</td>
                        <td>{{$row->harga_jual}}</td>
                        <td>{{$row->barang_status}}</td>
						<td><a class="btn btn-primary" href="/barang/edit/{{$row->id}}">Edit</a>
            <a class="btn btn-danger" href="/barang/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection