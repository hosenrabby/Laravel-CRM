@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-4 ms-3">ADD Stuff Type</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/stuffType') }}" method="POST">
                        {!! csrf_field() !!}
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="stuffType" class="form-label">Stuff Type</label>
                                <input type="text" class="form-control" name="stuffType" placeholder="Stuff Type">
                            </div>
                            <div class="mb-3 col">
                                <label for="stuffTypeCode" class="form-label">Stuff Type Code</label>
                                <input type="text" class="form-control" name="stuffTypeCode" placeholder="Stuff Type Code">
                            </div>
                        </div>

                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="basicSalary" class="form-label">Basic Salary</label>
                                <input type="number" class="form-control" name="basicSalary" placeholder="Basic Salary ">
                            </div>
                            <div class="mb-3 col">
                                <label for="workingCommission" class="form-label">Working Commission</label>
                                <input type="text" class="form-control" name="workingCommission" placeholder="Working Commission">
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
