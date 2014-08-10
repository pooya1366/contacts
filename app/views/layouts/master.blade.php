<!DOCTYPE html>
<html>
<head>
  <title>
    @section('title')
    Contacts App
    @show
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- CSS are placed here -->
  {{ HTML::style('css/bootstrap.css') }}

  <style>
    @section('styles')
    body {
      padding-top: 60px;
    }
    @show
  </style>
</head>

<body>
<!-- Navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="{{{ URL::to('') }}}" class="navbar-brand" href="#">Contact App</a>
    </div>
    <!-- Everything you want hidden at 940px or less, place within here -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        @if ( Auth::guest() )
        <li>{{ HTML::linkAction('AuthController@showLogin', 'Login') }}</li>
        <li>{{ HTML::linkAction('AccountController@getCreateAccount', 'Create Account') }}</li>
        @else
        <li>{{ HTML::linkAction('AuthController@getLogout', 'Logout') }}</li>
        @endif
      </ul>
    </div>
  </div>
</div>

<!-- Container -->
<div class="container">

  <!-- Success-Messages -->
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    <strong>Success!</strong> {{{ $message }}}
  </div>
  @endif

  <!-- Content -->
  @yield('content')

</div>

<!-- Scripts are placed here -->
{{ HTML::script('js/jquery-1.11.1.min.js') }}
{{ HTML::script('js/bootstrap.min.js') }}

</body>
</html>