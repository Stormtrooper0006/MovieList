@extends('loginTemplate')

@section('title2', 'User Login')

@section('content2')
    <div class="text-center">
        <p>
            Don't have an account? <a href="/UserRegister">Register now!</a>
        </p>
        <p>
            <a href="/AdminLogin">Login as Admin?</a>
        </p>
    </div>
@endsection