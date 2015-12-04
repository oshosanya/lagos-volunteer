@extends('layout')
@section('content')
<form class="c-form">
<div class="flex-grid">
<div class="row flex-just-left">
<div class="cell colspan3 horizontal">
<div class="input-control text full-size">
<label>Username:</label>
<input type="text" id="username">
</div>
</div>
<div class="cell colspan3 horizontal">
<div class="input-control text full-size">
<label>First Name</label>
<input type="text" id="first-name">
</div>
</div>
<div class="cell colspan3">
<div class="input-control text full-size">
<label>Last Name</label>
<input type="text" id="last-name">
</div>
</div>
</div>
<br />
<div class="row flex-just-left">
<div class="cell colspan5 horizontal">
<div class="input-control text full-size">
<label>Email</label>
<input type="text" id="email">
<div id="error-email"></div>
</div>
</div>
</div>
<br />
<div class="row flex-just-left">
<div class="cell colspan3 horizontal">
<div class="input-control text full-size">
<label>State of Residence</label>
<input type="text" id="state">
</div>
</div>
<div class="cell colspan3 horizontal">
<div class="input-control text full-size">
<label>Occupation</label>
<input type="text" id="occupation">
</div>
</div>
</div>
<br />
<div class="row flex-just-left">
<div class="cell colspan3 horizontal">
<div class="input-control password full-size">
<label>Password:</label>
<input type="password" id="password1">
<div id="password-requirements">
<i style="color:#f21313">Must be at least 6 characters long</i>
<br />
<i style="color:#f21313">Must have at least one number or sybmol</i>
</div>
</div>
</div>
</div>
<div class="cell colspan3 horizontal">
<div class="input-control password full-size">
<label>Confirm Password:</label>
<input type="password" id="password2">
<div id="password-match">
<i style="color:#f21313">Passwords must match</i>
</div>
</div>
</div>
</div>
<br />
<button type="button" class="button success" onclick="register()">Register</button>
</div>
</form>
@stop