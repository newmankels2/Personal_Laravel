<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodDelivery;
use Illuminate\Http\Request;

class FoodDeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foodDeliveries = FoodDelivery::with('customerOrder')
            ->paginate(2);

        return $foodDeliveries;
        return view('admin.food_del.index', compact('foodDeliveries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food_del.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodDelivery  $foodDelivery
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodDelivery $foodDelivery)
    {
        return view('admin.food_del.edit', compact('foodDelivery'));
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

        return redirect()
            ->route('food-delivery.index')
            ->with('message', 'Food Delivery cancelled ');
    }
}
