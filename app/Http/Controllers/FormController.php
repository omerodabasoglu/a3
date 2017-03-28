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

          $days = $request->input('days');
          $time = $request->input('time');
          $cardio = $request->input('cardio');
          dump($days);
          dump($time);
          dump($cardio);

          $calorie = $time * $days + $cardio * 50;
          $weight = $calorie / 20;

          return view('calculator.results');

  }
}
