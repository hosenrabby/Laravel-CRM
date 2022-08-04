<?php

namespace App\Http\Controllers;

use App\Models\stuff_type_mng;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StuffTypeMngController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $input= stuff_type_mng::all();
        return view('admin.stuffTypeManagement.index')->with('stuffType', $input);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.stuffTypeManagement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input= $request->all();

        stuff_type_mng::create($input);
        return redirect('admin/stuffType')->with('flash_message','Stuff Type Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\stuffTypeManagement  $stuffTypeManagement
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $input = stuff_type_mng::find($id);
        return view('admin.stuffTypeManagement.show')->with('stuffType',$input);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\stuffTypeManagement  $stuffTypeManagement
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $input = stuff_type_mng::find($id);
        return view('admin.stuffTypeManagement.edit')->with('stuffType',$input);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\stuffTypeManagement  $stuffTypeManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $stuffType = stuff_type_mng::find($id);
        $input = $request->all();
        $stuffType->update($input);
        return redirect('admin/stuffType')->with('flash_message', 'stuffType Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\stuffTypeManagement  $stuffTypeManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        stuff_type_mng::destroy($id);
        return redirect('admin/stuffType')->with('flash_message', 'stuffType deleted!');
    }
}
