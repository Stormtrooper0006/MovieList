@extends('template1')

@section('title', 'Register')

@section('content')
    <div class="d-flex flex-column align-items-center" id="registerForm">
        <form action="/RegisterUser" method="post">
            <h1>Welcome to MovieList</h1>
            {{-- username --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="username">username</label>
                <input class="form-control" type="text" id="username" placeholder="Enter your username"/>
            </div>
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
            {{-- confirm password --}}
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Confirm Password</label>
                <input class="form-control" type="password" id="password" placeholder="Enter your password again"/>
            </div>

            <button class="btn btn-primary btn-block mb-4" type="submit" >Register</button>

            <p class="text-center">
                Already have an account? <a href="/UserLogin">Login now?</a>
            </p>
        </form>
    </div>
    
@endsection