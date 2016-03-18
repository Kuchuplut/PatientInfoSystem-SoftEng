<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use App\MedicalRecord;

	class Patient extends Model{

		public function medicalRecord(){
			$this->hasMany('MedicalRecord');
		}


		protected $table = 'tblPatient';

		public function createPatient(){

			if ($this->strFirstName == "" || $this->strFirstName == " " || $this->strFirstName == null){
				return "error-input";
			}
			$this->save();
			return "success";


		}

		public static function getPatient($id){

			$patient = Patient::where('patientId', $id)
							->where('boolStatus', 1)
							->first();
			return $patient;

		}

		public function updatePatient(){

			if ($this->strFirstName == "" || $this->strFirstName == " " || $this->strFirstName == null){
				return "error-input";
			}
			Patient::where('patientId', $this->patientId)
				->where('boolStatus', 1)
				->update([
					'strFirstName' => $this->strFirstName,
					'strMiddleName' => $this->strMiddleName,
					'strLastName' => $this->strLastName,
					'strContactNo' => $this->strContactNo,
					'txtAddress' => $this->txtAddress,
					'dateBirthday' => $this->dateBirthday

					]);
			return "success";

		}

		public function deactivatePatient(){
			Patient::where('patientId', $this->patientId)
						->where('boolStatus',1)
						->update(['boolStatus' => 0]);
			return "success";
		}


	}

