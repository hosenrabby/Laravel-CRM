@extends('layout.master')
@section('content')
    <div class="container">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit Stuff Type</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/stuffType/' . $stuffType->id) }}" method="POST">
                        {!! csrf_field() !!}
                        @method('PATCH')
                        <div class="mb-3">
                            <input type="hidden" name="id" id="id" value="{{ $stuffType->id }}" />
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="col mb-3">
                                <label for="stuffType" class="form-label">Stuff Type</label>
                                <input type="text" class="form-control" name="stuffType" id="stuffType"
                                    value="{{ $stuffType->stuffType }}"><br>
                            </div>
                            <div class=" col mb-3">
                                <label for="basicSalary" class="form-label">Basic Salary</label>
                                <input type="number" class="form-control" name="basicSalary" id="basicSalary"
                                    value="{{ $stuffType->basicSalary }}">
                            </div>
                        </div>
                        <div class="ms-3 me-2 mb-3">
                            <label for="workingCommission" class="form-label">Working Commission</label>
                            <input type="text" class="form-control" name="workingCommission" id="workingCommission"
                                value="{{ $stuffType->workingCommission }}">
                        </div>
                        <input type="submit" value="save" class="btn btn-success">
                        <button class="btn btn-secondary">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
