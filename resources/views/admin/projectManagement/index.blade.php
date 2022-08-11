@extends('layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-success">All Project</h3>
                        <div class="table-responsive">

                            <table id="CRM_DATATABLE" class="table">
                                <thead>
                                    <tr class="bg-light text-dark text-center">
                                        <th scope="col">Sl No</th>
                                        <th scope="col">Project Name</th>
                                        <th scope="col">Project Duration</th>
                                        <th scope="col">Project Feature</th>
                                        <th scope="col">Project Amount</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Project Delivery Date</th>
                                        <th scope="col">Project Logo</th>
                                        <th scope="col">Project Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($info as $item)
                                        <tr>
                                            <td< /td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->projectName }}</td>
                                                <td>{{ $item->projectDuration }}</td>
                                                <td>{{ $item->projectFeature }}</td>
                                                <td>{{ $item->projectAmount }}</td>
                                                <td>{{ $item->StartDate }}</td>
                                                <td>{{ $item->EndDate }}</td>
                                                <td>{{ $item->projectDeliveryDate }}</td>
                                                <td>{{ $item->projectLogo }}</td>
                                                <td>{{ $item->projectStatus }}</td>
                                                <td>
                                                    <a href="{{ url('admin/projectManagement/' . $item->id) }}"
                                                        class="btn btn-info">Show</a>
                                                    <a href="{{ url('admin/projectManagement/' . $item->id . '/edit') }}"
                                                        class="btn btn-success">Edit</a>
                                                    <form method="post"
                                                        action="{{ url('admin/projectManagement/' . $item->id) }}">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                        <form>

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
