<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingVehicle;
class BookingVehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.bookingvehicle.add');
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
        $validated = $request->validate([
            'Vehicale_id' => 'required',
            'name' => 'required',
            'Driver_License' => 'required',
            'phone' => 'required',
            'start_date'=>'required',
            'end_date'=>'required',

        ]);
        BookingVehicle::create([
            'Vehicale_id'=>$request->Vehicale_id,
            'name'=>$request->name,
            'Driver_License'=>$request->Driver_License,
            'phone'=>$request->phone,
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date
        ]);

        return redirect('admin/bookingevhicle')->with('success','Record Inserted Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $data = BookingVehicle::paginate(6);
        return view('admin.bookingvehicle.show')->with('BookingVehicle',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data = BookingVehicle::find($id);
       return view('admin.bookingvehicle.update')->with('BookingVehicle',$data);
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

        $validated = $request->validate([
            'Vehicale_id' => 'required',
            'name' => 'required',
            'Driver_License' => 'required',
            'phone' => 'required',
            'start_date'=>'required',
            'end_date'=>'required',

        ]);

        $booking = BookingVehicle::find($id);
        $booking->Vehicale_id=$request->Vehicale_id;
        $booking->name=$request->name;
        $booking->Driver_License=$request->Driver_License;
        $booking->phone=$request->phone;
        $booking->start_date=$request->start_date;
        $booking->end_date=$request->end_date;
        $booking->save();
  return redirect('admin/bookingevhicle/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=BookingVehicle::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
