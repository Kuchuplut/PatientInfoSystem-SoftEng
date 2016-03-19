@extends('parent')
@section('navbar')
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">VIEW PATIENT</a></li>
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="">REPORTS</a></li>
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="/checkup">CHECK UP</a></li>
@endsection

@section('mainBody')
<div class="container">
<article class="white" style = "border-radius: 10px;">
	<div class="container">
		<br>
		<h4 class="thin">Admin List</h4>

		<div>
		<table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Patient No.</th>
		                <th>Name</th>
		                <th>Gender</th>
		                <th>Address</th>
		                <th>Date Created</th>
		                <th>Diagnosis</th>
		                <th>Actions</th>
		            </tr>
		        </thead>
		        <tbody>
		        	@foreach($patientList as $patient)
		            <tr>
		            	<td>{!! $patient->patientId !!}</td>
		                <td>{!! $patient->strLastName . ', ' . $patient->strFirstName . ' ' . $patient->strMiddleName !!}</td>
		                <td>{!! $patient->strGender !!}</td>
		                <td>{!! $patient->txtAddress !!}</td>
		                <td>{!! $patient->created_at !!}</td>
		                <td><button href="#updatePatient" class="modal-trigger">View</button></td>
		                <td> 
			                <a onclick="updatePatient(this.value)" class="modal-trigger" value="{!! $patient->patientId !!}"><i class="material-icons blue-text text-darken-3">mode_edit</i></a>
			                <form action="/deactivatePatient" method="POST">
			                	<input type="hidden" name="patientId" value="{!! $patient->patientId !!}">
			                	<button type="submit" name="action" ><i class="material-icons red-text">delete</i></button>
			                </form>
			                <a href=""><i class="material-icons green-text">payment</i></a>
		                </td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		</div>

		<div class="fixed-action-btn" style="bottom: 10%; right: 10%">
		   <a class="btn-floating btn-large green darken-4 modal-trigger" href="#addPatient">
		     <i class="large material-icons">add</i>
		   </a>
		 </div>
		<div>
			<br>
		</div>
	</div>

	<!-- Modal Structure for Add Patient -->
	 <div id="addPatient" class="modal">
	   <div class="modal-content">
	    <h4 class="col s12 blue-text text-darken-2">Add Patient</h4>
	                  <form class="col s12 " action="/createPatient" method="post" enctype="multipart/form-data">
	                    <div class="row">

	                      <h6 class="col s12">Name</h6>
	                      <div class="input-field col s4">
	                      <input id="firstName" type="text" class="validate" name="strFirstName" required>
	                      <label for="firstName">First Name</label>
	                      </div>

	                      <div class="input-field col s4">
	                      <input id="middleName" type="text" class="validate" name="strMiddleName">
	                      <label for="middleNmame">Middle Name</label>
	                      </div>

	                      <div class="input-field col s4">
	                      <input id="lastName" type="text" class="validate" name="strLastName" required>
	                      <label for="lastName">Last Name</label>
	                      </div>

	                      <h6 class="col s6">Birthday</h6>
	                      <h6 class="col s6">Gender</h6>

	                      <div class="col s6">
	                        <input type="date" class="datepicker" id="bday" name="dateBirthday" required>
	                      </div>

	                      <script type="text/javascript">
	                      $('.datepicker').pickadate({
	                          selectMonths: true, // Creates a dropdown to control month
	                          selectYears: 15 // Creates a dropdown of 15 years to control year
	                        });
	                      </script>

	                      <div class="col s6">
	                        <p>
	                          <input name="strGender" type="radio" id="male" value="Male"/>
	                          <label for="male">Male</label>
	                        
	                          <input name="strGender" type="radio" id="female" value="Female"/>
	                          <label for="female">Female</label>
	                        </p>
	                      </div>

	                      <h6 class="col s12">Address</h6>

	                      <div class="input-field col s3">
	                      <input id="houseNO" type="text" class="validate" name="strHouseNo" required>
	                      <label for="houseNO">Number</label>
	                      </div>

	                      <div class="input-field col s3">
	                      <input id="street" type="text" class="validate" name="strStreet" required>
	                      <label for="street">Street</label>
	                      </div>

	                      <div class="input-field col s3">
	                      <input id="brgy" type="text" class="validate" name="strBarangay" required>
	                      <label for="brgy">Barangay</label>
	                      </div>

	                      <div class="input-field col s3">
	                      <input placeholder="(optional)"id="subd" type="text" class="validate" name="strSubdivision">
	                      <label for="subd">Subdivision</label>
	                      </div>


	                      <div class="input-field col s6">
	                      <input id="city" type="text" class="validate" name="strCity" required>
	                      <label for="city">City</label>
	                      </div>

	                      <div class="input-field col s6">
	                      <input id="province" type="text" class="validate" name="strProvince" required>
	                      <label for="province">Province</label>
	                      </div>

	                      <h6 class="col s12">Contact Information</h6>

	                      <div class="input-field col s6">
	                      <input id="contanctNo" type="text" class="validate" name="strContactNo"required>
	                      <label for="contanctNo">Contact No.</label>
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
	 </div>

	 <!-- Modal Structure for Update Patient -->
	  <div id="updatePatient" class="modal">
	    <div class="modal-content">
	     <h4 class="col s12 blue-text text-darken-2">Update Patient</h4>
	                   <form class="col s12 " action="/updatePatient" method="post" enctype="multipart/form-data">
	                     <div class="row">

	                       <h6 class="col s12">Name</h6>
	                       <div class="input-field col s4">
	                       <input id="firstName_update" type="text" class="validate" name="strFirstName" required>
	                       <label for="firstName_update">First Name</label>
	                       </div>

	                       <div class="input-field col s4">
	                       <input id="middleName_update" type="text" class="validate" name="strMiddleName">
	                       <label for="middleNmame_update">Middle Name</label>
	                       </div>

	                       <div class="input-field col s4">
	                       <input id="lastName_update" type="text" class="validate" name="strLastName" required>
	                       <label for="lastName_update">Last Name</label>
	                       </div>

	                       <h6 class="col s6">Birthday</h6>

	                       <div class="col s6">
	                         <input type="date" class="datepicker" id="bday_update" name="datebirthday" required>
	                       </div>

	                       <script type="text/javascript">
	                       $('.datepicker').pickadate({
	                           selectMonths: true, // Creates a dropdown to control month
	                           selectYears: 15 // Creates a dropdown of 15 years to control year
	                         });
	                       </script>

	                       <h6 class="col s12">Address</h6>

	                       <div class="input-field col s3">
	                       <input id="address_update" type="text" class="validate" name="txtAddress" required>
	                       <label for="address_update">Address</label>
	                       </div>

	                       <h6 class="col s12">Contact Information</h6>

	                       <div class="input-field col s6">
	                       <input id="contanctNo_update" type="text" class="validate" name="strContactNo"required>
	                       <label for="contanctNo_update">Contact No.</label>
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
	                         <a class="btn-large waves-effect waves-light red">CANCEL
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
	  </div>

	  

</article>
</div>

<style type="text/css">
	#modal1{
		width: 1000px !important;
	}
</style>

<script type="text/javascript">
	function updatePatient(id){

		$.ajax({
			type: "GET",
			url: "updatePatient",
			data: {
				"patientId" : id
			},
			dataType: "json",
			success: function(data){
				$('#updatePatient').openModal();
				console.log(data);
			},
			error:function(xhr){

			}
		});

	}
</script>

@endsection