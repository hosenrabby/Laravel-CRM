<?php

namespace App\Http\Controllers;

use App\Models\StuffAssignforProject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StuffAssignforProjectController extends Controller
{
    
    public function index()
    {
        $data =(new StuffAssignforProject())->all();
        return view('admin.StuffAssignforProject.index')->with('collection', $data);
    }

    public function create()
    {
        return view('admin.StuffAssignforProject.create');
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
