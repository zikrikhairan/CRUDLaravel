<title>HOMEPAGE</title>
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

<div class="col-md-5 col-md-offset-4">
<h2>Selamat Datang di</h2>
</div>
<div class="col-md-10 col-md-offset-4">
<h1>Pendaftaran Seminar</h1>
</div>
<div class="col-md-6 col-md-offset-4">
<h1>Kerja Praktek</h1>
</div>
