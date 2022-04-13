@extends('layouts.app')

@section('content')
    
        <div class="container custom-color rounded m-auto pb-2 ">
            <p><h3> Unique Id - Name </h3></p><hr>
            <form class="row g-3">
                <div class="col-md-4">
                  <label for="inputFirstName" class="form-label">First Name:</label>
                  <input type="text" class="form-control" id="inputFirstName">
                </div>
                <div class="col-md-4">
                  <label for="inputSecondName" class="form-label">Second Name:</label>
                  <input type="text" class="form-control " id="inputSecondName">
                </div>
                <div class="col-md-4">
                    <label for="inputdob" class="form-label">Date of birth:</label>
                    <input type="date" class="form-control" id="inputdob">
                </div>
                <div class="col-md-6">
                    <label for="inputAddress" class="form-label">Street, Door number:</label>
                    <input type="text" class="form-control" id="inputAddress">
                </div>
                <div class="col-md-4">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputcity">
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <label for="inputCountry" class="form-label">Country</label>
                    <select id="inputCountry" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                      </select>
                  </div>
                 <div class="col-md-4">
                    <label for="inputTaxId" class="form-label">Tax Number</label>
                    <input type="text" class="form-control" id="inputTaxId">
                  </div>
                  <div class="col-md-4">
                    <label for="inputSocialNo" class="form-label">Social security Number:</label>
                    <input type="text" class="form-control " id="inputSocialNo">
                  </div>
                  <div class="col-md-4">
                      <label for="inputHealthInsurance" class="form-label">Health Insurance:</label>
                      <input type="text" class="form-control" id="inputHealthInsurance">
                  </div>
                  <div class="col-md-4">
                    <label for="inputNationalId" class="form-label">National ID:</label>
                    <input type="text" class="form-control" id="inputNationalId">
                  </div>
                  <div class="col-md-4"></div>
                  <div class="col-md-4"></div>
                  <div class="col-12">Bank Details:<hr></div>
                  <div class="col-md-5">
                    <label for="inputBankIban" class="form-label">IBAN:</label>
                    <input type="text" class="form-control" id="inputBankIban">
                  </div>
                  <div class="col-md-4">
                    <label for="inputBankBic" class="form-label">BIC:</label>
                    <input type="text" class="form-control" id="inputBankBic">
                  </div>
                  <div class="col-md-3">
                    <label for="inputBankName" class="form-label">Bank Name:</label>
                    <input type="text" class="form-control" id="inputBankName">
                  </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary ">Update</button>
                </div>
              </form>
        </div>
@endsection

