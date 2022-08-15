<?php

namespace App\Http\Controllers;
use App\Models\projectManagement;
use App\Models\stuffManagementModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class StuffAssignforProjectController extends Controller
{
    
    public function index()
    {
        $stufAssign = DB::table('project_management')
        ->leftJoin('projectManagement' , 'projectManagement.id' , '=' , 'StuffAssignforProject.projectName')
        ->leftJoin('stuffManagementModel', 'stuffManagementModel.id', '=', 'StuffAssignforProject.stuffName')->get();
        return view('admin.StuffAssignforProject.index', compact('stufAssign'));
    }

    public function create()
    {
        $stufAssign = projectManagement::all();
        $stuffAssign=stuffManagementModel::all();
        return view('admin.StuffAssignforProject.create', compact('stufAssign', 'stuffAssign'));
    }

    
    public function store(Request $request)
    {
        $store = $request->all();
        StuffAssignforProject::create($store);
        return redirect('admin/StuffAssignforProject')->with('info', $store);
    }

   
    public function show(StuffAssignforProject $StuffAssignforProject)
    {
       
        return view('admin.StuffAssignforProject.show')->with('info', $StuffAssignforProject);
    }

    
    public function edit($id)
    {
        $stuff=StuffAssignforProject::find($id);
        return view('admin.StuffAssignforProject.edit')->with('info', $stuff);
    }

    
    public function update(Request $request, StuffAssignforProject $StuffAssignforProject)
    {
        $StuffAssignforProject->update($request->all());
        return redirect('admin/StuffAssignforProject')->with('flash-message', 'Stuff updated');
    }

    public function destroy($id)
    {
        StuffAssignforProject::whereId($id)->delete();
        return back();
    }
}
