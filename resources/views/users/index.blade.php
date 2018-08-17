@extends('layouts.default')

@section('content')

    <div class="container">

<nav class="navbar navbar-inverse">
    <!-- <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('cars') }}">Car Alert</a>
    </div> -->
    <ul class="nav navbar-nav">
        <!-- <li><a href="{{ URL::to('cars') }}">View All Cars</a></li> -->
        <li><a href="{{ URL::to('users/create') }}">Add User</a>
    </ul>
</nav>

<h1>List of Users</h1>

<!-- will be used to show any messages -->
<!-- <div class="flash_msg">
@if (Session::has('flash_message'))
    <div class="alert alert-info">{{ Session::get('flash_message') }}</div>
@endif
</div> -->

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date of Joining</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody> 
    @foreach($users as $key => $user) 
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

             
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $user->id) }}">View</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ route('users.edit', $user->id) }}">Edit</a>

                   <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- <a class="btn btn-small btn-danger" href="{{ route('users.destroy', $user->id) }}">Delete</a> -->
            <a class="delete_record"> {!! Form::open([
                    'method' => 'DELETE',
                     'route' => ['users.destroy', $user->id]
            ]) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-small btn-danger']) !!}
            {!! Form::close() !!} 
            </a>

            </td>
        </tr>
    @endforeach 
    </tbody>
</table>

</div>
@endsection