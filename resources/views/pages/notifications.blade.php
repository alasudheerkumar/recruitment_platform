@extends('layouts.app')

@section('content')
      
        <div class="container custom-color rounded">
           <h3>Notifications</h3>
            <table class="table table-striped">
                <thead>
                  <tr style="">
                    <th scope="col">Sno</th>
                    <th scope="col">Message/Notifications</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Application status</td>
                   
                    <td><button class="btn btn-link" name='details'>Details</button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Task related</td>
                 
                    <td><button class="btn btn-link" name='details'>Details</button></td>
                  </tr>
                </tbody>
              </table>
        </div>
    
@endsection

