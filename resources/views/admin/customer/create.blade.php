@extends('layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-4 ms-3">ADD Customer</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('authorized/customer') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="customerName" class="form-label">Customer Name</label>
                                <input type="text" class="form-control" name="customerName" placeholder="Customer Name">
                            </div>
                            <div class="mb-3 col">
                                <label for="companyName" class="form-label">Company Name</label>
                                <input type="text" class="form-control" name="companyName" placeholder="Company Name">
                            </div>
                        </div>

                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="contactNo" class="form-label">Contact No</label>
                                <input type="number" class="form-control" name="contactNo" placeholder="Contact No">
                            </div>
                            <div class="mb-3 col">
                                <label for="emailId" class="form-label">Email Id</label>
                                <input type="email" class="form-control" name="emailId" placeholder="Email Id">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="locationCity" class="form-label">Location City</label>
                                <input type="text" class="form-control" name="locationCity" placeholder="Location City">
                            </div>
                            <div class="mb-3 col">
                                <label for="officeAddress" class="form-label">Office Address</label>
                                <input type="text" class="form-control" name="officeAddress"
                                    placeholder="Office Address">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="referreceContactNo" class="form-label">Business Type</label>
                                <input type="text" class="form-control" name="businessType" placeholder="Business Type">
                            </div>
                            <div class="mb-3 col">
                                <label for="lastStatus" class="form-label">Last Status</label>
                                <select class="form-select" name="lastStatus"aria-label="Default select example">
                                    <option selected value="As Pending">As Pending</option>
                                    <option value="ON Development">ON Development</option>
                                    <option value="Completed">Completed</option>
                                    <option value="Moved">Moved</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-check mb-3">

                            <input type="submit" value="save" class="btn btn-success">
                            <button class="btn btn-secondary">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
