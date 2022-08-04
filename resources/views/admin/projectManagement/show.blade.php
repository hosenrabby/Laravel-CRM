@extends('admin.layout.master')
@section('content')

<div class="row">
    <div class="col-1"></div>

    <div class="col-10">      
        <table class="table table-bordered">
            <thead>
                <tr class="bg-light text-dark">
                    <th scope="col">Sl No</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Project Duration</th>
                    <th scope="col">Project Feature</th>
                    <th scope="col">Project Amount</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Project Delivery Date</th>
                    <th scope="col">Project Logo</th>
                    <th scope="col">Project Status</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td</td>
                    <td>{{$info->id}}</td>
                    <td>{{$info->projectName}}</td>
                    <td>{{$info->projectDuration}}</td>
                    <td>{{$info->projectFeature}}</td>
                    <td>{{$info->projectAmount}}</td>
                    <td>{{$info->StartDate}}</td>
                    <td>{{$info->EndDate}}</td>
                    <td>{{$info->projectDeliveryDate}}</td>
                    <td>{{$info->projectLogo}}</td>
                    <td>{{$info->projectStatus}}</td>
                </tr>
            </tbody>
        </table>

    </div>
    <div class="col-1"></div>
</div>

@endsection