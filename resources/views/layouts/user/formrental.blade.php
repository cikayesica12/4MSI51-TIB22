@extends('layouts.template.main')

@section('container')
<div id="rental" class="content">
    <div class="container">
      <div class="d-flex align-items-start">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tabcar" role="tabpanel">
            <div class="row pt-2">
              <div class="col">
                <h3><b>EASY Rental Register</b></h3>
              </div>
            </div>
            <div class="row">
                <form action="{{route("formrental.store")}}" method="POST">
                  @csrf
                  <div class="row mb-3 py-3">
                    <div class="col-sm-5"><hr /></div>
                    <div class="col-sm-2" style="text-align: center">Indentity Form</div>
                    <div class="col-sm-5"><hr /></div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputName" class="col-sm-3 col-form-label">Full Name</label>
                    <div class="col-sm">
                      <input name="name" class="form-control" id="inputfirstname" row="1" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputidentitynumber" class="col-sm-3 col-form-label">Indentity Number</label>
                    <div class="col-sm">
                      <input name="identitynumber" type="text" class="form-control" id="inputidentitynumber" placeholder="Identity Number" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm">
                      <select name="gender" class="form-select" id="autoSizingSelect">
                        <option selected>-Select-</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputPhone" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm">
                      <input name="phone" type="text" class="form-control" id="inputPhone" placeholder="08123456789" />
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputemail" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm">
                      <input name="email" type="email" class="form-control" id="inputemail" placeholder="Example@email.com" />
                    </div>
                  </div>
                  <div class="row mb-3 py-3">
                    <div class="col-sm-5"><hr /></div>
                    <div class="col-sm-2" style="text-align: center">Rental Form</div>
                    <div class="col-sm-5"><hr /></div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Type Rental</label>
                    <div class="col-sm">
                      <select name="typerental" class="form-select" id="autoSizingSelect">
                        <option selected>-Select-</option>
                        <option value="car">Car</option>
                        <option value="bus">Bus</option>
                        <option value="minibus">Mini Bus</option>
                        <option value="wedding">Wedding Car</option>
                        <option value="boat">Boat</option>
                      </select>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputlocation" class="col-sm-3 col-form-label">Location</label>
                    <div class="col-sm">
                      <input name="location" type="text" class="form-control" id="inputlocation" />
                    </div>
                  </div>
                  <div class="form-group row mb-3">
                    <label for="startdate" class="col-sm-3 col-form-label">Start Rental</label>
                    <div class="col-sm">
                      <div class="input-group">
                        <input name="startrental" type="date" class="form-control" id="startdate" />
                      </div>
                    </div>
                  </div>
                  <div class="form-group row mb-5">
                    <label for="enddate" class="col-sm-3 col-form-label">End Rental</label>
                    <div class="col-sm">
                      <div class="input-group">
                        <input name="endrental" type="date" class="form-control" id="enddate" />
                      </div>
                    </div>
                  </div>
                  <button type="sudmit" class="btn btn-primary">SUBMIT</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
