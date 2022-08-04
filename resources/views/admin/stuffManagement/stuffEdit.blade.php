@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Edit Stuff</h2>
                    </div>

                      <div class="card-body">
                        <form action="{{ url('admin/stuffManagement/' .$stuffedit->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$stuffedit->id}}" />
                            <label class="control-label">Stuff Type</label><br>
                            <input type="text" name="stuffType" id="stuffType" class="form-control
                            @error('stuffType')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffType}}"><br>
                            <label class="control-label">Stuff Name</label><br>
                            <input type="text" name="stuffName" id="stuffName" class="form-control
                            @error('stuffName')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffName}}"><br>
                            <label class="control-label">stuffCode</label><br>
                            <input type="text" name="stuffCode" id="stuffCode" class="form-control @error('stuffCode')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffCode}}"><br>
                            <label class="control-label">Stuff ContactNo</label><br>
                            <input type="number" name="stuffContactNo" id="stuffContactNo" class="form-control @error('stuffContactNo')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffContactNo}}"><br>
                            <label class="control-label">Stuff ContactNo</label><br>
                            <input type="number" name="stuffContactNo" id="stuffContactNo" class="form-control @error('stuffContactNo')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffContactNo}}"><br>
                            <label class="control-label">stuffEmailId</label><br>
                            <input type="email" name="stuffEmailId" id="stuffEmailId" class="form-control @error('stuffEmailId')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffEmailId}}"><br>
                            <label class="control-label">gardianContactNo</label><br>
                            <input type="number" name="gardianContactNo" id="gardianContactNo" class="form-control @error('gardianContactNo')
                            is-invalid
                            @enderror" value="{{$stuffedit->gardianContactNo}}"><br>
                            <label class="control-label">referanceContactNo</label><br>
                            <input type="number" name="referanceContactNo" id="referanceContactNo" class="form-control @error('referanceContactNo')
                            is-invalid
                            @enderror" value="{{$stuffedit->referanceContactNo}}"><br>
                            <label class="control-label">stuffPresentAddress</label><br>
                            <input type="text" name="stuffPresentAddress" id="stuffPresentAddress" class="form-control @error('stuffPresentAddress')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffPresentAddress}}"><br>
                            <label class="control-label">stuffPermanentAddress</label><br>
                            <input type="text" name="stuffPermanentAddress" id="stuffPermanentAddress" class="form-control @error('stuffPermanentAddress')
                            is-invalid
                            @enderror" value="{{$stuffedit->stuffPermanentAddress}}"><br>
                            <label class="control-label">nidImageUrl</label><br>
                            <input type="text" name="nidImageUrl" id="nidImageUrl" class="form-control @error('nidImageUrl')
                            is-invalid
                            @enderror" value="{{$stuffedit->nidImageUrl}}"><br>
                            <label class="control-label">logInid</label><br>
                            <input type="text" name="logInid" id="logInid" class="form-control @error('logInid')
                            is-invalid
                            @enderror" value="{{$stuffedit->logInid}}"><br>
                            <label class="control-label">password</label><br>
                            <input type="text" name="password" id="password" class="form-control @error('password')
                            is-invalid
                            @enderror" value="{{$stuffedit->password}}"><br>
                            <input type="submit" value="save" class="btn btn-success">
                            <a href="{{ url('admin/stuffManagement') }}" class="btn btn-danger btn-small" >Cancel</a>
                        </form>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
