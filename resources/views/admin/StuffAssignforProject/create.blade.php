@extends('layout.master')
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
                    <form class="forms-sample" action="{{ url('authorized/StuffAssignforProject/') }}" method="POST"
                        enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="Projectid" class="form-label">Project Name</label>
                                <select class="form-select" name="stuffTypeId">
                                    <option selected>Select Stuff</option>
                                    @foreach ($stufAssign as $item)
                                        <option value="{{ $item->id }}">{{ $item->projectName }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3 col">
                                <label for="Stuffid" class="form-label">Stuff Name</label>
                                <select class="form-select" name="Stuffid">
                                    <option selected>Select Stuff</option>
                                    @foreach ($stuffAssign as $item)
                                        <option value="{{ $item->id }}">{{ $item->stuffName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="WorkingCommission" class="form-label">Working Commission</label>
                                <input type="text" class="form-control" name="WorkingCommission"
                                    placeholder="Working Commission">
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
