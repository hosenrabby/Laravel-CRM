@extends('admin.layout.master')
@section('content')
<div class="container mt-5">
    <div class="col-lg-12 col-12  layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4 class="mt-4 ms-3">ADD PROJECT</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <form action="{{url('admin/projectManagement')}}" method="post" class="form">
                    {!! csrf_field() !!}
                    <div class="row ms-2 me-2">
                        <div class="mb-3 col">
                    <label class="control-label">Project Name</label><br>
                    <input type="text" name="projectName" id="name" class="form-control">
                        </div>
                        <div class="mb-3 col">
                    <label class="control-label">Project Duration</label>
                    <input type="date" name="projectDuration" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="row ms-2 me-2">
                        <div class="mb-3 col">
                    <label class="control-label">Project Feature</label><br>
                    <input type="text" name="projectFeature" id="phone" class="form-control">
                </div>
                <div class="mb-3 col">
                    <label class="control-label">Project Amount</label>
                    <input type="number" name="projectAmount" id="phone" class="form-control">
                </div>
            </div>
            <div class="row ms-2 me-2">
                <div class="mb-3 col">
                    <label class="control-label">Project Logo</label>
                    <input type="text" name="projectLogo" id="address" class="form-control">
                </div>
                <div class="mb-3 col">
                    <label class="control-label">Project Status</label>
                    <input type="text" name="projectStatus" id="address" class="form-control">
                </div>
            <div class="row ms-2 me-2">
                <div class="mb-3 col">
                    <label class="control-label">Start Date</label>
                    <input type="date" name="StartDate" id="phone" class="form-control">
                </div>
                <div class="mb-3 col">
                    <label class="control-label">End Date</label>
                    <input type="date" name="EndDate" id="address" class="form-control">
                </div>

            <div class="mb-3 col">
                    <label class="control-label">Project Delivery Date</label>
                    <input type="date" name="projectDeliveryDate" id="address" class="form-control">
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
