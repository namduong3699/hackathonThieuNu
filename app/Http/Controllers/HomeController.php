<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;
use App\Medicine;
use App\Doctor;

class HomeController extends Controller
{
	function index() {
		if(Auth::check()) {
			if(Auth::user()->levels == 1) {
				return redirect('/doctor');
			} else if(Auth::user()->levels == 2) {
				return redirect('/patient');
			}
		} else {
			return view('login');
		}
	}

	function getMedicine(Request $req) {
		$medicine = Medicine::find($req->id);
		return view('medicine', ['medicine' => $medicine]);
	}

	function getDoctor(Request $req) {
		$doctor = Doctor::find($req->id);
		return view('Doctor/doctorDetail', ['doctor' => $doctor]);
	}
}
