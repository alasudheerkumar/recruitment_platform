<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
        
        <link rel="stylesheet" href= "{{asset('css/custom.css')}}">
        <link rel="stylesheet" href= "{{asset('css/register.css')}}">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/register.js')}}" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>{{config('app.name','Recruiting_platform')}}</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark ">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.png')}}">
              </a>
            </div>
          </nav>
          <nav class="navbar navbar-expand-lg navbar-dark bg-afaak" style="height:3rem;"> <h3>Registration Phase</h3> </nav>
        <div class="container"> 
            <div class='container m-1 p-2 rounded'>
                @include('include.messages')
                @yield('content')
            </div>
        </div>
    </body>
</html>
