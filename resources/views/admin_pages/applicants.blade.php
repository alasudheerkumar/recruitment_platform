@extends('layouts.adminapp')

@section('content')
      
        <div class="container custom-color rounded">
           <h3></h3>
            <table class="table table-striped">
                <thead>
                  <tr style="">
                    <th scope="col">Sno</th>
                    <th scope="col">Candidate Id</th>
                    <th scope="col">Date Applied</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Update Status</th>
                    <th scope="col">Chat/Mail</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach($users as $user)

                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>Random number</td>
                      <td>{{ $user->created_at }}</td>
                      <td>{{ $user->first_name }}</td>
                      <td>{{ $user->last_name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                          <select id="updateStatus" class="form-select">
                              <option selected>Recieved</option>
                              <option>Reviewed</option>
                              <option>Applied</option>
                              <option>Processed</option>
                              <option>Task Submitted</option>
                          </select>
                      </td>
                      <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMessage" name="write_query">
                            Write Query
                          </button>
                      </td> 
                    </tr>
                  @endforeach

                                                {{-- 

                                                  <tr>
                                                  <th scope="row">1</th>
                                                  <td>1A257</td>
                                                  <td>30-03-2022</td>
                                                  <td>App Developer</td>
                                                  <td>>1</td>
                                                  <td>
                                                      <select id="updateStatus" class="form-select">
                                                          <option selected>Recieved</option>
                                                          <option>Reviewed</option>
                                                          <option>Applied</option>
                                                          <option>Processed</option>
                                                          <option>Task Submitted</option>
                                                      </select>
                                                  </td>
                                                  <td>
                                                    <!-- Button trigger modal -->
                                                    
                                                  </td> --}}
                    <!-- Modal -->
                    <div class="modal fade " id="addMessage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog " role="document">
                        <div class="modal-content bg-afaak">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send Message to:</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          {!! Form::open(['action' => 'MessageController@store', 'method'=> 'POST']) !!}

                          {{  csrf_field() }}
                          <div class="modal-body">
                            
                                <div class="form-group">
                                  <div class="row p-2">
                                    <div class="col-md-2">
                                      <label for="sender-name" class="col-form-label">Sender: </label>
                                    </div>
                                    <div class="col-md-10">
                                      Admin<input type="hidden" name="adminId" value="#" />
                                    </div>
                                  </div>
                                  <div class="row p-2">
                                    <div class="col-md-2">
                                      <label for="recipient-name" class="col-form-label">Recipient:</label>
                                    </div>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" id="recipient-name" name="candId">
                                    </div>
                                  </div>
                                  <div class="row p-2">
                                    <div class="col-md-2">
                                      <label for="recipient-name" class="col-form-label">Subject:</label>
                                    </div>
                                    <div class="col-md-10">
                                      <input type="text" class="form-control" id="subject" name="subject">
                                    </div>
                                  </div>
                                  <div class="row p-2">
                                    <div class="col-md-2">
                                      <label for="message-text" class="col-form-label">Message:</label>
                                    </div>
                                    <div class="col-md-10">
                                      <textarea class="form-control" id="message-text" name="msg" rows="10"></textarea>
                                    </div>
                                  </div>
                                  <input type="hidden" name="candId" value="123"/>
                            </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="sumit" class="btn btn-primary">Send</button>
                          </div>
                        </div>
                        {!! Form::close() !!} 
                      </div>
                    </div>
                  </tr>
                </tbody>
              </table>

             
              
        </div>
    
@endsection

