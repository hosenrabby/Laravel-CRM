@extends('admin.layout.master')
@section('content')
<hr>
    <div class="row mt-3 mb-3 bg-light text-dark">
    
        <div class="col-2"></div>
            <div class="col-8 mb-4">
            <h1 class="text-success ms-5 me-5 text-center"><strong>Keep your information</strong></h1>
                <form action="{{url('admin/projectManagement/'.$info->id)}}" method="post" class="form">
                    {!! csrf_field() !!}
                    @method("PATCH")
                    <input type="hidden" name="id" id="id" value="{{$info->id}}" class="form-control"><br>
                    <label class="control-label">Project Name</label><br>
                    <input type="text" name="projectName" id="name" value="{{$info->projectName}}" class="form-control"><br>
                    <label class="control-label">Project Duration</label><br>
                    <input type="date" name="projectDuration" value="{{$info->projectDuration}}" id="email" class="form-control"><br>
                    <label class="control-label">Project Feature</label><br>
                    <input type="text" name="projectFeature" value="{{$info->projectFeature}}" id="phone" class="form-control"><br>
                    <label class="control-label">Project Amount</label><br>
                    <input type="number" name="projectAmount" value="{{$info->projectAmount}}" id="phone" class="form-control"><br>
                    <label class="control-label">Start Date</label><br>
                    <input type="date" name="StartDate" value="{{$info->StartDate}}" id="phone" class="form-control"><br>
                    <label class="control-label">End Date</label><br>
                    <input type="date" name="EndDate" value="{{$info->EndDate}}" id="address" class="form-control"><br>
                    <label class="control-label">Project Delivery Date</label><br>
                    <input type="date" name="projectDeliveryDate" value="{{$info->projectDeliveryDate}}" id="address" class="form-control"><br>
                    <label class="control-label">Project Logo</label><br>
                    <input type="text" name="projectLogo" value="{{$info->projectLogo}}" id="address" class="form-control"><br>
                    <label class="control-label">Project Status</label><br>
                    <input type="text" name="projectStatus" value="{{$info->projectStatus}}" id="address" class="form-control"><br>
                    <input type="submit" value="save" class="btn btn-success" value="Submit">
                </form>
            </div>
        <div class="col-2"></div>
    </div>


@endsection