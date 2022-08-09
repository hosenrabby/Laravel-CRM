<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stuff_type_mng;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\stuffRequest;
use App\Http\Controllers\Controller;
use App\Models\stuffManagementModel;

class StuffManagementModelController extends Controller
{

    public function index()
    {
        $stufType = DB::table('stuff_management_models')
        ->leftJoin('stuff_type_mng' , 'stuff_type_mng.id' , '=' , 'stuff_management_models.stuffTypeId')->get();
        return view('admin.stuffManagement.stuffIndex', compact('stufType'));
    }

    public function create()
    {
        $stuffType = stuff_type_mng::all();
        return view('admin.stuffManagement.stuffCreate', compact('stuffType'));
    }

    public function store(Request $request)
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
