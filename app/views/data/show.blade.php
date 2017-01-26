<title>Lihat Data Seminar KP</title>
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
        <li><a href="{{URL::to('logout')}}"><i class="glyphicon glyphicon-off"></i> Keluar</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

@extends('layouts.master')
 
@section('navbar')
@parent
 
@stop
 
@section('content')
 
<h1>Showing {{ $seminar->proposal_id }}</h1>
 
    <div class="jumbotron text-center">
        <h2>{{ $seminar->proposal_id }}</h2>
        <p>
          <strong>No BP:</strong> {{ $seminar->mahasiswa_id }}<br>
            <strong>Email:</strong> {{ $seminar->email }}<br>
            <strong>ID Proposal:</strong> {{ $seminar->proposal_id }}<br>
            <strong>ID Dosen:</strong> {{ $seminar->dosen_id }}<br>
            <strong>Judul Kerja Praktek:</strong> {{ $seminar->judul }}<br>
            <strong>Bidang Kerja Praktek:</strong> {{ $seminar->bidang }}<br>
        </p>
        <p>
          <strong>Tanggal Mulai KP:</strong> {{ $seminar->tanggal_mulai }}<br>
            <strong>Tanggal Selesai KP:</strong> {{ $seminar->tanggal_selesai }}<br>
            <strong>Nama Pembimbing Lapangan:</strong> {{ $seminar->pembimbing_lapangan }}<br>
         </p>
         <p>
          <strong>Tanggal Seminar KP:</strong> {{ $seminar->tanggal_seminar }}<br>
            <strong>Nilai:</strong> {{ $seminar->nilai }}<br>
            <strong>Nama File Nilai:</strong> {{ $seminar->file_nilai }}<br>
            <strong>Nama File Laporan:</strong> {{ $seminar->file_laporan }}<br>
            <strong>Nama File Pernyataan:</strong> {{ $seminar->file_pernyataan }}<br>

         </p>


    </div>
 
@stop 