<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\VehicleListRequest;
use Illuminate\Http\Request;
use App\Models\vehiclelistModel;

class vehiclelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 	vehiclelistModel::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VehicleListRequest $request)
    {
            //Retrieve the validated input data...
	    $validated = $request->validated();

	    $vehicleItem=vehiclelistModel::create($validated);
	    return $vehicleItem;
}

    /**
     * Display the specified resource.
     */
     public function show(string $vin)
    {
         return vehiclelistModel::findOrfail($vin);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VehicleListRequest $request, string $id)
    {
        $validated = $request->validated();
	
        $vehicleItem = vehiclelistModel::findOrFail($id);
        $vehicleItem->update($validated);
    
    return $vehicleItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vehicleItem=vehiclelistModel::findorFail($id);
        $vehicleItem->delete();
    
        return $vehicleItem;
    }
}
