<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\FoodDelivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allFoodDeliveries = FoodDelivery::all();

        return response()->json([
            'status' => 200,
            'data' => $allFoodDeliveries
        ]);
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodDelivery  $foodDelivery
     * @return \Illuminate\Http\Response
     */
    public function show(FoodDelivery $foodDelivery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodDelivery  $foodDelivery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodDelivery $foodDelivery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodDelivery  $foodDelivery
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodDelivery $foodDelivery)
    {
        //
    }
}
