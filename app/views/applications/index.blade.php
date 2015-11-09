@extends('layout')
@section('content')
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
    @foreach($applications as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->company_name }}</td>
            <td>{{ $value->post_name }}</td>
            <td>{{ $value->status }}</td>
            <td>{{ $value->start_date }}</td>
            <td>{{ $value->end_date }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('applications/' . $value->id) }}">Show this Application</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('applications/' . $value->id . '/edit') }}">Edit this Application</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@stop