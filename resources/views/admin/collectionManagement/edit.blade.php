@extends('admin.layout.master')
@section('content')
<div class="col-lg-12 col-12  layout-spacing">
    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>Edit Collection Management</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">
            <form class="forms-sample" action="{{ url('admin/collectionManagement/'.$collectionManage->id) }}" method="POST">
                {!! csrf_field() !!}
                @method("PATCH")
                    <div class="mb-3">
                    <input type="hidden" name="id" id="id" value="{{$collectionManage->id}}" />
                </div>
                <div class="mb-3">
                  <label for="projectId" class="form-label">Project Id</label>

                  <input type="text" class="form-control" name="projectId" id="projectId"  value="{{ $collectionManage->projectId }}"><br>

                </div>
                <div class="mb-3">
                  <label for="customerId" class="form-label">Customer Id</label>
                  <input type="text" class="form-control" name="customerId" id="customerId" value="{{ $collectionManage->customerId }}">
                </div>
                <div class="mb-3">
                  <label for="collectionAmount" class="form-label">Collection Amount</label>
                  <input type="number" class="form-control" name="collectionAmount" id="collectionAmount" value="{{ $collectionManage->collectionAmount}}">
                </div>
                <div class="mb-3">
                    <label for="collectionDate" class="form-label">Collection Date</label>
                    <input type="date" class="form-control" name="collectionDate" id="collectionDate" value="{{ $collectionManage->collectionDate}}">
                  </div>
                <div class="mb-3">
                  <label for="collectionNote" class="form-label">Collection Note</label>
                  <input type="text" class="form-control" name="collectionNote" id="collectionNote" value="{{ $collectionManage->collectionNote }}">
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
