@extends('layout.master')
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
                                <select class="form-select" name="stuffType"aria-label="Default select example">
                                    <option selected value="">Select Stuff Type</option>
                                    <option value="Front Desk">Front Desk</option>
                                    <option value="Grafics Designer">Grafics Designer</option>
                                    <option value="UI/UX Designer">UI/UX Designer</option>
                                    <option value="Marketing Menager">Marketing Manager</option>
                                    <option value="Project Menager">Project Manager</option>
                                    <option value="Frontend Developer">Frontend Developer</option>
                                    <option value="Junior Developer">Junior Developer</option>
                                    <option value="Senior Developer">Senior Developer</option>
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="basicSalary" class="form-label">Basic Salary</label>
                                <input type="number" class="form-control" name="basicSalary" placeholder="Basic Salary ">
                            </div>
                        </div>

                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="workingCommission" class="form-label">Working Commission</label>
                                <input type="text" class="form-control" name="workingCommission"
                                    placeholder="Working Commission">
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
