@extends('layouts.app')

@section('title')
    Teacher
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Teacher Dashboard') }}</div>

                <div class="card-body">

{{--                    Students classes--}}
                    <div class="row">
                        <b><h2>Classes</h2></b>
                    </div>
                    <div class="row">
                        <form method="get" action="{{ route('teacher.student.class') }}">
                            @csrf
                            <div class="form-group form-inline">
                                Class &nbsp;&nbsp;<select id="class" type="text" class="form-control @error('class') is-invalid @enderror" name="class" value="{{ old('class') }}" required autocomplete="class">
                                    <option value="CE" selected>CE</option>
                                    <option value="ME">ME</option>
                                    <option value="CSE">CSE</option>
                                    <option value="EC">EC</option>
                                </select>&nbsp;&nbsp;&nbsp;&nbsp;
                                Year &nbsp;&nbsp;<select id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Search class</button>
                        </form>
{{--                        <table class="table">--}}
{{--                            <tr>--}}
{{--                                <th>Name</th>--}}
{{--                                <th>Email</th>--}}
{{--                                <th>Class</th>--}}
{{--                                <th>Year</th>--}}
{{--                            </tr>--}}
{{--                            @foreach($shows as $show)--}}
{{--                            <tr>--}}
{{--                                <td>{{ $show->name }}</td>--}}
{{--                                <td>{{ $show->email }}</td>--}}
{{--                                <td>{{ $show->class }}</td>--}}
{{--                                <td>{{ $show->year }}</td>--}}
{{--                            </tr>--}}
{{--                            @endforeach--}}
{{--                        </table>--}}
                    </div><br><br>
                    <div class="row">
                        <h2>All Students</h2>
                        <table class="table">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Year</th>
                            </tr>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->class }}</td>
                                <td>{{ $user->year }}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
