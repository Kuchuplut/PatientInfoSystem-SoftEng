<html>

	<body>

		<form action="createPatient" method="POST">
			<label for="firstName">First name</label>
			<input id="firstName" name="strFirstName" type="text"><br>
			<label for="middleName">Middle name</label>
			<input id="middleName" name="strMiddleName" type="text"><br>
			<label for="lastName">Last name</label>
			<input id="lastName" name="strLastName" type="text"><br>

			<label for="lastName">Gender</label>
			<input id="gender" name="strGender" type="radio" value="Male">Male
			<input id="gender" name="strGender" type="radio" value="Female">Female<br>
			
			<label for="lastName">Contact No.</label>
			<input id="Contact" name="strContactNo" type="text"><br>
			
			<label for="Adress">Adress</label>
			<input id="Address" name="txtAddress" type="text"><br>
			<label for="Adress">Birthdate</label>
			<input id="Address" name="dateBirthday" type="date"><br>
			
			<input type="submit" value="CREATE">
		</form>

	</body>

</html>