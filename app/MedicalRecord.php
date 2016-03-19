<?php

	namespace App;

	use Illuminate\Database\Eloquent\Model;
	use App\Patient;

	class MedicalRecord extends Model{

		protected $table = 'tblMedicalRecord';

		public function patient(){
			$this->belongsTo('Patient');
		}

		public function createMedicalRecord(){	


			if ($this->txtDiagnosis== "" || $this->txtDiagnosis == " " || $this->txtDiagnosis == null){
				return "error-input";
			}

			$this->save();
			return "success";
		}

		public static function getAllMedicalRecord($id){

			return MedicalRecord::where('patientIdFK', $id)
						->get();

		}

	}

?>
