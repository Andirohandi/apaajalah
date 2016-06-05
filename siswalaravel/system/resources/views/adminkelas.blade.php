@extends('template.vwTemplate')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Data Kelas</div>
		<div class="panel-body">
			@if(Session::has('message'))
				<div class="alert alert-success">
					<b><i class="fa fa-check"></i> {{Session::get('message')}}</b>
				</div>
			@endif
			<a href="{{URL('adminkelas/create')}}" class="btn btn-success btn-sm btn-flat" style="margin-bottom:5px"><i class="fa fa-pencil"></i> Tambah</a>
			<table class="table table-bordered table-hovered">
				<thead>
					<tr>
						<th style="width:20%">No</th>
						<th style="width:40%">Nama</th>
						<th style="width:40%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					@foreach($kelas as $row)
					<tr>
						<td>{{$no++}}</td>
						<td>{{$row->nama}}</td>
						<td>
						<form method="POST" action="{{URL('adminkelas/'.$row->id_kelas)}}">
							<a href="{{URL('adminkelas/'.$row->id_kelas.'/edit')}}" class="btn btn-primary btn-sm" style="margin-right:5px"><i class="fa fa-edit"></i> Ubah</a>
						
							<input type="hidden" name="_token" value="{{csrf_token()}}" >
							<input type="hidden" name="_method" value="DELETE" >
						
							<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</button>
							
						</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$kelas->render()}}
		</div>
	</div>

@stop