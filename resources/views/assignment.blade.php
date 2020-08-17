@extends('layouts.app')

@section('title')
    Class
@endsection

@section('content')
    <div class="container">
    <form action="" method="">
        <div class="form-group">
            <label for="assigned by">Assigned by</label>
            <input type="text" class="form-control" name="assigned_by" id="assigned_by" required>
        </div>
        <div class="form-group">
            <label for="mark">Maximum mark</label>
            <input type="text" class="form-control" name="mark" id="mark" required>
        </div>
        <div class="form-group">
            <label for="last_day">Last date of submission</label>
            <input type="datetime-local" class="form-control" name="last_day" id="last_day" required>
        </div>
        <div class="form-group">
            <label for="assigned_class">assigned_class</label>
            <div>
                <select id="assigned_class" type="text" class="form-control @error('assigned_class') is-invalid @enderror" name="assigned_class" value="{{ old('assigned_class') }}" required autocomplete="assigned_class">
                    <option value="CE" selected>CE</option>
                    <option value="ME">ME</option>
                    <option value="CSE">CSE</option>
                    <option value="EC">EC</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="assigned_year" >assigned_year</label>

            <div>
                <select id="assigned_year" type="text" class="form-control" name="assigned_year" value="{{ old('assigned_year') }}" required autocomplete="assigned_year">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
        </div>
        <div class="form-group">
        <label for="question">Questions</label>
        <textarea class="form-control" id="question" name="question" cols="10" rows="10">Enter the assignment here</textarea>
        </div>
        <input type="submit" class="btn btn-primary" name="Submit">
    </form>
    </div>
@endsection
