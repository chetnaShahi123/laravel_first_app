<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $cars = Car::all();
        return view('cars.index', array('cars' => $cars));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // print_r($_POST['make']);die("fon");
       // Car::performInsert($_POST); print_r($_POST);die("fon");
        // Car::table('users')->insert(
        //     ['email' => 'john@example.com', 'votes' => 0]
        // );
        //
        $car = new Car;

        $car->make = $_POST['make'];
        $car->model = $_POST['model'];

        $car->save();
        Session::flash('flash_message', 'Car successfully added!');
      //  return redirect()->back();
        return redirect('cars');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)  //initially passed id
    { 
        //print_r($car);die;
       // $car = Car::find($id);
        return view('cars.show', array('car' => $car));
    //    return View::make('cars.show')->with('car' ,$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)   //initially used id
    { 
        
        //
        return view('cars.edit', array('car' => $car));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Car $car)
    { //echo"<pre>";print_r($car->make);die;
        //
        //$carr = new Car;
        $car->make = $request->get('make');
        $car->model = $request->get('model');
        $car->produced_on = $request->get('prod');

        $car->save();
        Session::flash('flash_message', 'Car successfully updated!');
      //return redirect()->back();
       return redirect('cars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
