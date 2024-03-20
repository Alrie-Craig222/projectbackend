<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartsListRequest;
use Illuminate\Http\Request;
use App\Models\PartsListModel;


class PartsListController extends Controller
{
/**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 	PartsListModel::all();
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
    public function store(PartsListRequest $request)
    {
            //Retrieve the validated input data...
	    $validated = $request->validated();

	    $partsItem=PartsListModel::create($validated);
	    return $partsItem;
}

    /**
     * Display the specified resource.
     */
     public function show(string $vin)
    {
         return PartsListModel::findOrfail($vin);

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
    public function update(PartsListRequest $request, string $id)
    {
        $validated = $request->validated();
	
        $partsItem = PartsListModel::findOrFail($id);
        $partsItem->update($validated);
    
    return $partsItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partsItem=PartsListModel::findorFail($id);
        $partsItem->delete();
    
        return $partsItem;
    }
}
