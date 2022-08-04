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
                    <th scope="col">Id</th>
                    <th scope="col">Stuff Type</th>
                    <th scope="col">Stuff Type Code</th>
                    <th scope="col">Basic Salary</th>
                    <th scope="col">Working Commission</th>




                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$stuffType->id}}</td>
                    <td>{{$stuffType->stuffType}}</td>
                    <td>{{$stuffType->stuffTypeCode}}</td>
                    <td>{{$stuffType->basicSalary}}</td>
                    <td>{{$stuffType->workingCommission}}</td>

                </tr>
            </tbody>
        </table>

          </div>
        </div>
      </div>
    </div>
</div>

@endsection
