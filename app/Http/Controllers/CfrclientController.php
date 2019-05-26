<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cfr_client;

class CfrclientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cfr_client.index');
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
        //
    }

   
    public function show($id)
    {
        $cfr_client = Cfr_client::find($id);

        //dd($cfr_client);
        
        return view('cfr_client.reporte', compact('cfr_client'));
    }

   
    public function edit($id)
    {
        $cfr_client = Cfr_client::find($id);

        return Response()->json(
            $cfr_client->toArray()
        ); 
    }

    
    public function update(Request $request, $id)
    {
        $cfr_client = cfr_client::find($id);
        $cfr_client->fill($request->all());
     
        $cfr_client->save();

        return response()->json([
            "Mensaje"=> "listo"
        ]);

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
