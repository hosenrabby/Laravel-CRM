@extends('admin.layout.master')
@section('content')
<div class="container mt-5">
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center text-success">All Customer Dealings</h3>
          <div class="table-responsive">

            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Customer Id</th>
                  <th>Latest Information</th>
                  <th>Update Date</th>
                  <th>Stuff Id</th>

                </tr>
              </thead>
              <tbody>
                  @foreach ($custdealings as $item)
                  <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$item->customerId}}</td>
                      <td>{{$item->latestInformation}}</td>
                        <td>{{$item->updateDate}}</td>
                        <td>{{$item->stuffId}}</td>



             </tr>

                   @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  @endsection
