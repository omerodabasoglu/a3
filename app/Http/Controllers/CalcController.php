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
        if ($request->ismethod(post)) {

            $this->validate($request, [
                'days' => 'required|numeric|min:1|max:7',
                'time' => 'required',
                'cardio' => 'required',
            ]);
        }
    }



}
