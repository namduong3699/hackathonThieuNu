<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    function patientDetail(Request $req){
        $patient = Patient::where('id', $req->id)->first();
        $medicalReport = MedicalExaminationForm::where('patient_id', $req->id)->get();
        return view('patientDetail', ['patient' => $patient, 'medicalReport' => $medicalReport]);
    }
    function searchDoctor() {
        return view('patient/searchDoctor');
    }
    function searchDoctorByName(Request $request) {
        $doctor = Doctor::where('name', 'like', '%' . $request->get('name').'%')->get();
        return response()->json($doctor);
    }
    function doctorDetail(Request $req) {
        $doctor = Doctor::where('id', $req->id)->first();
        return view('DoctorDetail', ['doctor' => $doctor]);
    }
}
