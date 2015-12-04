@extends('layout')
@section('content')
<div class="content">
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Company Name</td>
            <td>Post Name</td>
            <td>Status</td>
            <td>Start Date</td>
            <td>End Date</td>
        </tr>
    </thead>
    <tbody>
    @foreach($applications as $application)
        <tr>
            <td>{{ $application->id }}</td>
            <td>{{ $application->organization_name }}</td>
            <td>{{ $application->job_title }}</td>
            <td>{{ $application->status }}</td>
            <td>{{ $application->start_date }}</td>
            <td>{{ $application->end_date }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <div class="btn-group">
                <a class="button success" href="{{ URL::to('applications/' . $application->id) }}">Show</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="button info" href="{{ URL::to('applications/' . $application->id . '/edit') }}">Edit</a>
                
                <a class="button danger" href="{{ URL::to('applications/' . $application->id . '/delete') }}">Cancel</a>
                </div>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@stop