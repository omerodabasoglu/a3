<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    /**
    *
    * Display the form
    */
    public function index(Request $request) {

        return view('calculator.index');
        
    }



}
