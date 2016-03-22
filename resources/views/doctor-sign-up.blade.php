@extends('parent')

@section('navbar')
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">BACK</a></li>

@endsection
@section('mainBody')
  <div class="wrapper">
      <article class="main white"> <!--START OF MAIN-->    
        <div class="row container">         
           <h4 class="col s12 blue-text text-darken-4">Doctor Sign Up</h4>
            <form class="col s12 " action="/sign-up" method="post">
              <div class="row">

                <h6 class="col s12">Name</h6>
                <div class="input-field col s4">
                <input id="firstName" type="text" class="validate" name="strFirstName">
                <label for="firstName">First Name</label>
                </div>

                <div class="input-field col s4">
                <input id="middleName" type="text" class="validate" name="strMiddleName">
                <label for="middleNmame">Middle Name</label>
                </div>

                <div class="input-field col s4">
                <input id="lastName" type="text" class="validate" name="strLastName">
                <label for="lastName">Last Name</label>
                </div>

                <h6 class="col s6">Birthday</h6>
                <h6 class="col s6">Gender</h6>

                <div class="col s6">
                  <input type="date" class="datepicker" id="bday" name="dateBirthday">
                </div>

                <div class="col s6">
                  <p>
                    <input name="group1" type="radio" id="male" name="strGender"/>
                    <label for="male">Male</label>
                  
                    <input name="group1" type="radio" id="female" name="strGender"/>
                    <label for="female">Female</label>
                  </p>
                </div>

                <h6 class="col s12">Address</h6>

                <div class="input-field col s3">
                <input id="houseNO" type="text" class="validate" name="strHouseNo">
                <label for="houseNO">Number</label>
                </div>

                <div class="input-field col s3">
                <input id="street" type="text" class="validate" name="strStreet">
                <label for="street">Street</label>
                </div>

                <div class="input-field col s3">
                <input id="brgy" type="text" class="validate" name="strBarangay">
                <label for="brgy">Barangay</label>
                </div>

                <div class="input-field col s3">
                <input placeholder="(optional)"id="subd" type="text" class="validate" name="strSubdivision">
                <label for="subd">Subdivision</label>
                </div>


                <div class="input-field col s6">
                <input id="city" type="text" class="validate" name="strCity">
                <label for="city">City</label>
                </div>

                <div class="input-field col s6">
                <input placeholder="(optional)"id="province" type="text" class="validate" name="strProvince">
                <label for="province">Province</label>
                </div>

                <h6 class="col s12">Contact Information</h6>

                <div class="input-field col s6">
                <input id="email" type="email" class="validate" name="strEmail">
                <label for="email">E-mail Address</label>
                </div>

                <div class="input-field col s6">
                <input id="contanctNo" type="text" class="validate" name="strContactNo">
                <label for="contanctNo">Contanct No.</label>
                </div>

                <h6 class="col s12">Account Information</h6>

                <div class="input-field col s4">
                <input id="username" type="text" class="validate" name="strUsername">
                <label for="username">Username</label>
                </div>

                <div class="input-field col s4">
                <input id="password" type="password" class="validate" name="strPassword">
                <label for="password">Password</label>
                </div>

                <div class="input-field col s4">
                <input id="password" type="password" class="validate" name="strReTypePassword">
                <label for="password">Re-type Password</label>
                </div>
            
                <div class="col s12">
                  <p>
                    
                  </p>
                </div>
                <div class="col s12">
                  <p>
                    
                  </p>
                </div>

                <div class="col s6">
                  <a class="btn-large waves-effect waves-light red" href="/">CANCEL
                  <i class="material-icons right">cancel</i>
                  </a>
                </div>

                <div class="col s6">
                  <button class="btn-large waves-effect waves-light" type="submit" name="action">SUBMIT
                  <i class="material-icons right">done</i>
                  </button>
                </div>
                
              </div>
            </form>
        </div>
      </article>  <!--END OF MAIN--> 
 
</div>
@endsection