<html>

	<body>

		<table>
			<thead>
				<td>Name</td>
				<td>Gender</td>
				<td>Birthday</td>
				<td>Address</td>
				<td>Actions</td>
			</thead>
			<tbody>
			@foreach($patientList as $patient)

				<tr>
					<td>{!! $patient->strFirstName . " " . $patient->strMiddleName ." ". $patient->strLastName !!}</td>
					<td> {!! $patient->strGender !!}</td> 
					<td> {!! $patient->dateBirthday !!}</td> 
					<td> {!! $patient->txtAddress !!}</td>
					<td>
						<form action="updatePatient" method="GET">
							<input type="hidden" value="{!! $patient->patientId !!}" name="patientId">
							<input type="submit" value="UPDATE">
						</form>

						<form action="deactivatePatient" method="GET">
							<input type="hidden" value="{!! $patient->patientId !!}" name="patientId">
							<input type="submit" value="DEACTIVATE">
						</form>
					</td>


				</tr>

			@endforeach
			</tbody>
		</table>

	</body>

</html>