@extends('layouts.master')

@section('title')
@parent
:: Login
@stop

{{-- Content --}}
@section('content')

<div class="page-header">
  <h1>Login to your account</h1>
</div>
<div class="row">
  <div class="col-md-6">
    {{ Form::open(array('url' => 'login', 'class' => 'form-horizontal', 'role' => 'form')) }}

    <!-- UserName -->
    <div class="form-group {{{ $errors->has('username') ? 'error' : '' }}}">
      {{ Form::label('username', 'Username', array('class' => 'col-sm-2 control-label')) }}

      <div class="col-sm-8">
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

    <!-- Password -->
    <div class="form-group {{{ $errors->has('password') ? 'error' : '' }}}">
      {{ Form::label('password', 'Password', array('class' => 'col-sm-2 control-label')) }}

      <div class="col-sm-8">
        {{ Form::password('password', array('class' => 'form-control')) }}

        @if($errors->has('password'))
        <br />
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          {{ $errors->first('password') }}
        </div>
        @endif

      </div>
    </div>

    <!-- Remember me -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-8">
        <div class="checkbox">
          <label>
            {{ Form::checkbox('remember') }} {{ "Remember me" }}
          </label>
        </div>
      </div>
    </div>

    <!-- Login button -->
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-8">
        {{ Form::submit('Login', array('class' => 'btn btn-default')) }}
      </div>
    </div>

    {{ Form::close() }}
  </div>
  <div class="col-md-6">
    {{ HTML::linkAction('AccountController@getCreateAccount', 'Create Account', array(), array('class' => 'btn btn-lg btn-primary')) }}
  </div>
</div>

@stop