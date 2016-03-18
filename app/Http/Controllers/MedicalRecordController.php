<?php


	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\MedicalRecord;
	use App\Patient;



	class MedicalRecordController extends Controller{
		 public function createMedicalRecord(Request $request){

			
			try{
				$strStatus;
				$medicalRecord = new MedicalRecord;
				$medicalRecord->patientIdFK = $request->patientId;
				$medicalRecord->txtDiagnosis = $request->txtDiagnosis; 

				$strStatus = $medicalRecord->createMedicalRecord();
			}catch(Exception $e){
				dd($e);
				$strStatus = "error";
			}
			if ($strStatus === "success"){
				return view('success-medical')->with('MedicalRecord', $medicalRecord);
			}
			
		}

		public function getPatientInfo(Request $request){

			$patient = Patient::getPatient($request->patientId);
			return view('add-diagnosis')->with('patient', $patient);

		}

	

	}
?>
