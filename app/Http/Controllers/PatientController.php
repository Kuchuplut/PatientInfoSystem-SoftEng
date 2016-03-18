<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Patient;
	use App\MedicalRecord;

	class PatientController extends Controller{

		public function createPatient(Request $request){

			$strStatus;
			try{
				$patient = new Patient;
				$patient->strFirstName = $request->strFirstName;
				$patient->strMiddleName = $request->strMiddleName;
				$patient->strLastName = $request->strLastName;
				$patient->strGender = $request->strGender;
				$patient->strContactNo = $request->strContactNo;
				$patient->txtAddress = $request->txtAddress;
				$patient->boolStatus = 1;
				$patient->dateBirthday = $request->dateBirthday;
				$strStatus = $patient->createPatient();
			}catch(Exception $e){
				dd($e);
				$strStatus = "error";
			}
			if ($strStatus === "success"){
				return view('success')->with('patient', $patient);
			}
			
		}


		public function viewMedicalHistory(Request $request){

			$patient= Patient::getPatient($request->patientId);
			$medicalRecords = MedicalRecord::getAllMedicalRecord($patient->patientId);
			return view('view-medical-history')->with('patient', $patient)
						->with('medicalRecords', $medicalRecords);

		}

		public function getAllPatient(){

			$patientList = Patient::where('boolStatus', 1)
								->get();
			return view('view-patient')->with('patientList', $patientList);

		}

		public function showPatientInfo(Request $request){

			$patient = Patient::getPatient($request->patientId);
			return view('updatePatient')->with('patient', $patient);

		}

		public function updatePatientinfo(Request $request){

			try{
				$patient = new Patient;
				$patient->patientId = $request->patientId;
				$patient->strFirstName = $request->strFirstName;
				$patient->strMiddleName = $request->strMiddleName;
				$patient->strLastName = $request->strLastName;
				$patient->strContactNo = $request->strContactNo;
				$patient->txtAddress = $request->txtAddress;
				$patient->dateBirthday = $request->dateBirthday;
				$strStatus = $patient->updatePatient();
			}catch(Exception $e){
				dd($e);
				$strStatus = "error";
			}
			if ($strStatus === "success"){
				return redirect()->action('PatientController@getAllPatient');
			}
				
		}


		public function deactivatePatient(Request $request){

			try{
				$patient = new Patient;
				$patient->patientId = $request->patientId;
				$strStatus = $patient->deactivatePatient();
			}catch(Exception $e){
				dd($e);
				$strStatus = "error";
			}
			if($strStatus === "success"){
				return redirect()->action('PatientController@getAllPatient');
			}


		}

	}