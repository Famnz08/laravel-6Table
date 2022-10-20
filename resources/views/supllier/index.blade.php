@extends('layout.layout')
@section('content')
 <div class="card-header">
                <h3 class="card-title">Aplikasi Kasir</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              	<a class="btn btn-warning" href="/supllier/tambah">Tambah</a>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id Supllier</th>
                    <th>Nama Supllier</th>
                    <th>Alamat Supllier</th>
                    <th>Phone Supplier</th>
                    <th>Status Supllier</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($supllier as $row)
					<tr>
						<td>{{$row->id_suplier}}</td>
						<td>{{$row->suplier_nama}}</td>
						<td>{{$row->suplier_alamat}}</td>
						<td>{{$row->suplier_phone}}</td>
						<td>{{$row->suplier_status}}</td>
						<td><a class="btn btn-primary" href="/supllier/edit/{{$row->id}}">Edit</a>
            <a class="btn btn-danger" href="/supllier/destroy/{{$row->id}}">Delete</td>
					</tr>
				@endforeach
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
@endsection