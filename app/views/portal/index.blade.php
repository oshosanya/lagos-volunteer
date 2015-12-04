@extends('layout')
@section('title')
<title>Volunteer Portal | LAG Volunteer</title>
@stop

@section('content')

<h3>Suggested Volunteering Posts</h3>
<table class="table striped hovered">
    <thead>
        <tr>
            <td>Organization's Name</td>
            <td>Job Title</td>
            <td>Duration</td>
            <td>State</td>
            <td>Start Date</td>
            <td>End Date</td>

        </tr>
    </thead>
    <tbody>
    @foreach($volunteeringposts as $volunteeringpost)
        <tr>
            <td>{{ $volunteeringpost->organization_name }}</td>
            <td>{{ $volunteeringpost->job_title }}</td>
            <td>{{ $volunteeringpost->duration }}</td>
            <td>{{ $volunteeringpost->location_state }}</td>
            <td>{{ $volunteeringpost->start_date }}</td>
            <td>{{ $volunteeringpost->end_date }}</td>
            <td>
                <div class="btn-group">
                <a class="button success" href="/applications/show/{{$volunteeringpost->id}}">View</a>
                </div>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop