@extends('layouts.app')

@section('content')
    <div class="container">
        <h3><b>Class: {{ $class }} | Year: {{ $year }}</b></h3>
        <div class="row">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($shows as $show)
                    <tr>
                        <td>{{ $show->name }}</td>
                        <td>{{ $show->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
