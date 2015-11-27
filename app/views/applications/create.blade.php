@extends('layout')
@section('scripts')
<script type="text/javascript" src="{{ asset('js/search.js') }}"></script>
@stop
@section('content')
{{ Form::open(array('action' => 'ApplicationController@show')) }}

    <div class="form-group" onkeydown="down()" onkeyup="up()">
    	<label>Search By:</label>
    	<select id='searchparam'>
    		<option value="searchby">--SEARCH BY--</option>
    		<option value="organization_name">Organization's Name</option>
    		<option value="location_state">Location</option>
    		<option value="qualification">Qualification</option>
    		<option value="job_title">Job Title</option>
    	</select>
        <input type="text" id="searchinput" />
        <div id="search-results"></div>
    </div>

{{ Form::close() }}
@stop