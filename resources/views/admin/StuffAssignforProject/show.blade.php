@extends('admin.layout.master')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center text-success">All Stuff</h3>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
                <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Project ID</th>
                        <th>Stuff ID</th>
                        <th>Working Commission</th>
                        
                    
                    </tr>
                 </thead>
              <tbody>
               
                  <tr>
        
                      <td>{{$info->id}}</td>
                      <td>{{$info->Projectid}}</td>
                      <td>{{$info->Stuffid}}</td>
                      <td>{{$info->WorkingCommission}}</td>
                      
                     
                </tr> 
                  
              </tbody>
            </table>
            <a href="{{url('admin/StuffAssignforProject')}}" class="btn btn-success">Back</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection