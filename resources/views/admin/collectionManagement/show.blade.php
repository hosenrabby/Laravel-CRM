@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center text-success">Show Stuff Type</h3>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
            <thead>
                <tr class="bg-light text-dark">
                    <th>Id</th>
                    <th>Project ID</th>
                    <th>Customer ID</th>
                    <th>Collection Amount</th>
                    <th>Collection Date</th>
                    <th>Collection Note</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$collectionManage->id}}</td>
                    <td>{{$collectionManage->projectId}}</td>
                    <td>{{$collectionManage->customerId}}</td>
                    <td>{{$collectionManage->collectionAmount}}</td>
                    <td>{{$collectionManage->collectionDate}}</td>
                    <td>{{$collectionManage->collectionNote}}</td>
                </tr>
            </tbody>
        </table>

          </div>
        </div>
      </div>
    </div>
</div>

@endsection
