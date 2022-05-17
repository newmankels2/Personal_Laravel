<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomerOrder;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class CustomerOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customerOrders = CustomerOrder::query()
            ->latest()
            ->paginate(5);

        return view('admin.cust_order.index', compact('customerOrders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cust_order.create');
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
            'cust_first_name' => 'required',
            'cust_last_name' => 'required',
            'address' => 'required',
            'contact_phone' => 'required',
            'customer_email' => 'required'
        ]);
        // return $request;

        $cusOrders = new CustomerOrder();
        $cusOrders->cust_first_name = $request->cust_first_name;
        $cusOrders->cust_last_name = $request->cust_last_name;
        $cusOrders->address = $request->address;
        $cusOrders->contact_phone = $request->contact_phone;
        $cusOrders->customer_email = $request->customer_email;
        $cusOrders->save();

        Alert::success('Success', 'Customer order created succesfully');

        return redirect()->route('customer-order.index')->with('message', 'Customer details recorded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerOrder $customerOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerOrder $customerOrder)
    {
        return view('admin.cust_order.edit', compact('customerOrder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerOrder $customerOrder)
    {
        $request->validate([
            'cust_first_name' => 'required',
            'cust_last_name' => 'required',
            'address' => 'required',
            'contact_phone' => 'required',
            'customer_email' => 'required'
        ]);
        // return $request;

        $customerOrder->update($request->all());

        return redirect()->route('customer-order.index')->with('message', 'Customer details recorded');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomerOrder  $customerOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerOrder $customerOrder)
    {
        $customerOrder->delete();
        return redirect()
            ->route('customer-order.index')
            ->with('message', 'Customer Order delted successfully');
    }
}
