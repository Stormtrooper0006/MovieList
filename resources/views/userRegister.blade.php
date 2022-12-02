@extends('/navTemplate/guestTemplate')

@section('title1', 'Register')

@section('content1')
<div class="d-flex flex-column align-items-center mt-2">
        <form action="#" method="post">
            @csrf
            <h1>Welcome to MovieList</h1>
            {{-- username --}}
            <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input class="form-control" type="text" id="username" placeholder="Enter your username"/>
            </div>
            {{-- email --}}
            <div class="mb-3">
                <label class="form-label" for="email">Email address</label>
                <input class="form-control" type="email" id="email" placeholder="Enter your email"/>
            </div>
            {{-- password --}}
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" type="password" id="password" placeholder="Enter your password"/>
            </div>
            {{-- confirm password --}}
            <div class="mb-3">
                <label class="form-label" for="password">Confirm Password</label>
                <input class="form-control" type="password" id="password" placeholder="Enter your password again"/>
            </div>

            <div class="text-center">
                <button class="btn btn-primary btn-block text-center mb-4" type="submit" >Register</button>
            </div>
            
            <p class="text-center">
                Already have an account? <a href="/UserLogin">Login now?</a>
            </p>
        </form>
    </div>    
@endsection