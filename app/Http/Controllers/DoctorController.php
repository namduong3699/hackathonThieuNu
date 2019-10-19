<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalExaminationForm;
use App\MedicalExaminationDetail;
use Illuminate\Support\Facades\Hash;
use App\Patient;
use App\Disease;
use App\User;

class DoctorController extends Controller
{
	function index() {
		return view('Doctor/index');
	}



    function createMedicalReport(Request $req) {
    	$medicalReport = new MedicalExaminationForm();
    	// $medicalReport->patient_id = $req->patient_id;
        $medicalReport->disease_id = $req->disease_id;
        $medicalReport->doctor_id = Auth::user()->id;
        $medicalReport->sympton = $req->sympton;
    	$medicalReport->save();
    	// for(){
    	// 	$medical
    	// }
    }

    function createMedicalReportDetail() {

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
        $medicalReport = MedicalExaminationForm::where('patient_id', $req->id)->get();
        return view('Doctor/patientDetail', ['patient' => $patient, 'medicalReport' => $medicalReport]);
    }

    function reportDetail(Request $req) {
        $medicalReport = MedicalExaminationDetail::where('id', $req->medicalExaminattionId)->get();
        // dd($medicalReport);
        // $disease = Disease::where('id', $medicalReport->disease_id)->get();
        return view('Doctor/reportDetail');

    }

    function search() {
        return view('Doctor/search');
    }

    function createPatient() {
        return view('Doctor/createPatient');
    }

    function createPatientPost(Request $req) {
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
        if($patient->save() && $user->save()) {
            return view('Doctor/createPatient', ['error' => false]);
        } else {
            return view('Doctor/createPatient', ['error' => true]);
        }
    }
}
