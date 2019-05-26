<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    
    public function index()
    {

       // $departments = Department::orderBy('id', 'Desc')->paginate(5);

        //dd($department);

        return view('department.index');
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

 
    public function show($id)
    {
       $department = Department::find($id);

        return Response()->json(
            $department->toArray()
        );  }

 
    public function edit($id)
    {
        $department = Department::find($id);

        return Response()->json(
            $department->toArray()
        ); 
    }

  
    public function update(Request $request, $id)
    {
        $department = Department::find($id);
        $department->fill($request->all());
     
        $department->save();

        return response()->json([
            "Mensaje"=> "listo"
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *  @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
