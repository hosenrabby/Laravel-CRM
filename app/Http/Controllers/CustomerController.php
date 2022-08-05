<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        // $status= customer::all();
        $status= customer::where('lastStatus' , 'As Pending')->get();
        // return view('admin.customer.index')->with('data' , $status);
        return view('admin.customer.index' , compact('status'));
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store(Request $request)
    {
        $input= $request->all();

        customer::create($input);
        return redirect('admin/customer')->with('flash_message','customer Added');
    }

    public function show( $id)
    {
        $input = customer::find($id);
        return view('admin.customer.show')->with('customer',$input);
    }

    public function edit($id)
    {
        $customer = customer::find($id);
        $input = customer::all();
        return view('admin.customer.edit' , compact('customer' , 'input'));
    }

    public function update(Request $request,  $id)
    {
        $customer = customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('admin/customer')->with('flash_message', 'Customer Updated!');
    }

    public function destroy($id)
    {
        customer::destroy($id);
        return redirect('admin/customer')->with('flash_message', 'customer deleted!');
    }
}
