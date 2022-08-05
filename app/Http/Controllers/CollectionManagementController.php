<?php

namespace App\Http\Controllers;

use App\Models\collectionManagement;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionManagementController extends Controller
{
    public function index()
    {
        $data = collectionManagement::all();
        return view('admin.collectionManagement.index')->with('collectionManage', $data);
    }

    public function create()
    {
        return view('admin.collectionManagement.create');
    }

    public function store(Request $request)
    {
        $input= $request->all();

        collectionManagement::create($input);
        return redirect('admin/collectionManagement')->with('flash_message','collection Added');
    }

    public function show( $id)
    {
        $input = collectionManagement::find($id);
        return view('admin.collectionManagement.show')->with('collectionManage',$input);
    }

    public function edit($id)
    {
        $collection = collectionManagement::find($id);
        return view('admin.collectionManagement.edit')->with('collectionManage' , $collection);
    }

    public function update(Request $request,  $id)
    {
        $collection = collectionManagement::find($id);
        $input = $request->all();
        $collection->update($input);
        return redirect('admin/collectionManagement')->with('flash_message', 'Collection Updated!');
    }

    public function destroy($id)
    {
        collectionManagement::destroy($id);
        return redirect('admin/collectionManagement')->with('flash_message', 'Collection deleted!');
    }
}
