@extends('admin.layout.master')
@section('content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit Customer</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{ url('admin/customer/'.$customer->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                    <div class="mb-3">
                    <input type="hidden" name="id" id="id" value="{{$customer->id}}" />
                </div>
                <div class="mb-3">
                  <label for="customerName" class="form-label">Customer Name</label>

                  <input type="text" class="form-control" name="customerName" id="customerName"  value="{{ $customer->customername }}"><br>

                </div>
                <div class="mb-3">
                  <label for="companyName" class="form-label">Company Name</label>
                  <input type="text" class="form-control" name="companyName" id="companyName" value="{{ $customer->companyName }}">
                </div>
                <div class="mb-3">
                  <label for="contactNo" class="form-label">Contact No</label>
                  <input type="number" class="form-control" name="contactNo" id="contactNo" value="{{ $customer->contactNo}}">
                </div>
                <div class="mb-3">
                  <label for="emailId" class="form-label">Email Id</label>
                  <input type="email" class="form-control" name="emailId" id="emailId" value="{{ $customer->emailId }}">
                </div>
                <div class="mb-3">
                  <label for="locationCity" class="form-label">Location City</label>
                  <input type="text" class="form-control" name="locationCity" id="locationCity" value="{{ $customer->locationCity }}">
                </div>
                <div class="mb-3">
                  <label for="officeAddress" class="form-label">Office Address</label>
                  <input type="text" class="form-control" name="officeAddress" id="officeAddress" value="{{ $customer->officeAddress}}">
                </div>
                <div class="mb-3">
                  <label for="referreceContactNo" class="form-label">Business Type</label>
                  <input type="text" class="form-control" name="businessType" id="businessType" value="{{ $customer->businessType }}">
                </div>
                <div class="mb-3">
                  <label for="lastStatus" class="form-label">Last Status</label>
                  <input type="text" class="form-control" name="lastStatus" id="lastStatus" value="{{ $customer->lastStatus}}">

                </div>

                <div class="form-check mb-3">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">
                    Remember me
                  </label>
                </div>
                <input type="submit" value="save" class="btn btn-success">
                <button class="btn btn-secondary">Cancel</button>
              </form>
        </div>
    </div>
</div>
@endsection
