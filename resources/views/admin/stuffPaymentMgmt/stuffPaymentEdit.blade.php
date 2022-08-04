@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Edit Stuff Payment Management</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/stuffPaymentMgmt/' .$spmedit->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$spmedit->id}}" />
                            <label class="control-label">Stuff Name</label><br>
                            <input type="text" name="stuffName" id="stuffName" class="form-control
                            @error('stuffName')
                            is-invalid
                            @enderror" value="{{$spmedit->stuffName}}"><br>
                            <label class="control-label">Payment Amount</label><br>
                            <input type="text" name="paymentAmount" id="paymentAmount" class="form-control
                            @error('paymentAmount')
                            is-invalid
                            @enderror" value="{{$spmedit->paymentAmount}}"><br>
                            <label class="control-label">paymentDate</label><br>
                            <input type="text" name="paymentDate" id="paymentDate" class="form-control @error('paymentDate')
                            is-invalid
                            @enderror" value="{{$spmedit->paymentDate}}"><br>
                            <label class="control-label">Payment Note</label><br>
                            <input type="text" name="paymentNote" id="paymentNote" class="form-control @error('paymentNote')
                            is-invalid
                            @enderror" value="{{$spmedit->paymentNote}}"><br>

                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/stuffPaymentMgmt') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
