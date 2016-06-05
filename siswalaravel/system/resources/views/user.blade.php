@extends('template.vwTemplate')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Data Kelas</div>
		<div class="panel-body">
			<table class="table table-bordered table-hovered">
				<thead>
					<tr>
						<th style="width:20%">No</th>
						<th style="width:40%">Nama</th>
						<th style="width:40%">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td><td><a href="" class="btn btn-primary btn-sm" style="margin-right:5px"><i class="fa fa-edit"></i> Ubah</a><a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus</a></td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

@stop