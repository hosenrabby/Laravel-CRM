@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center text-success">All Collection Management</h3>
                        <div class="table-responsive">

                            <table id="CRM_DATATABLE" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Project ID</th>
                                        <th>Customer ID</th>
                                        <th>Collection Amount</th>
                                        <th>Collection Date</th>
                                        <th>Collection Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collectionManage as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->projectId }}</td>
                                            <td>{{ $item->customerId }}</td>
                                            <td>{{ $item->collectionAmount }}</td>
                                            <td>{{ $item->collectionDate }}</td>
                                            <td>{{ $item->collectionNote }}</td>
                                            <td>
                                                <a href="{{ url('admin/collectionManagement/' . $item->id) }}"
                                                    class="btn btn-info">Show</a>
                                                <a href="{{ url('admin/collectionManagement/' . $item->id . '/edit') }}"
                                                    class="btn btn-success">Edit</a>
                                                <form method="post" action="{{ url('admin/collectionManagement/' . $item->id) }}">
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
