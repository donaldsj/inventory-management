<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventory;
use Session;




class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = inventory::all();
        return view('inventories.index')->withInventories($inventories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'type' => 'required|max:255',
            'name' => 'required|max:255',
            'description' => 'required',
            'located_at' => 'required|max:255'
        ));
        //creating new model
        $inventory = new inventory;
        $inventory->type = $request->get('type');
        $inventory->name = $request->get('name');
        $inventory->description = $request->get('description');
        $inventory->located_at = $request->get('located_at');

        $inventory->save();

        Session::flash('success','Item successfully Added');

        return redirect()->route('inventories.show', $inventory->id);

    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inventory = inventory::find($id);
        return view('inventories.show')->withInventory($inventory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
