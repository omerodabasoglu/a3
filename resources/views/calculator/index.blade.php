@extends('layouts.master')

@section('content')

    <form method="POST" action="/results">
        {{ csrf_field() }}
        <fieldset class="form-group">
            <legend>How many days do you workout weekly in average?&#42;</legend>
            <label class="control-label" for="days"></label><br>
            <input required class="form-control" type="number" min="1" max="7" name="days" id="days"><br>
        </fieldset>
        <fieldset class="radios">
            <legend>How much time do you workout daily in average?&#42;</legend>
            <label><input required type="radio" name="time" value="15">15 min.</label><br>
            <label><input required type="radio" name="time" value="30">30 min.</label><br>
            <label><input required type="radio" name="time" value="45">45 min.</label><br>
            <label><input required type="radio" name="time" value="60">60 min.</label><br>
        </fieldset>
        <fieldset>
            <legend>How many of the workout days do you do cardio?&#42;</legend>
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
        </div>
    </form>

@endsection

@section('footer')
      <h3> &#42;: required fields</h3>
@endsection

@if(count($errors) > 0)
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
