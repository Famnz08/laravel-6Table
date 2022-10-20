@extends('layout.layout')
@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/transaksi/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Id Admin</th>
                    <th>Transaksi Tanggal</th>
                    <th>Transaksi nonota</th>
                    <th>Transaksi status</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($transaksi as $row)
					<tr>
						<td>{{$row->id_transaksi}}</td>
						<td>{{$row->id_admin}}</td>
						<td>{{$row->transaksi_tanggal}}</td>
						<td>{{$row->transaksi_nonota}}</td>
						<td>{{$row->transaksi_status}}</td>
						<td>
            <a class="btn btn-success" href="/transaksidetail/detail/{{$row->id_transaksi}}">Detail</a>
            <a class="btn btn-primary" href="/transaksi/edit/{{$row->id}}">Edit</a>
            <a class="btn btn-danger" href="/transaksi/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection