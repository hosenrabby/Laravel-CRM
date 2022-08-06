<?php

namespace App\Http\Controllers;

use App\Models\stuffManagementModel;
use App\Http\Controllers\Controller;
use App\Http\Requests\stuffRequest;
use Illuminate\Http\Request;

class StuffManagementModelController extends Controller
{

    public function index()
    {
        $stuff=stuffManagementModel::all();
        // return view('admin.stuffManagement.stuffIndex')->with('stuffs', $stuff);
        return view('admin.stuffManagement.stuffIndex')->with('stuffs', $stuff);
    }

    public function create()
    {
        return view('admin.stuffManagement.stuffCreate');
    }

    public function store(stuffRequest $request)
    {
        $input=$request->all();
        stuffManagementModel::create($input);
        return redirect('admin/stuffManagement')->with('flash-message', 'Stuff Added');
    }


    public function show($id)
    {
        $stuff=stuffManagementModel::find($id);
        return view('admin.stuffManagement.stuffShow')->with('stuffshow', $stuff);
    }

    public function edit($id)
    {
        $stuff=stuffManagementModel::find($id);
        return view('admin.stuffManagement.stuffEdit')->with('stuffedit', $stuff);
    }

    public function update(stuffRequest $request, $id)
    {
        $stuff=stuffManagementModel::find($id);
        $input=$request->all();
        $stuff->update($input);
        return redirect('admin/stuffManagement')->with('flash-message', 'Stuff updated');
    }


    public function destroy($id)
    {
        stuffManagementModel::destroy($id);
        return redirect('admin/stuffManagement')->with('flash-message', 'stuff deleted');
    }
}
