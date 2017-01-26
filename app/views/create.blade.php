<title>Pendaftaran Seminar KP</title>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{URL::to('homepage')}}">HOMEPAGE</a>
      <a class="navbar-brand" href="{{URL::to('create')}}">Pendaftaran Seminar Kerja Praktek</a>
      <a class="navbar-brand" href="{{URL::to('data/index')}}">Form Terdaftar</a>
    </div>

                    <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
            
                    </ul>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Keluar</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@extends('layouts.master')

@section('navbar')
@parent

@stop

@section('content')
<div class="container">
<div class="col-md-5 col-md-offset-3">
<h1>Pendaftaran Seminar KP</h1>

<!-- notifikasi error -->
{{ HTML::ul($errors->all()) }}

{{Form::open(array('action' => 'SeminarController@store', 'enctype' => 'multipart/form-data')) }}

	<!-- <div class="form-group">
		{{ Form::label('mahasiswa_id', 'No BP') }}
		{{ Form::text('mahasiswa_id', Input::old('mahasiswa_id'), array('class' => 'form-control')) }}
	</div> -->
	<div class="form-group">
		{{ Form::label('proposal_id', 'ID Proposal') }}
		{{ Form::text('proposal_id', Input::old('nama'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('dosen_id', 'NIP Dosen') }}
		{{ Form::text('dosen_id', Input::old('nama'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('judul', 'Judul Kerja Praktek') }}
		{{ Form::text('judul', Input::old('judul'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('bidang', 'Bidang Kerja Praktek') }}
		{{ Form::text('bidang', Input::old('bidang'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('tanggal_mulai', 'Tanggal Mulai Kerja Praktek') }}
		{{ Form::input('date','tanggal_mulai', Input::old('tanggal_mulai'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('tanggal_selesai', 'Tanggal Selesai Kerja Praktek') }}
		{{ Form::input('date','tanggal_selesai', Input::old('tanggal_selesai'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('pembimbing_lapangan', 'Nama Pembimbing Lapangan') }}
		{{ Form::text('pembimbing_lapangan', Input::old('pembimbing_lapangan'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('tanggal_seminar', 'Tanggal Seminar KP') }}
		{{ Form::input('date','tanggal_seminar', Input::old('tanggal_seminar'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
		{{ Form::label('nilai', 'Nilai KP') }}
		{{ Form::text('nilai', Input::old('nilai'), array('class' => 'form-control')) }}
	</div>
	<div class="form-group">
    {{ Form::label('file_nilai','File Nilai') }}
    {{ Form::file('file_nilai') }}
    </div>
    <div class="form-group">
    {{ Form::label('file_laporan','File Laporan') }}
    {{ Form::file('file_laporan') }}
    </div>
    <div class="form-group">
    {{ Form::label('file_pernyataan','File Pernyataan') }}
    {{ Form::file('file_pernyataan') }}
    </div>

	{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
	<a class="btn btn-small btn-info" href="{{ URL::to('homepage') }}">Cancel</a>
</div>
</div>
</div>
{{ Form::close() }}

@stop