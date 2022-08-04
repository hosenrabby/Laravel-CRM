@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Stuff Payment Details</h2>
                        <a href="{{ url('admin/stuffPaymentMgmt') }}" class="btn btn-info btn-sm me-5" >Back to List</a>
                    </div>

                      <div class="card-body">
                        <p class="card-text">Stuff Name: {{ $spmshow->stuffName }}</p>
                        <p class="card-text">Payment Amount: {{ $spmshow->paymentAmount}}</p>
                        <p class="card-text">Payment Date: {{ $spmshow->paymentDate}}</p>
                        <p class="card-text">Payment Note: {{ $spmshow->paymentNote}}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
