@extends('layouts.default')

@section('content')
<div class="container">

<!-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Car Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cars') }}">View All Cars</a></li>
        <li><a href="{{ URL::to('cars/create') }}">Create a Car</a>
    </ul>
</nav> -->

<h1>Add User</h1>

<!-- if there are creation errors, they will show here -->


<form class="form-horizontal" method="POST" action="{{ route('users.store') }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group{{ $errors->has('make') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                @if ($errors->has('name'))
                     <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Email</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                @if ($errors->has('email'))
                     <span class="help-block">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" value="" required autofocus>

                @if ($errors->has('password'))
                     <span class="help-block">
                         <strong>{{ $errors->first('password') }}</strong>
                     </span>
                @endif
        </div>
    </div>

   <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>

                            </div>
        </div>

</form>

</div>
@endsection 
