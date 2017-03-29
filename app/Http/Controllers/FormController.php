<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
      /**
      *
      * Process the form and show the calculations
      */
      public function calculate(Request $request) {
          $this->validate($request, [
              'days' => 'required|numeric|min:1|max:7',
              'time' => 'required',
              'cardio' => 'required',
          ]);

          $days = $request->input('days');
          $time = $request->input('time');
          $cardio = $request->input('cardio');

          $calorie = $time * $days + $cardio * 50;
          $weight = $calorie / 20;

          return view('calculator.results')->with([
                'calorie' => $calorie,
                'weight' => $weight
      ]);

  }
}
