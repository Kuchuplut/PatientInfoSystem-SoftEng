@extends('parent')
@section('mainBody')
  <div class="wrapper">
      <article class="main white"> <!--START OF MAIN-->    
        <div class="row container">         
            <h4 class="col s12 blue-text text-darken-2">Add Patient</h4>
              <form class="col s12 " action="signupSubmit" method="post" enctype="multipart/form-data">
                <div class="row">

                  <div class="input-field col s12">
                  <input id="studentNo" type="text" class="validate" value="001" name="student.strStudentCode">
                  <label for="studentNo">Patient Number</label>
                  </div>

                  <h6 class="col s12">Name</h6>
                  <div class="input-field col s4">
                  <input id="firstName" type="text" class="validate" name="student.name.strFirstName" required>
                  <label for="firstName">First Name</label>
                  </div>

                  <div class="input-field col s4">
                  <input id="middleName" type="text" class="validate" name="student.name.strMiddleName">
                  <label for="middleNmame">Middle Name</label>
                  </div>

                  <div class="input-field col s4">
                  <input id="lastName" type="text" class="validate" name="student.name.strLastName" required>
                  <label for="lastName">Last Name</label>
                  </div>

                  <h6 class="col s6">Birthday</h6>
                  <h6 class="col s6">Gender</h6>

                  <div class="col s6">
                    <input type="date" class="datepicker" id="bday" name="student.birthday" required>
                  </div>

                  <script type="text/javascript">
                  $('.datepicker').pickadate({
                      selectMonths: true, // Creates a dropdown to control month
                      selectYears: 15 // Creates a dropdown of 15 years to control year
                    });fa
                  </script>

                  <div class="col s6">
                    <p>
                      <input name="student.strGender" type="radio" id="male" value="Male"/>
                      <label for="male">Male</label>
                    
                      <input name="student.strGender" type="radio" id="female" value="Female"/>
                      <label for="female">Female</label>
                    </p>
                  </div>

                  <h6 class="col s12">Address</h6>

                  <div class="input-field col s3">
                  <input id="houseNO" type="text" class="validate" name="student.address.strHouseNo" required>
                  <label for="houseNO">Number</label>
                  </div>

                  <div class="input-field col s3">
                  <input id="street" type="text" class="validate" name="student.address.strStreet" required>
                  <label for="street">Street</label>
                  </div>

                  <div class="input-field col s3">
                  <input id="brgy" type="text" class="validate" name="student.address.strBarangay" required>
                  <label for="brgy">Barangay</label>
                  </div>

                  <div class="input-field col s3">
                  <input placeholder="(optional)"id="subd" type="text" class="validate" name="student.address.strSubdivision">
                  <label for="subd">Subdivision</label>
                  </div>


                  <div class="input-field col s6">
                  <input id="city" type="text" class="validate" name="student.address.strCity" required>
                  <label for="city">City</label>
                  </div>

                  <div class="input-field col s6">
                  <input id="province" type="text" class="validate" name="student.address.strProvince" required>
                  <label for="province">Province</label>
                  </div>

                  <h6 class="col s12">Contact Information</h6>

                  <div class="input-field col s6">
                  <input id="email" type="email" class="validate" name="student.strEmail" required>
                  <label for="email">E-mail Address</label>
                  </div>

                  <div class="input-field col s6">
                  <input id="contanctNo" type="text" class="validate" name="student.strContactNo"required>
                  <label for="contanctNo">Contact No.</label>
                  </div>

                  <div class="row">
                    <div class="input-field col s12">
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <label for="textarea1">Diagnosis</label>
                    </div>
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
                    <a class="btn-large waves-effect waves-light red" href="index.jsp">CANCEL
                    <i class="material-icons right">cancel</i>
                    </a>
                  </div>

                  <div class="col s6">
                    <button class="btn-large waves-effect waves-light" type="submit" name="action">SUBMIT
                    <i class="material-icons right">done</i>
                    </button>
                  </div>
                  
                </div>
                <s:token />
              </form>
        </div>
      </article>  <!--END OF MAIN--> 
          <aside class="aside aside-1">
             
          </aside>
          <aside class="aside aside-2">

          </aside>
</div>
@endsection