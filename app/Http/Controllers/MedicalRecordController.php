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
				$medicalRecord->patientIdFK = $request->patientId_diagnosis;
				$medicalRecord->txtDiagnosis = $request->txtDiagnosis; 
				$medicalRecord->doctorIdFK = session()->get('doctorId');

				$strStatus = $medicalRecord->createMedicalRecord();
			}catch(Exception $e){
				dd($e);
				$strStatus = "error";

			}
	
			if ($strStatus === "success"){
				return redirect()->action('PatientController@getAllPatient');
			}
			
		}

		public function getPatientInfo(Request $request){

			$patient = Patient::getPatient($request->patientId);
			return view('add-diagnosis')->with('patient', $patient);

		}

	

	}
?>
