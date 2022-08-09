<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\customer_dealling;
use App\Models\stuffManagementModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CustomerDeallingController extends Controller
{
    public function index()
    {
        // $data = customer_dealling::all();
        $custoDealData = DB::table('customer_deallings')
        ->leftJoin('customers' , 'customers.id' , '=' , 'customer_deallings.customerId')
        ->leftJoin('stuff_management_models' , 'stuff_management_models.id' , '=' , 'customer_deallings.stuffId')
        ->get();
        return view('admin.customerdealings.index', compact('custoDealData'));
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
    public function edit(Request $request , $id)
    {
        $dealCusto = customer_dealling::find($id);
        $custoName = customer::all();
        $stuffName = stuffManagementModel::all();
        return view('admin.customerdealings.dealEdit' , compact('dealCusto','custoName','stuffName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer_dealling  $customer_dealling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        customer_dealling::create($input);
        return redirect('admin/customerdealings')->with('flash_message' , 'New Schidule set..');
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
