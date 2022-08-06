<?php

namespace App\Http\Controllers;

use App\Models\customer_dealling;
use App\Models\customer;
use App\Models\stuffManagementModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDeallingController extends Controller
{
    public function index()
    {
        $data = customer_dealling::all();
        return view('admin.customerdealings.index')->with('custdealings', $data);
    }

    public function create()
    {
        $custoName = customer::all();
        $stuffName = stuffManagementModel::all();
        return view('admin.customerdealings.newDealsCusto' , compact('custoName' , 'stuffName'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        customer_dealling::create($input);
        return redirect('admin/customerdealings')->with('flash_message' , 'New Schidule set..');
    }

    public function show(customer_dealling $customer_dealling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer_dealling  $customer_dealling
     * @return \Illuminate\Http\Response
     */
    public function edit(customer_dealling $customer_dealling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer_dealling  $customer_dealling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer_dealling $customer_dealling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer_dealling  $customer_dealling
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer_dealling $customer_dealling)
    {
        //
    }
}
