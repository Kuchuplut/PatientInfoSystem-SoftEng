<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	use App\Http\Requests;
	use App\Doctor;



	class DoctorController extends Controller{

		public function createDoctor(Request $request){

			try{

				$doctor = new Doctor;
				$doctor->strFirstName = $request->strFirstName;
				$doctor->strMiddleName = $request->strMiddleName;
				$doctor->strLastName = $request->strLastName;
				$doctor->strUsername = $request->strUsername;
				$doctor->strPassword = $request->strPassword;
				$address = $request->strHouseNo . " " . $request->strStreet . " " . $request->strBarangay . " " . $request->strSubdivision . " " . $request->strCity . " " . $request->strProvince;
				$doctor->txtAddress = $address;
				$doctor->dateBirthday = $request->dateBirthday;
				$doctor->strEmail = $request->strEmail;
				$doctor->strContactNo = $request->strContactNo;
				$doctor->createDoctor();
				session()->put('doctorId', $doctor->getId());

				return redirect()->action('PatientController@getAllPatient');

			}catch(Exception $e){
				dd($e);
			}

		}	

		public function loginDoctor(Request $request){

			try{

				$doctor = new Doctor;
				$doctor->strUsername = $request->strUsername;
				$doctor->strPassword = $request->strPassword;
				$status = $doctor->login();
				if ($status === "success"){
					session()->put('doctorId', $doctor->getIdByUsername());
					return redirect()->action('PatientController@getAllPatient');
				}else{
					return view('landing');
				}

			}catch(Exception $e){
				dd($e);
			}

		}

	}
