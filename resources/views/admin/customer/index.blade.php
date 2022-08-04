@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-success">All Customer</h3>
                        <div class="table-responsive">

                            <table id="CRM_DATATABLE" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Company Name</th>
                                        <th>ContactNo</th>
                                        <th>EmailId</th>
                                        <th>LocationCity</th>
                                        <th>Office Address</th>
                                        <th>Business Type</th>
                                        <th>Last Status</th>
                                        <th colspan="3">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customer as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->customerName }}</td>
                                            <td>{{ $item->companyName }}</td>
                                            <td>{{ $item->contactNo }}</td>
                                            <td>{{ $item->emailId }}</td>
                                            <td>{{ $item->locationCity }}</td>
                                            <td>{{ $item->officeAddress }}</td>
                                            <td>{{ $item->businessType }}</td>
                                            <td>{{ $item->lastStatus }}</td>
                                            <td>
                                                <a href="{{ url('admin/customer/' . $item->id) }}" class="btn btn-info"><i
                                                        class="fa-solid fa-magnifying-glass"></i></a>

                                                <a href="{{ url('admin/customer/' . $item->id . '/edit') }}"
                                                    class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                            </td>
                                            <td>
                                                <form method="post" action="{{ url('admin/customer/' . $item->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa-solid fa-trash-can"></i></button>
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
