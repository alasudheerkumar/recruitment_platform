@extends('layouts.adminapp')

@section('content')
      
        <div class="container custom-color rounded">
           <h3>{{$title}}</h3>
            <table class="table table-striped">
                <thead>
                  <tr style="">
                    <th scope="col">Sno</th>
                    <th scope="col">Candidate Id</th>
                    <th scope="col">Date Requested</th>
                    <th scope="col">Role</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Status</th>
                   
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>1A256</td>
                    <td>30-03-2022</td>
                    <td>Web Developer</td>
                    <td>+1</td> 
                    <td><button class="btn btn-success" name='write_msg'>Confirm</button>
                        <button class="btn btn-info" name='write_msg'>Write query</button>
                    </td>
                    
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>1A257</td>
                    <td>30-03-2022</td>
                    <td>App Developer</td>
                    <td>>1</td>
                    <td><button class="btn btn-success" name='write_msg'>Confirm</button>
                        <button class="btn btn-info" name='write_msg'>Write query</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
    
@endsection

