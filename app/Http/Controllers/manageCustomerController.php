<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class manageCustomerController extends Controller
{
    public function manageCustomer(){
        $match = ['lastStatus' => 'Moved'];
        $match1 = ['lastStatus' => 'ON Development'];
        $match2 = ['lastStatus' => 'Completed'];
        $manage = customer::where($match)->orwhere($match1)->orwhere($match2)->get();

        return view('admin.customer.manage_custo' , compact('manage'));
    }

    public function customerManageEdit($id)
    {
        $customer = customer::find($id);
        $input = customer::all();
        return view('admin.customer.managableCustoEdit' , compact('customer' , 'input'));
    }

    public function customerUpdate(Request $request,  $id)
    {
        $customer = customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('admin/manage-customer')->with('flash_message', 'Customer Updated!');
    }

    public function destroy($id){
        $delData = customer::find($id);
        $delData->delete();
        return redirect('admin/manage-customer')->with('flash_message', 'Customer Deleted!');
    }
}
