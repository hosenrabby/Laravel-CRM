@extends('admin.layout.master')
@section('content')
<div class="container mt-5">
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4 class="mt-4 ms-3">Stuff Assign for Project</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{route('admin.StuffAssignforProject.update',$info->id) }}" method="POST" enctype="multipart/form-data">
                {!! csrf_field() !!}
                @method("PATCH")
                <div class="row">
                <div class="mb-3 col">
                <input type="hidden" class="form-control" name="Projectid" value="{{$info->id}}" placeholder="Project ID">
                  <label for="Projectid" class="form-label">Project ID</label>
                  <input type="text/number" class="form-control" name="Projectid" value="{{$info->Projectid}}" placeholder="Project ID">
                </div>
                <div class="mb-3 col">
                  <label for="Stuffid" class="form-label">Stuff ID</label>
                  <input type="number" class="form-control" name="Stuffid" value="{{$info->Stuffid}}" placeholder="Stuff ID">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                  <label for="WorkingCommission" class="form-label">Working Commission</label>
                  <input type="text" class="form-control" name="WorkingCommission" value="{{$info->WorkingCommission}}" placeholder="Working Commission">
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

