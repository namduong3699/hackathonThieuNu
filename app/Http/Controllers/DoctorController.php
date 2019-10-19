<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalExaminationForm;
use App\MedicalExaminationDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use App\Disease;
use App\User;
use App\Doctor;
use App\Medicine;
use App\PrescriptionDetail;
use App\PrescriptionForm;

class DoctorController extends Controller
{
	function index() {
		return view('Doctor/index');
	}

    function createMedicalReport(Request $req) {
    	// $medicalReport = new MedicalExaminationDetail();
     //    $medicalReport->disease_id = $req->disease;
     //    $medicalReport->doctor_id = Auth::user()->id;
     //    $medicalReport->sympton = $req->sympton;
    	// $medicalReport->save();
    	// foreach($medicines as $medicine){
    	// 	$med = new Medicine();

    	// }
    }

    function createMedicalReportDetail(Request $req) {
        $medicalReportDetail = new MedicalExaminationDetail();
        $medicalReportDetail->medical_report_id = $req->medicalReportId;
        $medicalReportDetail->disease_id = $req->disease;
        $medicalReportDetail->doctor_id = Auth::user()->id;
        $medicalReportDetail->sympton = $req->sympton;
        $medicalReportDetail->date = date('Y-m-d H:i:s');
        $medicalReportDetail->medicine_id = $req->medicine;
        $medicalReportDetail->quantity = $req->quantity;
        $medicalReportDetail->save();        
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
        $medicalReportdetail = MedicalExaminationDetail::where('medical_report_id', $req->medicalReportId)->get();
        
        foreach($medicalReportdetail as $med) {
            $doctor = Doctor::find($med->doctor_id)->get('name');
            $disease = Disease::find($med->disease_id)->get('name');
            $medicine = Medicine::find($med->medicine_id)->get('name');
            $med->doctor = $doctor->first()->name;
            $med->disease = $disease->first()->name;
            $med->medicine = $medicine->first()->name;
            // dd($med->id);
        }

        // dd($medicalReportdetail);
        // $doctor = Doctor::find($medicalReportdetail->doctor_id);
        // dd($medicalReport);
        // $disease = Disease::where('id', $medicalReport->disease_id)->get();
        $diseaseAll = Disease::all();
        $medicineAll = Medicine::all();
        return view('Doctor/reportDetail', [
            'diseaseAll' => $diseaseAll, 
            'medicineAll' => $medicineAll,
            'medicalReportId' => $req->medicalReportId,
            'medicalReportdetail' => $medicalReportdetail
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

    function getDoctorDetail(Request $req) {
        $doctor = Doctor::find($req->id);
        return view('Doctor/doctorDetail', ['doctor' => $doctor]);
    }
}
