@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-success">All Stuff Type</h3>
                        <div class="table-responsive">

                            <table id="CRM_DATATABLE" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Stuff Type</th>
                                        <th>Stuff Type Code</th>
                                        <th>Basic Salary</th>
                                        <th>Working Commission</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($stuffType as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->stuffType }}</td>
                                            <td>{{ $item->stuffTypeCode }}</td>
                                            <td>{{ $item->basicSalary }}</td>
                                            <td>{{ $item->workingCommission }}</td>


                                            <td>
                                                <a href="{{ url('admin/stuffType/' . $item->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ url('admin/stuffType/' . $item->id . '/edit') }}"
                                                    class="btn btn-success">Edit</a>
                                                <form method="post" action="{{ url('admin/stuffType/' . $item->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>

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
    </div>
@endsection
