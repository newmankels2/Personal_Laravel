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
        $request->validate([
            'customer_order_id' => 'required',
            'order_time' => 'required',
            'estimated_delivery_time' => 'required',
            'food_ready' => 'required',
            'actually_delivery_time' => 'required',
            'delivery_address' => 'required',
        ]);

        $foodDel = new FoodDelivery();
        $foodDel->customer_order_id = $request->customer_order_id; 
        $foodDel->order_time = $request->order_time; 
        $foodDel->estimated_delivery_time = $request->estimated_delivery_time; 
        $foodDel->food_ready = $request->food_ready; 
        $foodDel->actually_delivery_time = $request->actually_delivery_time; 
        $foodDel->delivery_address = $request->delivery_address;
        $foodDel->save();
        
        return response()->json([
            'status' => 200,
            'message' => 'Food Delivery recorded'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodDelivery  $foodDelivery
     * @return \Illuminate\Http\Response
     */
    public function show(FoodDelivery $foodDelivery)
    {
        return response()->json([
            'status' => 201,
            'message' => $foodDelivery
        ]);
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
        $foodDelivery->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Food Delivery deleted'
        ]);
    }
}
