@extends('parent')
@section('mainBody')
  <div class="wrapper">
      <article class="main white"> <!--START OF MAIN-->    
        <div class="row container">         
            <h4 class="col s12 blue-text text-darken-2">Maintenance</h4>
              <form class="col s12 " action="signupSubmit" method="post" enctype="multipart/form-data">
                <div class="row">

                  <h6 class="col s12">Update fees</h6>

                  <div class="input-field col s6">
                     <select>
                       <option value="" disabled selected>Choose your option</option>
                       <option value="1">Check up</option>
                       <option value="2">Laboratory</option>
                       <option value="3">Blood Test</option>
                     </select>
                     <label>Fee Category</label>
                   </div>

                  <div class="input-field col s6">
                  <input id="studentNo" type="number" class="validate" value="001" name="student.strStudentCode">
                  <label for="studentNo">Amount</label>
                  </div>

                  <a href="#AddFeeModal" class="waves-effect waves-light btn blue darken-4 white-text modal-trigger col s4" ><i class="material-icons large white-text left">add</i>ADD FEE</a>

                  <h6 class="col s12">Update Doctor</h6>

                  <div class="input-field col s6">
                     <select>
                       <option value="" disabled selected>Choose your option</option>
                       <option value="1">Jerry Stits</option>
                       <option value="2">Jimmy Mountain</option>
                       <option value="3">Ryan Good</option>
                     </select>
                     <label>Fee Category</label>
                   </div>

                  <div class="input-field col s6">
                  <input id="studentNo" type="number" class="validate" value="001" name="student.strStudentCode">
                  <label for="studentNo">Rate</label>
                  </div>

                   <a href="#AddDoctorModal" class="waves-effect waves-light btn blue darken-4 white-text modal-trigger col s4 center" ><i class="material-icons large white-text left">add</i> ADD DOCTOR</a>

                   <div class="col s12">
                     <p>
                       
                     </p>
                   </div>

                   <div class="col s12">
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