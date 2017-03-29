@extends('layouts.master')

@section('header')
    RESULTS
@endsection

@section('content')

    <h2>CALORIES BURNED WEEKLY<br><span id="calorie">{{ $calorie }}</span></h2>
    <h2>ESTIMATED MONTHLY WEIGHT LOSS<br><span id="weight">{{ $weight }} lbs</span></h2>
    <div class="form-group">

        <h3 class="btn btn-default" id="reset"><a href='/'>Reset</a></h3>
    </div>
@endsection
