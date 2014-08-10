@extends('layouts.master')

@section('title')
@parent
:: Your Contacts List
@stop

@section('content')
<div class="page-header clearfix">
  <h1 class="pull-left">Your Contacts List</h1>
</div>
<div class="clearfix">
  <div class="pull-right">
    {{ HTML::linkAction('ContactsController@getCreateContact', 'Add New Contact', array(), array('class' => 'btn btn-primary')) }}
  </div>
  @if($contacts->isEmpty())
    <p>There are no contacts!</p>
  @else
    <table class="table">
      <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company</th>
        <th>CellPhone</th>
        <th>Home Tell</th>
        <th>Work Tell</th>
        <th>Email</th>
        <th>Website</th>
        <th>Address Home</th>
        <th>Address Work</th>
        <th>Actions</th>
      </thead>
      <tbody>
      @foreach($contacts as $contact)
       <tr>
         <td>{{ $contact->first_name }}</td>
         <td>{{ $contact->last_name }}</td>
         <td>{{ $contact->company }}</td>
         <td>{{ $contact->cellphone }}</td>
         <td>{{ $contact->home_tell }}</td>
         <td>{{ $contact->work_tell }}</td>
         <td>{{ $contact->email }}</td>
         <td>{{ $contact->website }}</td>
         <td>{{ $contact->address_home }}</td>
         <td>{{ $contact->address_work }}</td>
         <td>{{ HTML::linkAction('ContactsController@deleteContact', 'Delete', array($contact->id), array('class' => 'btn btn-danger btn-sm')) }}</td>
       </tr>
      @endforeach
      </tbody>
    </table>
  @endif
</div>
@stop