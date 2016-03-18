<html>

	<body>


		<form action="updatePatient" method="POST">
			<input type="hidden" name="patientId" value="{!! $patient->patientId !!}">
			<label for="firstName">First name</label>
			<input id="firstName" name="strFirstName" type="text" value="{!! $patient->strFirstName !!}"><br>
			<label for="middleName">Middle name</label>
			<input id="middleName" name="strMiddleName" type="text" value="{!! $patient->strMiddleName !!}"><br>
			<label for="lastName">Last name</label>
			<input id="lastName" name="strLastName" type="text" value="{!! $patient->strLastName !!}"><br>
			
			<label for="lastName">Contact No.</label>
			<input id="Contact" name="strContactNo" type="text" value="{!! $patient->strContactNo !!}"><br>
			
			<label for="Adress">Adress</label>
			<input id="Address" name="txtAddress" type="text" value="{!! $patient->txtAddress !!}"><br>
			<label for="Adress">Birthdate</label>
			<input id="Address" name="dateBirthday" type="date" value="{!! $patient->dateBirthday !!}"><br>
			
			<input type="submit" value="UPDATE">
		</form>

	</body>

</html>