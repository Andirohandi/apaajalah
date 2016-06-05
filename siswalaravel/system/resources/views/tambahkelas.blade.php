@extends('template.vwTemplate')

@section('content')
	<div class="panel panel-default">
		<div class="panel-heading">Data Kelas</div>
		<div class="panel-body">
			@if($errors->has())
				<div class="alert alert-danger">
					@foreach($errors->all() as $error)
						<b><i class="fa fa-warning"></i> {{$error}} </b>
					@endforeach
				</div>
			@endif
			<form method="POST" action="{{URL('adminkelas')}}" >
				<div class="form-group">
					<label for="nama">Nama Kelas</label>
					<input type="hidden" class="form-control" id="_token" name="_token" value="{{csrf_token()}}">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kelas.." value="{{old('nama')}}">
				</div>
				<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-save"></i> Simpan</button>
			</form>
		</div>
	</div>

@stop