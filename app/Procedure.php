<?php


namespace App;

	use Illuminate\Database\Eloquent\Model;
	use App\MedicalRecord;
	use App\Patient;

	class Procedure extends Model{

			protected $table = 'tblProcedure';
	}

		public function createProcedure(){	


			if ($this->== "" || $this->txtDiagnosis == " " || $this->txtDiagnosis == null){
				return "error-input";
			}

			$this->save();
			return "success";
		}

		public static function getAllMedicalRecord($id){

			return MedicalRecord::where('patientIdFK', $id)
						->get();

		}



?>