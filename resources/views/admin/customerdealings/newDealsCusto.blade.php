@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-4 ms-3">Create a Deal with Customer</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/customerdealings') }}" method="POST">
                        {!! csrf_field() !!}

                        <div class="row ms-2 me-2">
                            <div class="col mb-3">
                                <label for="customerId" class="form-label">Select Customer</label>
                                <select class="form-select" name="customerId">
                                    <option selected>Customer Name</option>
                                    @foreach ($custoName as $cName)
                                        <option value="{{ $cName->id }}">{{ $cName->customerName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col mb-3">
                                <label for="stuffId" class="form-label">Select Stuff</label>
                                <select class="form-select" name="stuffId">
                                    <option selected>Stuff Name</option>
                                    @foreach ($stuffName as $sName)
                                        <option value="{{ $sName->id }}">{{ $sName->stuffName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="latestInformation" class="form-label">Latest Information</label>
                                <input type="text" class="form-control" name="latestInformation"
                                    placeholder="Business Type">
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
