@extends('template1')

@section('title', 'Login as User')

@section('content')
    <div class="d-flex flex-column align-items-center" id="loginForm">
        <form action="/LoginAsUser" method="post">
            <h1>Welcome to MovieList</h1>
            {{-- email --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" placeholder="Enter your email"/>
            </div>
            {{-- password --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" placeholder="Enter your password"/>
            </div>
            {{-- remember me --}}
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="rememberCheck" value="rememberMe">
                <label class="form-check-label" for="rememberCheck">Remember me</label>
            </div>

            <button class="btn btn-primary btn-block mb-4" type="submit" >Login</button>

            <div class="text-center">
                <p>
                    Don't have an account? <a href="/UserRegister">Register now!</a>
                </p>
                <p>
                    <a href="/AdminLogin">Login as Admin?</a>
                </p>
            </div>
        </form>
    </div>
    
@endsection