@extends('layouts.master')

@header('header')
    results
@endheader

@section('content')
    <h2>CALORIES BURNED WEEKLY<br><span id="calorie">{{ $calorie }}</span></h2>
    <h2>ESTIMATED MONTHLY WEIGHT LOSS<br><span id="weight">{{ $weight }} lbs</span></h2>

    <form method="POST" action="/">


        <fieldset class="form-group">
            <legend>How many days do you workout weekly in average?</legend>
            <label class="control-label" for="days"></label><br>
            <input required class="form-control" type="number" min="1" max="7" name="days" id="days"><br>
        </fieldset>
        <fieldset class="radios">
            <legend>How much time do you workout daily in average?</legend>
            <label><input required type="radio" name="time" value="15">15 min.</label><br>
            <label><input required type="radio" name="time" value="30">30 min.</label><br>
            <label><input required type="radio" name="time" value="45">45 min.</label><br>
            <label><input required type="radio" name="time" value="60">60 min.</label><br>
        </fieldset>
        <fieldset>
            <legend>How many of the workout days do you do cardio?</legend>
                <select required name="cardio" id="cardio">
                    <option value="">select</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>

        </fieldset>
        <div class="form-group">
            <input type='submit' class="btn btn-primary" id="submit">
            <h3 class="btn btn-default" id="reset"><a href='index.php'>Reset</a></h3>
        </div>
    </form>
@endsection
