@extends('admin.layout.master')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-success h2 text-center font-weight-bold">Stuff Details</h2>
                        <a href="{{ url('admin/stuffManagement') }}" class="btn btn-info btn-sm me-5" >Back to List</a>
                    </div>

                      <div class="card-body">
                        <h5 class="card-title">Stuff Type: {{ $stuffshow->stuffType }}</h5>
                        <p class="card-text">Stuff Name: {{ $stuffshow->stuffName }}</p>
                        <p class="card-text">Stuff Code: {{ $stuffshow->stuffCode }}</p>
                        <p class="card-text">Stuff ContactNo: {{ $stuffshow->stuffContactNo}}</p>
                        <p class="card-text">Stuff Email Id: {{ $stuffshow->stuffEmailId}}</p>
                        <p class="card-text">Gardian ContactNo: {{ $stuffshow->gardianContactNo}}</p>
                        <p class="card-text">Referance Contact No: {{ $stuffshow->referanceContactNo}}</p>
                        <p class="card-text">Stuff Present Address: {{ $stuffshow->stuffPresentAddress}}</p>
                        <p class="card-text">Stuff Permanent Address: {{ $stuffshow->stuffPermanentAddress}}</p>
                        <p class="card-text">Nid Image Url: {{ $stuffshow->nidImageUrl}}</p>
                        <p class="card-text">Log In id: {{ $stuffshow->logInid}}</p>
                        <p class="card-text">Password: {{ $stuffshow->password}}</p>
                      </div>
                </div>
            </div>

        </div>
    </div>
@endsection
