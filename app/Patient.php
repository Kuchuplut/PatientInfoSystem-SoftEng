<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Patient extends Model{

		protected $table = 'tblPatient';

		public function createPatient(){

			if ($this->strFirstName == "" || $this->strFirstName == " " || $this->strFirstName == null){
				return "error-input";
			}
			$this->save();
			return "success";


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

