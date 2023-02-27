<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin._staff.add');
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
            'staff_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'Gender' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

          Staff::create([
            'staff_id'=>$request->staff_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'Gender'=>$request->Gender,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address
          ]);
          return redirect('/admin/staff')->with('success','Record Inserted Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $staff = Staff::paginate(6);
        return view('admin._staff.show')->with('Staffs',$staff);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $staff = Staff::find($id);
       return view('admin._staff.update')->with('staffs',$staff);
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
            'staff_id' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'Gender' => 'required',
            'phone' => 'required|numeric',
                     'regex:/^\+?\d{10,}$/',
            'email' => 'required',
        ]);

        $staff = Staff::find($id);
        $staff-> staff_id=$request->staff_id;
        $staff-> first_name=$request->first_name;
        $staff->last_name=$request->last_name;
        $staff->Gender=$request->Gender;
        $staff->phone=$request->phone;
        $staff->email=$request->email;
        $staff->address=$request->address;
        $staff->save();

       return redirect('/admin/staff/show');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Staff::find($id);
        if(!is_null($data)){
          $data->delete();
        }
        return redirect()->back();
    }
}
