@extends('admin.layout.master')
@section('content')
    <div class="container mt-5">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4 class="mt-4 ms-3">ADD STUFF</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form class="forms-sample" action="{{ url('admin/stuffManagement/') }}" method="POST"
                        enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="stuffType" class="form-label">Stuff Type</label>
                                <input type="text" class="form-control" name="stuffType" placeholder="Stuff Type">
                            </div>
                            <div class="mb-3 col">
                                <label for="stuffName" class="form-label">Stuff Name</label>
                                <input type="text" class="form-control" name="stuffName" placeholder="Stuff Name">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="stuffCode" class="form-label">Stuff Code</label>
                                <input type="text" class="form-control" name="stuffCode" placeholder="Stuff Code">
                            </div>
                            <div class="mb-3 col">
                                <label for="stuffContactNo" class="form-label">Stuff Contact No</label>
                                <input type="number" class="form-control" name="stuffContactNo"
                                    placeholder="Stuff Contact No">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="stuffEmailId" class="form-label">Stuff Email Id</label>
                                <input type="email" class="form-control" name="stuffEmailId" placeholder="Stuff Email">
                            </div>
                            <div class="mb-3 col">
                                <label for="gardianContactNo" class="form-label">Gardian Contact No</label>
                                <input type="number" class="form-control" name="gardianContactNo"
                                    placeholder="Gardian Contact No">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="referreceContactNo" class="form-label">Referrence Contact No</label>
                                <input type="number" class="form-control" name="referanceContactNo"
                                    placeholder="Referrence Contact No">
                            </div>
                            <div class="mb-3 col">
                                <label for="stuffPresentAddress" class="form-label">Stuff Present Address</label>
                                <input type="text" class="form-control" name="stuffPresentAddress"
                                    placeholder="Stuff Present Address">
                            </div>
                        </div>
                        <div class="row ms-2 me-2">
                            <div class="mb-3 col">
                                <label for="stuffPermanentAdress" class="form-label">Stuff Permanent Adress</label>
                                <input type="text" class="form-control" name="stuffPermanentAddress"
                                    placeholder="Stuff Permanent Address">
                            </div>
                            <div class="mb-3 col">
                                <label for="logInid" class="form-label">Log In Id</label>
                                <input type="text" name="logInid" id="logInid" class="form-control">
                            </div>

                            <div class="mb-3 col">
                                <label for="password" class="form-label">Password</label>
                                <input type="text" name="password" id="password" class="form-control">
                            </div>
                            <div class="mb-3 col">
                                <label for="nidImage" class="form-label">Nid Image</label>
                                <input type="file" name="nidImageUrl" id="nidImageUrl" class="form-control">
                            </div>
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
