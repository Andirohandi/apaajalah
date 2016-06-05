@extends('template.vwTemplate')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Data Siswa</div>
		<div class="panel-body">
			@if(Session::has('message'))
				<div class="alert alert-success">
					<b><i class="fa fa-check"></i> {{Session::get('message')}}</b>
				</div>
			@endif
			<a href="{{URL('adminsiswa/create')}}" class="btn btn-success btn-sm btn-flat" style="margin-bottom:5px"><i class="fa fa-pencil"></i> Tambah</a>
			<table class="table table-bordered table-hovered">
				<thead>
					<tr>
						<th style="width:5%">No</th>
						<th style="width:30%">Nama</th>
						<th style="width:10%">Kelas</th>
						<th style="width:25%">Alamat</th>
						<th style="width:35%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					@foreach($siswa as $row)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$row->nama_siswa}}</td>
						<td>{{$row->nama}}</td>
						<td>{{$row->alamat}}</td>
						<td>
						<form method="POST" action="{{URL('adminsiswa/'.$row->id_siswa)}}">
							<a href="{{URL('adminsiswa/'.$row->id_siswa.'/edit')}}" class="btn btn-primary btn-sm" style="margin-right:5px"><i class="fa fa-edit"></i> Ubah</a>
							<input type="hidden" name="_token" value="{{csrf_token()}}" >
							<input type="hidden" name="_method" value="DELETE" >
							<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
						</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

@stop