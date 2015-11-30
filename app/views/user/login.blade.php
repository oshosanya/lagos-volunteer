@extends('layout')
@section('script')
<script type="text/javascript">
	jQuery(document).ready(function() {
		$.post('/authuser/check', 
		{check: 'check'}, function(markup) 
			{
				if(markup == 'loggedin') {
					window.location.assign('/');
				}
			});
	});
</script>
@stop
@section('content')
<form class="c-form">
<p id="errorlog"></p>
<div class="flex-grid">
<div class="row flex-just-center">
<div class="cell colspan4">
<div class="input-control text full-size">
	<label>Username:</label>
    <input type="text" id="username">
</div>
</div>
</div>
<br />
<div class="row flex-just-center">
<div class="cell colspan4">
<div class="input-control text full-size">
	<label>Password:</label>
    <input type="password" id="password" class="colspan2">
</div>
</div>
</div>
<div class="row flex-just-center">
<button type="button" class="button success" onclick="loginuser()"><span class="mif-checkmark"></span>Login</button>
</div>

</form>

@stop