@extends('layouts.default')

@section('content')
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Car Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('cars') }}">View All Cars</a></li>
        <li><a href="{{ URL::to('cars/create') }}">Create a Car</a>
    </ul>
</nav>

<h1>Create a Car</h1>

<!-- if there are creation errors, they will show here -->


<form class="form-horizontal" method="POST" action="{{ route('cars.store') }}" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group{{ $errors->has('make') ? ' has-error' : '' }}">
        <label for="make" class="col-md-4 control-label">Make</label>
        <div class="col-md-6">
            <input id="make" type="text" class="form-control" name="make" value="" required autofocus>

                @if ($errors->has('make'))
                     <span class="help-block">
                         <strong>{{ $errors->first('make') }}</strong>
                     </span>
                @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
        <label for="model" class="col-md-4 control-label">Model</label>
        <div class="col-md-6">
            <input id="model" type="text" class="form-control" name="model" value="" required autofocus>

                @if ($errors->has('model'))
                     <span class="help-block">
                         <strong>{{ $errors->first('model') }}</strong>
                     </span>
                @endif
        </div>
    </div>

   <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Car
                                </button>

                            </div>
        </div>

</form>

</div>
@endsection 
