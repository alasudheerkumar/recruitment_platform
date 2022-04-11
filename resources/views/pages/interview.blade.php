
@extends('layouts.app')

@section('content2')
<!DOCTYPE html>                    
<html>                        
    <head>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">                                              
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>                       
    <style>
        .custom-file-upload {
        border: 4px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        }
    </style>

    <script>
        $('#file-upload').change(function() {
        var i = $(this).prev('label').clone();
        var file = $('#file-upload')[0].files[0].name;
        $(this).prev('label').text(file);
        });
	</script>
    </head>                        
    <body>  
        <div class="container custom-color rounded" style="padding:40px;">     
        <table>
            <tr>
            <td>
                <h6 class="pr-5">Get ready for your interview with a smile in your face. :)<br/>
                Your request has been processed and will get back to you as soon as possible</h6>
            </td>
            <td>              
                <img src="{{asset('img/x-mark.png')}}" width="300" height="300">
            </td>
                
        </table>
        </div>
    </body>
</html>
@endsection



  



@section('content')

<!--<script>
$('.datepicker').pickadate({
  min: new Date(2015,3,20),
  max: new Date(2015,7,14)
})
</script>-->


<div class="container custom-color rounded">
       <h3>Notifications</h3>
       <p>Congratulations!You have been selected for the interview. Please select a date and time that suits you.
      <br/><strong>Select a feasible date and time:</strong><br/>
      <input class="datepicker" type="text"><br/>
      <button class="btn btn-primary" type="submit">Submit</button>
</div>

<script>

    $('.datepicker').datetimepicker()({
        format: 'dd:mm:yyyy hh:mm',
    })

</script>


@endsection
