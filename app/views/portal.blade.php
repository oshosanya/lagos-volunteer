@extends('layout')
@section('title')
<title>Volunteer Portal</title>
@stop

@section('content')
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab1" data-toggle="tab">My Applications</a></li>
<li><a href="#tab2" data-toggle="tab">Active List</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab1">
<p>This tab shows the Volunteer positions already applied for and their status</p>
</div>
<div class="tab-pane" id="tab2">
<p>This tab shows the active volunteering positions and their schedule</p>
</div>
</div>
</div>
@stop