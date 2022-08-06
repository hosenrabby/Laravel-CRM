@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-4 ms-3">ADD Collection Management</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/collectionManagement') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="projectId" class="form-label">Project ID</label>
                                <input type="text" class="form-control" name="projectId" placeholder="Project ID">
                            </div>
                            <div class="mb-3 col">
                                <label for="customerId" class="form-label">Customer Id</label>
                                <input type="text" class="form-control" name="customerId" placeholder="Customer Id">
                            </div>
                        </div>

                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="collectionAmount" class="form-label">Collection Amount</label>
                                <input type="number" class="form-control" name="collectionAmount" placeholder="Collection Amount">
                            </div>
                            <div class="mb-3 col">
                                <label for="collectionDate" class="form-label">Collection Date</label>
                                <input type="date" class="form-control" name="collectionDate" placeholder="collectionDate">
                            </div>
                            <div class="mb-3 col">
                                <label for="collectionNote" class="form-label">Collection Note</label>
                                <input type="text" class="form-control" name="collectionNote" placeholder="collectionNote">
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
