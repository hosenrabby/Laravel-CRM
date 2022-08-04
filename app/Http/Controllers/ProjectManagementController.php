<?php

namespace App\Http\Controllers;

use App\Models\projectManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectManagementController extends Controller
{
    public function index()
    {
        $data = projectManagement::all();
        return view('admin.projectManagement.index')->with('info', $data);
    }

    
    
    public function create()
    {
        return view('admin.projectManagement.create');
    }

    
    public function store(Request $request)
    {
        $data = $request->all();
        projectManagement::create($data);
        return redirect('admin/projectManagement')->with('Flass_message','Data Inserted');
    }

    
    
    public function show($id)
    {
        $data = projectManagement::find($id);
        return view('admin.projectManagement.show')->with('info',$data);
    }

   
    
    public function edit($id)
    {
        $data = projectManagement::find($id);
        return view('admin.projectManagement.edit')->with('info',$data);
    }

    
    
    public function update(Request $request, $id)
    {
        $data = projectManagement::find($id);
        $input = $request->all();
        $data->update($input);
        return redirect('admin/projectManagement')->with('flash_message', 'Data Update');
    }

   
    
    public function destroy($id)
    {
        projectManagement::destroy($id);
        return redirect('admin/projectManagement');
    }
}
