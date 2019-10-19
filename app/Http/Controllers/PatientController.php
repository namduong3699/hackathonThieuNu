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

class PatientController extends Controller
{
    function index() {
    	return view('Patient/index');
    }

    function createMedicalReport(Request $req) {

  //       $patient = new Patient();
  //       $patient->name = $req->name;
  //       // $patient->email = $req->email; trong patient không có trường email
  //       //$patient->phone = $req->phone;
		// $patient->identity_number = $req->identity_number;
		
  //       $user = new User();
  //       $user->email = $patient->email;
  //       $user->password = Hash::make($req->password);
  //       $user->levels = 2;

  //       $patient->user_id = $user->id;


  //       if($patient->save() && $user->save()) {
  //           return view('Patient/index', ['success' => true]);
  //       } else {
  //           return view('Patient/index', ['success' => false]);
  //       }
    }
    function SearchDoctor() {
        return view('Patient/searchDoctor');
    }
    function patientDetail(){
      $patient = Patient::find(Auth::user()->id);
      $medicalReport  = MedicalExaminationForm::where('patient_id', Auth::user()->id)->get();
        return view('Patient/patientDetail', [
          'patient' => $patient, 
          'medicalReport' => $medicalReport
        ]);
    }
    function searchDoctorByName(Request $request) {
            $doctor = Doctor::where('name', 'like', '%' . $request->get('name') . '%')->get();
        return response()->json($doctor);
    }
    function getDoctorDetail(Request $req) {
        $doctor = Doctor::find($req->id);
        return view('Patient/doctorDetail', ['doctor' => $doctor]);
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
        return view('Patient/reportDetail', [
            'medicalReportId' => $req->medicalReportId,
            'medicalReportdetail' => $medicalReportdetail
        ]);
    }
}
