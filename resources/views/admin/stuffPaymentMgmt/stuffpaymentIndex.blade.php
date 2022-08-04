@extends('admin.layout.master')
@section('content')
    <div class=" container mt-5">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-success">All Stuff Payment Management</h3>
                    @if (session('flash_message'))
                        <div class="bg-danger text-white text-center">{{ session('flash_message') }}</div>
                    @elseif (session('added'))
                        <div class="bg-success text-white text-center">{{ session('added') }}</div>
                    @elseif (session('updated'))
                        <div class="bg-info text-white text-center">{{ session('updated') }}</div>
                    @endif
                    <div class="table-responsive">
                        <table id="CRM_DATATABLE" class="table">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Stuff Name</th>
                                    <th>Payment Amount</th>
                                    <th>Payment Date</th>
                                    <th>Payment Note</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($stuffs as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->stuffName }}</td>
                                        <td>{{ $item->paymentAmount }}</td>
                                        <td>{{ $item->paymentDate }}</td>
                                        <td>{{ $item->paymentNote }}</td>
                                        <td>
                                            <a href="{{ url('admin/stuffPaymentMgmt/' . $item->id . '/edit') }}"
                                                class="btn btn-primary btn-sm" title="Edit Stuff" aria-hidden="true"><i
                                                    class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{ url('admin/stuffPaymentMgmt/' . $item->id) }}"
                                                class="btn btn-info btn-sm" title="View Stuff Payment" aria-hidden="true"><i
                                                    class="fa fa-eye"></i></a>
                                            <form method="POST" action="{{ url('admin/stuffPaymentMgmt/' . $item->id) }}"
                                                accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Stuff Payment"
                                                    onclick="return confirm('Are you Confirm to delete this data?')"><i
                                                        class="fa fa-trash" aria-hidden="true"></i></button>
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
@endsection
