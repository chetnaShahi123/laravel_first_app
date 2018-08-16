<!DOCTYPE html>
<html>
  <head>
    <title>Car {{ $car->id }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
  <div class="container">
  <form class="form-horizontal" method="POST" action="{{action('CarController@update', $car->id) }}" >
  <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
  <h1>Car {{ $car->id }}</h1>
    <div  form-group{{ $errors->has('make') ? ' has-error' : '' }}>
        <label for="make">Make: </label>
        <input type="text" value='{{ $car->make }}' id="make" name="make"/>
    </div>
    <div  form-group{{ $errors->has('make') ? ' has-error' : '' }}>
        <label for="model">Model: </label>
        <input type="text" value='{{ $car->model }}' id="model" name="model"/>
    </div>
    <div  form-group{{ $errors->has('make') ? ' has-error' : '' }}>
        <label for="prod">Produced On:: </label>
        <input type="text" value='{{ $car->produced_on }}' id="prod" name="prod"/>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Update Car
            </button>

        </div>
    </div>

</form>
</div>
  </body>
</html>