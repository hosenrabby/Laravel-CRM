<?php

namespace App\Http\Controllers;

use App\Models\stuff_payment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StuffPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stuff=stuff_payment::all();
        return view('admin.stuffPaymentMgmt.stuffPaymentIndex')->with('stuffs', $stuff);
    }


    public function create()
    {
        return view('admin.stuffPaymentMgmt.stuffPaymentCreate');
    }

    public function store(Request $request)
    {
        $input=$request->all();
        stuff_payment::create($input);
        return redirect('admin/stuffPaymentMgmt')->with('flash-message', 'Stuff Added');
    }

    public function show($id)
    {
        $stuff=stuff_payment::find($id);
        return view('admin.stuffPaymentMgmt.stuffPaymentShow')->with('spmshow', $stuff);
    }


    public function edit($id)
    {
        $stuff=stuff_payment::find($id);
        return view('admin.stuffPaymentMgmt.stuffPaymentEdit')->with('spmedit', $stuff);
    }


    public function update(Request $request, $id)
    {
        $stuff=stuff_payment::find($id);
        $input=$request->all();
        $stuff->update($input);
        return redirect('admin/stuffPaymentMgmt')->with('flash-message', 'Stuff updated');
    }


    public function destroy($id)
    {
        stuff_payment::destroy($id);
        return redirect('admin/stuffPaymentMgmt')->with('flash-message', 'stuff deleted');
    }
}
