<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.vehicle.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request ->validate([
            'plate_number' => 'required',
            'model' => 'required',
            'Status' => 'required',
            'Odometer' => 'required',
            'fuel_level' => 'required',
            'Condition' => 'required',
            'Last_serviced_date' => 'required',
        ]);

        Vehicle::create([
            'plate_number'=>$request->plate_number,
            'model'=>$request->model,
            'Status'=>$request->Status,
            'Odometer'=>$request->Odometer,
            'fuel_level'=>$request->fuel_level,
            'Condition'=>$request->Condition,
            'Last_serviced_date'=>$request->Last_serviced_date
          ]);
          return redirect('/admin/vehicle')->with('success','Record Inserted Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $vehicle = Vehicle::paginate(6);
        return view('admin.vehicle.show')->with('vehicles',$vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('admin.vehicle.update')->with('vehicles',$vehicle);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request ->validate([
            'plate_number' => 'required',
            'model' => 'required',
            'Status' => 'required',
            'Odometer' => 'required',
            'fuel_level' => 'required',
            'Condition' => 'required',
            'Last_serviced_date' => 'required',
        ]);
        $vehicle = Vehicle::find($id);
        $vehicle->plate_number=$request->plate_number;
        $vehicle->model=$request->model;
        $vehicle->Status=$request->Status;
        $vehicle->Odometer=$request->Odometer;
        $vehicle->fuel_level=$request->fuel_level;
        $vehicle->Condition=$request->Condition;
        $vehicle->Last_serviced_date=$request->Last_serviced_date;
        $vehicle->save();

       return redirect('/admin/vehicle/show');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Vehicle::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
