<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
        <link rel="stylesheet" href= "{{asset('css/app.css')}}">
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
        
          <nav class="navbar navbar-expand-lg navbar-dark bg-afaak" style="height:3rem;"> </nav>
        <div class="container"> 
            <div class='container m-1 p-2 rounded'>
                @include('include.messages')
                @yield('content')
            </div>
        </div>
    </body>
</html>
