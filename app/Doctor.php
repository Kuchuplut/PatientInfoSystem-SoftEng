<?php
	
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Doctor extends Model{

		protected $table = 'tblDoctor';

		public function createDoctor(){

			$this->save();
			return "success";

		}

		public function login(){

			$boolLogin = Doctor::where('strUsername', $this->strUsername)
							->where('strPassword', $this->strPassword)
							->count();
			if ($boolLogin != 0){
				return "success";
			}else{
				return "failed";
			}

		}

		public function getId(){
			$doctor = Doctor::where('strFirstName', $this->strFirstName)
							->where('strMiddleName', $this->strMiddleName)
							->where('strLastName', $this->strLastName)
							->first();
			return $doctor->doctorId;
		}

		public function getIdByUsername(){
			$doctor = Doctor::where('strUsername', $this->strUsername)
							->first();
			return $doctor->doctorId;
		}

	}