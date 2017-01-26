<title>Halaman Data Seminar KP</title>
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

 
@section('content')
<h1>Data</h1>
 
<!-- notifikasi messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
 
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>No BP</td>
            <td>ID Proposal</td>
            <td>NIP Dosen</td>
            <td>Judul</td>
            <td>Bidang</td>
            <td>Tanggal Mulai</td>
            <td>Tanggal Selesai</td>
            <td>Nama Pembimbing</td>
            <td>Tanggal Seminar</td>
            <td>Nilai</td>
            <td>Actions</td>
  
        </tr>
    </thead>
    <tbody>
    @foreach($seminar as $key => $value)
        <tr>
            <td>{{ $value->mahasiswa_id }}</td>
            <td>{{ $value->proposal_id }}</td>
            <td>{{ $value->dosen_id }}</td>
            <td>{{ $value->judul }}</td>
            <td>{{ $value->bidang }}</td>
            <td>{{ $value->tanggal_mulai }}</td>
            <td>{{ $value->tanggal_selesai }}</td>
            <td>{{ $value->pembimbing_lapangan }}</td>
            <td>{{ $value->tanggal_seminar }}</td>
            <td>{{ $value->nilai }}</td>
 
            <td>

            <a class="btn btn-small btn-success" href="{{ URL::to('data/show/' . $value->id) }}">Show</a>
            <a class="btn btn-small btn-info" href="{{ URL::to('data/' . $value->id . '/edit') }}">Edit</a>
            <a class="btn btn-small btn-warning" href="{{ URL::to('data/' . $value->id) }}">Delete</a>
            <a>
            
            </td>

        </tr>
    @endforeach
    </tbody>
</table>
@stop 