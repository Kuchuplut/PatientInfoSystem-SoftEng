<?php
	
	namespace App;

	use Illuminate\Database\Eloquent\Model;

	class Doctor extends Model{

		protected $table = 'tblDoctor';

		public function create(){

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

	}