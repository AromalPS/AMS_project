@extends('layouts.app')

@section('title')
Class
@endsection

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
                        <td>
                            <form action="{{ route('user.delete.student' , $show->id) }}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Remove_student">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
