@extends('admin.layout.master')
@section('content')
<div class="row ms-3 mt-3 me-3">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center text-success">Assignable Stuffs</h3>
          <div class="table-responsive">
                <table id="CRM_DATATABLE" class="table">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Project ID</th>
                            <th>Stuff ID</th>
                            <th>Working Commission</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                <tbody>
                @foreach($collection as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->Projectid}}</td>
                        <td>{{$item->Stuffid}}</td>
                        <td>{{$item->WorkingCommission}}</td>
                        <td>
                          <div class="d-flex">
                              <a href="{{ url('admin/StuffAssignforProject/' . $item->id . '/edit') }}" class="btn btn-success me-2">Edit</a>
                              <a href="{{ url('admin/StuffAssignforProject/' . $item->id) }}"class="btn btn-info me-2">show</a>
                                  <form action="{{ url('admin/StuffAssignforProject/' . $item->id) }}" method="post">
                                  {{method_field('Delete')}}
                                  {{csrf_field()}}
                                  <button type="submit" class="btn btn-danger me-2">Delete</button>
                              </form>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
