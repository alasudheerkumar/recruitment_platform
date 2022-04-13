@extends('layouts.app')

@section('content')
  <div class="container custom-color rounded">
      <h3>Documents</h3>
      <table class="table table-striped">
          <thead>
            <tr style="">
              <th scope="col">Sno</th>
              <th scope="col">Document Name</th>
              <th scope="col">Document Type</th>
              <th scope="col">Upload/Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr id="doc0">
              <th scope="row">1</th>
              <td>Resume</td>
              <td>pdf</td>
              <td><a id='delete_row' class=" btn btn-danger align-center btn-sm ">X</a></td>
            </tr>
          </tbody>
      </table>
  </div>
@endsection


<!-- When there is no documents -->
@section('no-docs')
  <div class="row justify-content-md-center">
    <div class="col-md-6" style="width: 100%;">
        <img src="img/upload_doc.png" style="width:60%" />
    </div>
    <div class="col-md-6">
        <p class="card-text"> <b>No documents are upload. <br/> Upload your documents here.<br/><button type="file" class="btn btn-primary" name="upload_doc">Upload</button> </b></p>
    </div>
  </div>

  <script>
          $('#file-upload').change(function() {
          var i = $(this).prev('label').clone();
          var file = $('#file-upload')[0].files[0].name;
          $(this).prev('label').text(file);
          });
  </script>
@endsection




