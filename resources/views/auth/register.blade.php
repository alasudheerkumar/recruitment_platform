@extends('layouts.register')

@section('content')
        <div class="container bg-afaak rounded p-2">
            <div class="container custom-color p-2 rounded">
                <div class="row">
                    <div class="col-md-12">
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                       
                            <h1 id="register"></h1>
                                <div class="all-steps" id="all-steps"> 
                                    <span class="step">Personal Details</span> 
                                    <span class="step">Login Details</span> 
                                    <span class="step">Address</span> 
                                    <span class="step">Preview</span>
                                    <span class="step">Submit</span> 
                                </div>

                                <div class="all-steps-phone" id="all-steps-phone"> <!-- For phone mode -->
                                    <span class="step"></span> 
                                    <span class="step"></span> 
                                    <span class="step"></span> 
                                    <span class="step"></span>
                                    <span class="step"></span> 
                                </div>

                                <div class="tab"> <!-- Phase 1: Personal Details-->
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>First Name:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="First name..." oninput="this.className = ''" name="fname" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Last Name:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Last name..." oninput="this.className = ''" name="lname" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Date of Birth:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input type="date" class="" oninput="this.className = ''" name="dob" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Phone Number:(opt)</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Phone number" oninput="this.className = ''" name="mobile"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Nationality:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p> <select id="nation" name="nationality" oninput="this.className = 'form-select'" class="form-select" >
                                                    <option selected>Germany</option>
                                                    <option>India</option>
                                                    <option>Pakistan</option>
                                                    <option>France</option>
                                                    <option>USA</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab"><!-- Phase 2: Login Details-->
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Email:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Email Address" oninput="this.className = ''" name="email" type="mail" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Password:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Enter Password" type="password" oninput="this.className = ''" name="passwd" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Confirm Password:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Confirm Password" type="password" oninput="this.className = ''" name="cpasswd"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab"><!-- Phase 3 Address-->
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Street:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Street.." oninput="this.className = ''" name="street" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>door No:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Door no.." oninput="this.className = ''" name="dno" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Zip Code:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="Zip code.." oninput="this.className = ''" name="zipcode"></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>City:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p><input placeholder="City.." oninput="this.className = ''" name="city" required></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Country:</p>
                                        </div>
                                        <div class="col-md-8">
                                            <p> <select id="country" name="country" oninput="this.className = 'form-select'" class="form-select" >
                                                    <option selected>Germany</option>
                                                    <option>India</option>
                                                    <option>Pakistan</option>
                                                    <option>France</option>
                                                    <option>USA</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab"><!-- Phase 4: Review Details-->
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>First Name:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Last Name:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Date of Birth:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Phone Number:(opt)</p>
                                        </div>
                                        <div class="col-md-8">
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Nationality:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Email:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Street:</p>
                                        </div>
                                        <div class="col-md-8">
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>door No:</p>
                                        </div>
                                        <div class="col-md-8">
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Zip Code:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>City:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 d-flex">
                                            <p>Country:</p>
                                        </div>
                                        <div class="col-md-8">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="tab"><!-- Phase 5: Submission-->
                                    <p>Preferred work Period Range:</p>
                                    <input type="date" class="input-date" oninput="this.className = 'input-date'" name="fromDate" required> 
                                    to 
                                    <input type="date" class="input-date" oninput="this.className = 'input-date'" name="toDate" required>
                                    <br/>
                                    <input type="checkbox" class="form-check-input" oninput="this.className = ''" name="acceptTerms" required> Accept the terms
                                    <br/>
                                    <input type="checkbox" class="form-check-input" oninput="this.className = ''" name="acceptPrivacy" required>Data Privacy

                                    <input type="hidden" value="cand" name="privilige" />
                                </div>
                                    <!--<div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                                        <h3>Thanks for your Registration!</h3> 
                                        <span>Please Login to check the position!<a href="/login" class="btn btn-link">Login</a></span>
                                    </div>-->
                                <div style="overflow:auto;" id="nextprevious">
                                    <div style="float:right;"> 
                                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> 
                                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> 
                                        {{Form::submit('Submit',['id'=>'btnSubmit','class'=>'nextBtn','style'=>'display:none'])}}
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection


