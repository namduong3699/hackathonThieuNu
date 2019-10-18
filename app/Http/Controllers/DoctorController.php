<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalExaminationForm;

class DoctorController extends Controller
{
	function index() {
		return view('Doctor/index');
	}
    function createMedicalReport(Request $req) {
    	$medicalReport = new MedicalExaminationForm();
    	$medicalReport->patient_id = $req->patient_id;
    	$medicalReport->save();
    }

    function searchPatient() {

    }
}
