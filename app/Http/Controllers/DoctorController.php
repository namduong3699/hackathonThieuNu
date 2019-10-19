<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalExaminationForm;
use App\MedicalExaminationDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\Patient;
use App\Disease;
use App\User;
use App\Medicine;

class DoctorController extends Controller
{
	function index() {
		return view('Doctor/index');
	}

    function createMedicalReport(Request $req) {
    	$medicalReport = new MedicalExaminationDetail();
        $medicalReport->disease_id = $req->disease;
        $medicalReport->doctor_id = Auth::user()->id;
        $medicalReport->sympton = $req->sympton;
    	$medicalReport->save();
    	foreach($medicines as $medicine){
    		$med = new Medicine();

    	}
    }

    function createMedicalReportDetail(Request $req) {

    }

    function searchPatient() {
    	return view('Doctor/searchPatient');
    }

    function searchPatientByName(Request $request) {
    	$patient = Patient::where('name', 'like', '%' . $request->get('name') . '%')->get();
    	return response()->json($patient);
    }


    //Chi tiết bệnh nhân
    function patientDetail(Request $req) {
        $patient = Patient::where('id', $req->id)->first();
        $medicalReport = MedicalExaminationForm::where('patient_id', $req->id)->orderBy('id', 'desc')->get();
        return view('Doctor/patientDetail', ['patient' => $patient, 'medicalReport' => $medicalReport]);
    }

    function reportDetail(Request $req) {
        $medicalReport = MedicalExaminationDetail::where('id', $req->medicalExaminattionId)->get();
        // dd($medicalReport);
        // $disease = Disease::where('id', $medicalReport->disease_id)->get();
        $diseaseAll = Disease::all();
        $medicineAll = Medicine::all();
        return view('Doctor/reportDetail', [
            'diseaseAll' => $diseaseAll, 
            'medicineAll' => $medicineAll
        ]);

    }

    function search() {
        return view('Doctor/search');
    }

    function createPatient() {
        return view('Doctor/createPatient');
    }

    function createPatientPost(Request $req) {
        $userCheck = User::where('email','=', $req->email)->get();
        if(count($userCheck)) {
            $errors = new MessageBag(['emailAlreadyExists' => 'Email đã được sử dụng']);
            return redirect()->back()->withInput()->withErrors($errors);
        }

        $patient = new Patient();
        $patient->name = $req->name;
        $patient->birthday = $req->birthday;
        $patient->address = $req->address;
        $patient->phone = $req->phone;
        $patient->email = $req->email;

        $user = new User();
        $user->email = $patient->email;
        $user->password = Hash::make($req->password);
        $user->levels = 2;

        $patient->user_id = $user->id;


        if($patient->save() && $user->save()) {
            return view('Doctor/createPatient', ['success' => true]);
        } else {
            return view('Doctor/createPatient', ['success' => false]);
        }
    }

    function getMedicineAjax(Request $req) {
        $medicine = Medicine::where('name', 'like', '%'.$req->name.'%')->get();
        return $medicine->toJSON();
    }
}
