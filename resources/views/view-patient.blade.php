@extends('parent')
@section('navbar')
<li><a class="waves-effect waves-light btn blue darken-4 white-text" href="/">LOG-OUT</a></li>
@endsection

@section('mainBody')
<article class="white" style = "border-radius: 10px; ">
	<div class="container">
		<br>
		<h4 class="thin">Patient List</h4>

		<div>
		<table id="example" class="display" cellspacing="0" width="100%">
		        <thead>
		            <tr>
		                <th>Patient No.</th>
		                <th>Name</th>
		                <th>Gender</th>
		                <th>Address</th>
		                <th>Date Created</th>
		                
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
		                <!--<td><button href="#updatePatient" class="modal-trigger">View</button></td>-->
		                <td> 
			                <a href="javascript:updatePatient({{ $patient->patientId }})"><i class="material-icons blue-text text-darken-3">mode_edit</i></a>
			                <form action="/deactivatePatient" method="POST">
			                	<input type="hidden" name="patientId" value="{!! $patient->patientId !!}">
			                	<button type="submit" name="action" ><i class="material-icons red-text">delete</i></button>
			                </form>
			                <a href="javascript:view_all_diagnosis({{ $patient->patientId }})"><i class="material-icons green-text">pageview</i></a>
			                 <a href="javascript:add_diagnosis({{ $patient->patientId }})"><i class="material-icons green-text">accessibility</i></a>

		                </td>
		            </tr>
		            @endforeach
		        </tbody>
		    </table>
		</div>

		<div class="fixed-action-btn" style="bottom: 10%; right: 10%">
		   <a class="btn-floating btn-large blue darken-4 modal-trigger" href="#addPatient">
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
	                        <input type="date" id="bday" name="dateBirthday" required>
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
	                        <a class="btn-large waves-effect waves-light red modal-close">CANCEL
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
	                   <form class="col s12 " action="/updatePatient" method="POST" enctype="multipart/form-data">
	                     <div class="row">
	                    	<input type="hidden" id="patientId_update" name="patientId">
	                       <h6 class="col s12">Name</h6>
	                       <div class="input-field col s4">
	                       <input value=" " id="firstName_update" type="text" class="validate" name="strFirstName" required>
	                       <label for="firstName_update">First Name</label>
	                       </div>

	                       <div class="input-field col s4">
	                       <input value=" " id="middleName_update" type="text" class="validate" name="strMiddleName">
	                       <label for="middleNmame_update">Middle Name</label>
	                       </div>

	                       <div class="input-field col s4">
	                       <input value=" " id="lastName_update" type="text" class="validate" name="strLastName" required>
	                       <label for="lastName_update">Last Name</label>
	                       </div>

	                       <h6 class="col s6">Birthday</h6>

	                       <div class="col s6">
	                         <input type="date" id="bday_update" name="dateBirthday" required>
	                       </div>

	                       <script type="text/javascript">
	                       $('.datepicker').pickadate({
	                           selectMonths: true, // Creates a dropdown to control month
	                           selectYears: 15 // Creates a dropdown of 15 years to control year
	                         });
	                       </script>

	                       <h6 class="col s12">Address</h6>

	                       <div class="input-field col s3">
	                       <input value=" " id="address_update" type="text" class="validate" name="txtAddress" required>
	                       <label for="address_update">Address</label>
	                       </div>

	                       <h6 class="col s12">Contact Information</h6>

	                       <div class="input-field col s6">
	                       <input value=" " id="contactNo_update" type="text" class="validate" name="strContactNo"required>
	                       <label for="contactNo_update">Contact No.</label>
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
	                         <button class="btn-large waves-effect waves-light" type="submit" name="action">SUBMIT
	                         <i class="material-icons right">done</i>
	                         </button>
	                       </div>
	                   </form>
	                   		<div class="col s6">
	                         <a class="btn-large waves-effect waves-light red">CANCEL
	                         <i class="material-icons right">cancel</i>
	                         </a>
	                       	</div>
	                       
	                     </div>
	                     <s:token />
	             </div>
	  </div>

	  <!-- Modal Structure for Add Diagnosis -->
	  <div id="addDiagnosis" class="modal">
	    <div class="modal-content">
	     <h4 class="col s12 blue-text text-darken-2">Add Diagosis</h4>
	                   <form class="col s12 " action="/add-diagnosis" method="post" enctype="multipart/form-data">
	                    	<div class="row">
	                    		<input name="patientId_diagnosis" id="patientId_diagnosis" type="hidden">
	                    	<h4>Patient number: <span id="patientId_diagnosisSpan" class="blue-text text-darken-4"></span></h4>
	                    	<h4>Patient name: <span id="patientName_diagnosis" class="blue-text text-darken-4"></span></h4>
	                    	<h4>Patient gender: <span id="patientGender_diagnosis" class="blue-text text-darken-4"></span></h4>
	                    	<h4>Patient birthday: <span id="patientBirthday_diagnosis" class="blue-text text-darken-4"></span></h4>
	                    	 

	                    	<!-- Test Select Start -->
									<div class="row">
										<h6>Extra Charges</h6>
					 			 		<div class="input-field col s6">
					 					 <select id="test-list"  class="browser-default">
					 								 <option value="" disabled selected>Choose your option</option>
					 								 <option value="Urinalysis">Urinalysis</option>
					 								 <option value="Blood Test">Blood Test</option>
					 								 <option value="CT Scan">CT Scan</option>
					 								 <option value="XRay">XRay</option>
					 								 <option value="customize">Test</option>
					 					 </select>
					 					 <!-- <label>Package Available</label> -->
					 					</div>

					 					<div class="input-field col s6">
					 						 <input type="text" class="validate" id="test_desc">
					 						 <label for="test_desc">Description</label>
					 					</div>

					 					<div class="col s12 center">
					 						 <a class="waves-effect waves-light btn col s4 center" onclick="addTestToTable()"><i class="material-icons">add</i></a>
					 					</div>
							 		</div>
							 	</div>

							 	<div class="col s6">
							 		<div class="row center">
							 			<table class="centered highlight">
							 				<thead>
						 				        <tr>
						 				            <th data-field="id">Name</th>
						 				            <th data-field="name">Description</th>
						 				            <th data-field="price">Action</th>
						 				        </tr>
						 				      </thead>
							 			</table>
										 <table class="centered highlight bordered" id="testTable">

										 </table>
									 </div>
							 	</div>	

	                    	  <div class="row">
	                    	   <div class="input-field col s6">
					 						 <input type="text" class="validate" name="txtDiagnosis" id="test_desc2">
					 						 <label for="test_desc2">Description</label>
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
	                    	    <a class="btn-large waves-effect waves-light red modal-close">CANCEL
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
	  </div>



	  <!-- Modal Structure for Add Diagnosis -->
	  <div id="reports" class="modal">
	    <div class="modal-content">
	     <h4 class="col s12 blue-text text-darken-2">Patient Report</h4>
	                   <form class="col s12 " action="signupSubmit" method="post" enctype="multipart/form-data">
	                    	<div class="row">

	                    	<h5>Patient number: <span id="view_patientId_diagnosisSpan" class="blue-text text-darken-4"></span></h5>
	                    	<h5>Patient name: <span id="view_patientName_diagnosis" class="blue-text text-darken-4"></span></h5>
	                    	<h5>Patient gender: <span id="view_patientGender_diagnosis" class="blue-text text-darken-4"></span></h5>
	                    	<h5>Patient birthday: <span id="view_patientBirthday_diagnosis" class="blue-text text-darken-4"></span></h5>
	                    	  
	                    	
	                    	<h4 class="thin">Diagnosis: </h4>
	                    	<div>
	                    	<table id="medical" class="display" cellspacing="0" width="100%">
	                    	      <thead>
	                    	            <tr>
	                    	                <th>Record Id</th>
	                    	                <th>Date</th>
	                    	                <th>Diagnosis</th>
	                    	            </tr>
	                    	        </thead>
	                    	        <tbody>
	                    	        	
	                    	        </tbody>
	                    	</table>
	                    	</div>
	                    	  
	                    	</div>
	                   </form>
	             </div>
	  </div>
</article>

<style type="text/css">
	#addPatient{
		width: 1000px !important;
	}
	#updatePatient{
		width: 1000px !important;
	}
	#addDiagnosis{
		width: 1000px !important;
	}
</style>


<script type="text/javascript">
	function updatePatient(id){

		$.ajax({
			type: "GET",
			url: "updatePatient?patientId="+id,
			async : true,
			dataType: "json",
			success: function(data){
				
				$('#updatePatient').openModal();
				$('#patientId_update').val(data.patientId);
				$('#firstName_update').val(data.strFirstName);
				$('#middleName_update').val(data.strMiddleName);
				$('#lastName_update').val(data.strLastName);
				$('#bday_update').val(data.dateBirthday);
				$('#address_update').val(data.txtAddress);
				$('#contactNo_update').val(data.strContactNo);

			},
			error:function(xhr){

			}
		});

	}

	function add_diagnosis(id){

		$.ajax({
			type: "GET",
			url: "updatePatient?patientId="+id,
			async : true,
			dataType: "json",
			success: function(data){
				
				$('#addDiagnosis').openModal();
				$('#patientId_diagnosis').val(data.patientId);
				$('#patientId_diagnosisSpan').text(data.patientId);
				$('#patientName_diagnosis').text(data.strFirstName+" "+data.strLastName);
				$('#patientGender_diagnosis').text(data.strGender);
				$('#patientBirthday_diagnosis').text(data.dateBirthday);

			},
			error:function(xhr){

			}
		});

	}

	function view_all_diagnosis(id){

		$.ajax({
			type: "GET",
			url: "updatePatient?patientId="+id,
			async : true,
			dataType: "json",
			success: function(data){
				
				$('#reports').openModal();
				$('#view_patientId_diagnosisSpan').text(data.patientId);
				$('#view_patientName_diagnosis').text(data.strFirstName+" "+data.strLastName);
				$('#view_patientGender_diagnosis').text(data.strGender);
				$('#view_patientBirthday_diagnosis').text(data.dateBirthday);

				$.ajax({
					type: "GET",
					url: "view-medical-history?patientId="+id,
					async : true,
					dataType: "json",
					success: function(data){

						var table = $('#medical').DataTable();
		        	
		        		$.each(data, function(i, medical){
		        			
		        			table.row.add( [
		    	        		            medical.medicalRecordsId,
		    	        		            medical.created_at,
		    	        		            medical.txtDiagnosis
		    	        		            ]);
		        		});
		        		
		        		table.draw();
					}
				});

			},
			error:function(xhr){

			}
		});

	}

</script>

@endsection