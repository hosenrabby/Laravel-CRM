@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h3 class="text-center text-success">Show Customer</h3>
          <div class="table-responsive">
            <table id="dataTableExample" class="table">
            <thead>
                <tr class="bg-light text-dark">
                    <th scope="col">Id</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">ContactNo</th>
                    <th scope="col">EmailId</th>
                    <th scope="col">LocationCity</th>
                    <th scope="col">Office Address</th>
                    <th scope="col">Business Type</th>
                    <th scope="col">Last Status</th>



                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->customerName}}</td>
                    <td>{{$customer->companyName}}</td>
                    <td>{{$customer->contactNo}}</td>
                    <td>{{$customer->emailId}}</td>
                    <td>{{$customer->locationCity}}</td>
                    <td>{{$customer->officeAddress}}</td>
                    <td>{{$customer->businessType}}</td>
                    <td>{{$customer->lastStatus}}</td>

                </tr>
            </tbody>
        </table>

          </div>
        </div>
      </div>
    </div>
</div>

@endsection
