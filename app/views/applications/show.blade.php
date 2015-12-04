@extends('layout')
@section('title')
@stop
@section('content')
<h3>{{$volunteeringpost->organization_name}}</h3>
<p><b>Description:</b>{{$volunteeringpost->job_title}}</p>
<p><b>Description:</b>{{$volunteeringpost->description}}</p>
    <div class="accordion" data-role="accordion">
        <div class="frame">
            <div class="heading">Requirements and Qualifications</div>
            <div class="content">
            <p><b>Requirements:</b>{{$volunteeringpost->requirements}}</p>
            <p><b>Qualifications:</b>{{$volunteeringpost->qualification}}</p>
            </div>
        </div>
        <div class="frame">
            <div class="heading">Duration</div>
            <div class="content">
            <p><b>Duration:</b>{{$volunteeringpost->duration}}</p>
            <p><b>Start Date:</b>{{$volunteeringpost->start_date}}</p>
            <p><b>End Date:</b>{{$volunteeringpost->end_date}}</p>
            </div>
        </div>
        <div class="frame">
            <div class="heading">Location</div>
            <div class="content">
            <p id="a"><b>State:</b>{{$volunteeringpost->location_state}}</p>
            <p><b>LGA:</b>{{$volunteeringpost->location_lga}}</p>
            </div>
        </div>

    </div>
    <p id="app-value" style="display: none;">{{$volunteeringpost->id}}</p>
    <button type="button" class="button success" onclick="apply()">Apply</button>


    <div class="dialog" id="dialog" data-type="success" data-close-button="true" data-role="dialog" style="width: auto; height: auto; visibility: visible; left: 142px; top: 206px;">
        <h3>LAG Volunteer</h3>
        <p>Post applied for.</p>
    </div>

    <div class="dialog" data-type="alert" data-close-button="true" data-role="dialog" style="width: auto; height: auto; visibility: visible; left: 142px; top: 206px;" id="dialog2">
    	<h3>LAG Volunteer</h3>
    	<p>You have previously applied for this post.</p>
    </div>


@stop