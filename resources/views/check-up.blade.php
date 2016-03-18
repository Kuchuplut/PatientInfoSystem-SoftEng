@extends('parent')

@section('navbar')
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">VIEW PATIENT</a></li>
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">REPORTS</a></li>
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">CHECK UP</a></li>
@endsection
@section('mainBody')
  <div class="wrapper">
      <article class="main white"> <!--START OF MAIN-->    
        <div class="row container">         
            <h4 class="col s12 blue-text text-darken-2">Check Up</h4>
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
 
</div>
@endsection