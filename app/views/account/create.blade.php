@extends('layouts.master')

@section('title')
@parent
:: Create Account
@stop

{{-- Content --}}
@section('content')

<div class="page-header">
  <h1>Create new account</h1>
</div>

{{ Form::open(array('url' => 'account/create', 'class' => 'form-horizontal', 'role' => 'form')) }}

<!-- UserName -->
<div class="form-group {{{ $errors->has('username') ? 'error' : '' }}}">
  {{ Form::label('username', 'Username', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
    @if($errors->has('username'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('username') }}
    </div>
    @endif
  </div>
</div>

<!-- Email -->
<div class="form-group {{{ $errors->has('email') ? 'error' : '' }}}">
  {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    @if($errors->has('email'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('email') }}
    </div>
    @endif
  </div>
</div>

<!-- Password -->
<div class="form-group {{{ $errors->has('password') ? 'error' : '' }}}">
  {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    <input name="password" type="password" id="password" class="form-control">
    @if($errors->has('password'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('password') }}
    </div>
    @endif
  </div>
</div>

<!-- Password Confirmation -->
<div class="form-group {{{ $errors->has('password_confirmation') ? 'error' : '' }}}">
  {{ Form::label('password_confirmation', 'Password Confirmation', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    <input name="password_confirmation" type="password" id="password_confirmation" class="form-control">
    @if($errors->has('password_confirmation'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('password_confirmation') }}
    </div>
    @endif
  </div>
</div>

<!-- Create button -->
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    {{ Form::submit('Create', array('class' => 'btn btn-success')) }}
  </div>
</div>

{{ Form::close() }}
@stop