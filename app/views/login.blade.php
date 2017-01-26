<title>Login Pendaftaran Seminar KP</title>
@extends('layouts.master')

@section('content')
<div class="container">
<div class="col-md-6 col-md-offset-3">
<h2>Masuk</h2>
<br>

 @if(Session::has('pesan_error'))
   <div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>
 @endif
 @if(Session::has('pesan'))
   <div class="alert alert-success">{{ Session::get('pesan') }}</div>
 @endif

{{Form::open(array('action' => 'UserController@authenticate')) }}
{{Form::label('id', 'No BP') }}
{{Form::text('id', '', array('class' => 'form-control'))}}
{{Form::label('password', 'Password') }}
{{Form::password('password', array('class' => 'form-control'))}}
<br> 
{{Form::submit('Masuk', array('class' => 'btn btn-primary')) }}

{{Form::close() }}

</div>
</div>
@stop
