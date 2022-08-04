<?php

namespace App\Http\Controllers;

use App\Models\customer_dealling;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerDeallingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = customer_dealling::all();
        return view('admin.customerdealings.index')->with('custdealings', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\customer_dealling  $customer_dealling
     * @return \Illuminate\Http\Response
     */
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
