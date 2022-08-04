@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-3 ms-3">Edit Customer</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/managable-customer-update/' . $customer->id) }}"
                        method="POST">
                        {!! csrf_field() !!}
                        @method('PATCH')
                        <div class="mb-3">
                            <input type="hidden" name="id" id="id" value="{{ $customer->id }}" />
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="customerName" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" name="customerName" id="customerName"
                                    value="{{ $customer->customerName }}"><br>
                            </div>
                            <div class="mb-3 col">
                                <label for="companyName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="companyName" id="companyName"
                                    value="{{ $customer->companyName }}">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="contactNo" class="form-label">Contact No</label>
                                <input type="number" class="form-control" name="contactNo" id="contactNo"
                                    value="{{ $customer->contactNo }}">
                            </div>
                            <div class="mb-3 col">
                                <label for="emailId" class="form-label">Email Id</label>
                                <input type="email" class="form-control" name="emailId" id="emailId"
                                    value="{{ $customer->emailId }}">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="locationCity" class="form-label">Location City</label>
                                <input type="text" class="form-control" name="locationCity" id="locationCity"
                                    value="{{ $customer->locationCity }}">
                            </div>
                            <div class="mb-3 col">
                                <label for="officeAddress" class="form-label">Office Address</label>
                                <input type="text" class="form-control" name="officeAddress" id="officeAddress"
                                    value="{{ $customer->officeAddress }}">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="referreceContactNo" class="form-label">Business Type</label>
                                <input type="text" class="form-control" name="businessType" id="businessType"
                                    value="{{ $customer->businessType }}">
                            </div>
                            <div class="mb-3 col">
                                <label for="lastStatus" class="form-label">Last Status</label>
                                <select class="form-select" name="lastStatus"aria-label="Default select example">
                                    @foreach ($input as $custStatus)
                                        <option value="{{ $custStatus->lastStatus }}"
                                            @if ($custStatus->lastStatus == $customer->lastStatus) selected @endif>{{ $custStatus->lastStatus }}
                                        </option>
                                    @endforeach
                                    <option value="As Pending">As Pending</option>
                                    <option value=" ON Development">ON Development</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Moved">Moved</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-check mb-3">
                            <input type="submit" value="UPDATE" class="btn btn-success">
                            <button class="btn btn-danger">CANCLE</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
