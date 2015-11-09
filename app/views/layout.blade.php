<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
<script type="text/javascript" src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@yield('title')
</head>
<body>


<div class="header">
<div class="navbar-inner">
<div class="container">
<a class="btn btn-navbar" data-toggle="collapse"
data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<!-- Leave the brand out if you want it to be shown when other elements
are collapsed... -->
<a href="#" class="brand">Lagos Volunteer</a>
<!-- Everything that you want collapsed, should be added to the collapse
div. -->
<div class="nav-collapse collapse">
<!-- .nav, .navbar-search etc... -->
<ul class="nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
</ul>
</div>
</div>
@yield('content')
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"
aria-hidden="true">×</button>
<h3 id="myModalLabel">Log in</h3>
</div>
<div class="modal-body">
{{ HTML::ul($errors->all(), array('class'=>'errors'))}}
	{{ Form::open(array('url' => 'login')) }}
	{{ Form::label('Username or E-mail') }}
	{{ Form::text('username') }}
	<br />
	{{ Form::label('Password') }}
	<br />
	{{ Form::password('password') }}
</div>
<div class="modal-footer">
{{ Form::submit() }}
{{ Form::close() }}
</div>
</div>
<a href="#" role="button" class="btn" data-toggle="modal" onclick="$('#myModal').modal('toggle')">Launch demo
modal</a>
</body>
</html>