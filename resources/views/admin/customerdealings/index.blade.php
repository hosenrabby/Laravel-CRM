@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-success">All Customer Dealings</h3>
                        <div class="table-responsive">
                            <a href="{{ url('admin/customerdealings/create') }}" class="btn btn-info mt-4">New Deals</a>
                            <table id="CRM_DATATABLE" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Customer Name</th>
                                        <th>Stuff Name</th>
                                        <th>Latest Information</th>
                                        <th>Update Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($custoDealData as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->customerName }}</td>
                                            <td>{{ $item->stuffName }}</td>
                                            <td>{{ $item->latestInformation }}</td>
                                            <td>{{ $item->created_at }}</td>
                                            <td>
                                                <a href="{{ url('admin/customerdealings/' . $item->id.'/edit') }}"
                                                    class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>

                                                <form method="post" action="{{ url('admin/customer/' . $item->id) }}">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
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
