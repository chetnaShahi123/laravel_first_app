@extends('layouts.default')

@section('content') 
  <div class="container">
  <form class="form-horizontal" method="POST" action="{{action('UserController@update', $user->id) }}" >
  <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <h1>User {{ $user->id }}</h1>

 <!-- <div class="form-group{{ $errors->has('make') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>

                @if ($errors->has('name'))
                     <span class="help-block">
                         <strong>{{ $errors->first('name') }}</strong>
                     </span>
                @endif
        </div>
    </div> -->



    <div  class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">Name: </label>
        <div class="col-md-6"> 
        <input type="text" value='{{ $user->name }}' class="form-control" id="name" name="name" required autofocus/>
        </div>      
    </div>
    <div  class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-md-4 control-label">Email: </label>
        <div class="col-md-6"> 
        <input type="email" value='{{ $user->email }}' id="email" class="form-control" name="email"/>
        </div>    
    </div>
    <div  class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" class="col-md-4 control-label">Password: </label>
        <div class="col-md-6"> 
        <input type="password" value='{{ $user->password }}' id="password" name="password" class="form-control"/>
        </div>    
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Update User
            </button>

        </div>
    </div>

</form>
</div>
@endsection 