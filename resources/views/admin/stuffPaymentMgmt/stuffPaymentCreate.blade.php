@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-4 ms-3">ADD STUFF PAYMENT MANAGEMENT</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/stuffPaymentMgmt/') }}" method="POST"
                        enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="stuffName" class="form-label">Stuff Name</label>
                                <input type="text" class="form-control" name="stuffName" placeholder="stuff Name">
                            </div>
                            <div class="mb-3 col">
                                <label for="paymentAmount" class="form-label">Payment Amount</label>
                                <input type="text" class="form-control" name="paymentAmount" placeholder="Payment Amount">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="paymentDate" class="form-label">Payment Date</label>
                                <input type="date" class="form-control" name="paymentDate" placeholder="paymentDate">
                            </div>
                            <div class="mb-3 col">
                                <label for="paymentNote" class="form-label">paymentNote</label>
                                <input type="text" class="form-control" name="paymentNote" placeholder="Payment Note">
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
