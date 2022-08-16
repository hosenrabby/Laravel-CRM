@extends('layout.master')
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

                                    <td>{{ $stuffAssign->id }}</td>
                                    <td>{{ $stuffAssign->Projectid }}</td>
                                    <td>{{ $stuffAssign->Stuffid }}</td>
                                    <td>{{ $stuffAssign->WorkingCommission }}</td>


                                </tr>

                            </tbody>
                        </table>
                        <a href="{{ url('admin/StuffAssignforProject') }}" class="btn btn-success">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
