@extends('layouts.adminapp')
@section('content')
   

     <div class="container custom-color rounded">
        <h3> {{$title}}</h3><hr>
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <b>Change Password:</b>
                    <label for="input" class="form-label">Current  Password: <input type="text" class="form-control" id="inputadCurrPas"></label>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <b>Change Email:</b>
                    <label for="input" class="form-label">New  Email: <input type="text" class="form-control" id="inputadNewEmail"></label>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                   
                    <label for="input" class="form-label">New  Password: <input type="text" class="form-control" id="inputadNewPass"></label>
                    <div class="col-12">
                        <button type="Update" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

