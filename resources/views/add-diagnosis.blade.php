<html>
	<body>

		Patient Name : {!! $patient->strLastName . ", " . $patient->strFirstName !!}
		<br>	
		Gender : {!! $patient->strGender !!}
		<br>
		Birthday : {!! $patient->datBirthday!!}
		<br>
		Address : {!! $patient->txtAddress !!}
		<br>

		<form action = "add-diagnosis" method="POST">
			<input type="hidden" name="patientId" value="{!! $patient->patientId !!}">
			<label for="diagnosis">DIAGNOSIS</label>
			<input id="diagnosis" name="txtDiagnosis" type="textarea"><br>
			<input type="submit" value="SUBMIT">
		</form>

	</body>

</html>
