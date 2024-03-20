<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BuyerListRequest;
use Illuminate\Http\Request;
use App\Models\BuyerListModel;

class BuyerListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 	BuyerListModel::all();
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
    public function store(BuyerListRequest $request)
    {
            //Retrieve the validated input data...
	    $validated = $request->validated();

	    $buyerItem=BuyerListModel::create($validated);
	    return $buyerItem;
}

    /**
     * Display the specified resource.
     */
     public function show(string $partID)
    {
         return BuyerListModel::findOrfail($partID);

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
    public function update(BuyerListRequest $request, string $id)
    {
        $validated = $request->validated();
	
        $buyerItem = BuyerListModel::findOrFail($id);
        $buyerItem->update($validated);
    
    return $buyerItem;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buyerItem=BuyerListModel::findorFail($id);
        $buyerItem->delete();
    
        return $buyerItem;
    }
}
