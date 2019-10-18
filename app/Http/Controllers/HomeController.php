<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\MessageBag;

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
}
