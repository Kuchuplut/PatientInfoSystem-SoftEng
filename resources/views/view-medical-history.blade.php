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

		<table>
			<thead>
				<td>DIAGNOSIS ID</td>
				<td>Date</td>
				<td>Diagnosis</td>
			</thead>

			<tbody>
				@foreach($medicalRecords as $medicalRecord)
					<td>{!! $medicalRecord->medicalRecordsId !!}</td>
					<td>{!! $medicalRecord->created_at !!}</td>
					<td>{!! $medicalRecord->txtDiagnosis !!}</td>
				@endforeach
			<tbody>
		</table>



	</body>

</html>