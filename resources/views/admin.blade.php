@extends('layouts.app')

@section('title')
    Admin
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div>
                        <a href="{{ route('register')}}"><button type="submit" class="btn btn-outline-dark btn-block">Register new Student</button></a>
                    </div>
                    <br>
                    <div>
                        <a href="{{ route('teacher.register') }}"><button type="submit" class="btn btn-outline-dark btn-block">Register new Teacher</button></a>
                    </div>
                    <br>
                    <div>
                        <a href="{{route('admin.register') }}"><button type="submit" class="btn btn-outline-dark btn-block">Register new Admin</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
