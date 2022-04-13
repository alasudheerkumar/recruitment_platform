@extends('layouts.login_form')

@section('content')
<div class="container">
    <br/>
    <div class="row row-img">
        <div class="col-lg-6">
            <img src="img/login.png" width="70%" height="90%"  >
        </div>	
        <div class="col-lg-6">
            <form action="#">
                <h1><br/>Login to your account</h1>
               <br/>
                <div class="row">
                    <div class="col-md-12"><span style=""> Email:</span>
                        <input class="form-control bg-afaak" type="mail" name="login_email" placeholder="Email address">
                    </div>
                </div>
                <br/>
                <div class="row">
                    <div class="col-md-12">
                        <div class="pwd"><span style=""> Password:</span>
                            <input class="form-control bg-afaak" type="password" autocomplete="current-password" required="" name="login_passwd" id="password" placeholder="Password" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p></p><br/>
                        <select id="inputPrivilige" class="form-select bg-afaak">
                            <option selected>Applicant</option>
                            <option>Administrator</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="form-control btn btn-primary" type="button" id="btn" style="box-sizing: inherit;margin:29px auto;height:50px;border-radius:8px; color:white;font-size: 1.2em;text-align:center	">
                            Login
                          </button>
                    </div>
                    <div class="col-md-6">
                        <button class="form-control btn btn-danger" type="button" id="btn" style="box-sizing: inherit;margin:29px auto;height:50px;border-radius:8px; color:white;font-size: 1.2em;text-align:center	">
                            Sigup
                          </button>
                    </div>
                </div>

                <div>
                    <p style="font-size:1.2em;">
                        <span><a href="#" style="color:red" >Forgot Password?</a> </span>
                    </p>
                </div>
            </form>
        </div>
        
    </div>
</div>

@endsection