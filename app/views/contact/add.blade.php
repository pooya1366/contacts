@extends('layouts.master')

@section('title')
@parent
:: Add Contact
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
  <h1>Add new contact</h1>
</div>

{{ Form::open(array('url' => 'contact/add', 'class' => 'form-horizontal', 'role' => 'form')) }}

<!-- First Name -->
<div class="form-group {{{ $errors->has('first_name') ? 'error' : '' }}}">
  {{ Form::label('first_name', 'First Name', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('first_name', Input::old('first_name'), array('class' => 'form-control')) }}
    @if($errors->has('first_name'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('first_name') }}
    </div>
    @endif
  </div>
</div>

<!-- Last Name -->
<div class="form-group {{{ $errors->has('last_name') ? 'error' : '' }}}">
  {{ Form::label('last_name', 'Last Name', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('last_name', Input::old('last_name'), array('class' => 'form-control')) }}
    @if($errors->has('last_name'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('last_name') }}
    </div>
    @endif
  </div>
</div>

<!-- Company -->
<div class="form-group {{{ $errors->has('company') ? 'error' : '' }}}">
  {{ Form::label('company', 'Company', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('company', Input::old('company'), array('class' => 'form-control')) }}
    @if($errors->has('company'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('company') }}
    </div>
    @endif
  </div>
</div>

<!-- Cellphone -->
<div class="form-group {{{ $errors->has('cellphone') ? 'error' : '' }}}">
  {{ Form::label('cellphone', 'Cellphone', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('cellphone', Input::old('cellphone'), array('class' => 'form-control')) }}
    @if($errors->has('cellphone'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('cellphone') }}
    </div>
    @endif
  </div>
</div>

<!-- Home tell -->
<div class="form-group {{{ $errors->has('home_tell') ? 'error' : '' }}}">
  {{ Form::label('home_tell', 'Home Tell', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('home_tell', Input::old('home_tell'), array('class' => 'form-control')) }}
    @if($errors->has('home_tell'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('home_tell') }}
    </div>
    @endif
  </div>
</div>

<!-- Work tell -->
<div class="form-group {{{ $errors->has('work_tell') ? 'error' : '' }}}">
  {{ Form::label('work_tell', 'Work Tell', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('work_tell', Input::old('work_tell'), array('class' => 'form-control')) }}
    @if($errors->has('work_tell'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('work_tell') }}
    </div>
    @endif
  </div>
</div>

<!-- Email -->
<div class="form-group {{{ $errors->has('email') ? 'error' : '' }}}">
  {{ Form::label('email', 'Email', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('email', Input::old('email'), array('class' => 'form-control')) }}
    @if($errors->has('email'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('email') }}
    </div>
    @endif
  </div>
</div>

<!-- Website -->
<div class="form-group {{{ $errors->has('website') ? 'error' : '' }}}">
  {{ Form::label('website', 'Website', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::text('website', Input::old('website'), array('class' => 'form-control')) }}
    @if($errors->has('website'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('website') }}
    </div>
    @endif
  </div>
</div>

<!-- Address Home -->
<div class="form-group {{{ $errors->has('address_home') ? 'error' : '' }}}">
  {{ Form::label('address_home', 'Address Home', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::textarea('address_home', Input::old('address_home'), array('class' => 'form-control')) }}
    @if($errors->has('address_home'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('address_home') }}
    </div>
    @endif
  </div>
</div>

<!-- Address Work -->
<div class="form-group {{{ $errors->has('address_work') ? 'error' : '' }}}">
  {{ Form::label('address_work', 'Address Work', array('class' => 'col-sm-2 control-label')) }}

  <div class="col-sm-3">
    {{ Form::textarea('address_work', Input::old('address_work'), array('class' => 'form-control')) }}
    @if($errors->has('address_work'))
    <br />
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
      {{ $errors->first('address_work') }}
    </div>
    @endif
  </div>
</div>

<!-- Add button -->
<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    {{ Form::submit('Add', array('class' => 'btn btn-success')) }}
  </div>
</div>

{{ Form::close() }}
@stop
