@extends('/navTemplate/guestTemplate')

@section('title1')
    @yield('title2')
@endsection

@section('content1')
    <div class="d-flex flex-column align-items-center mt-2">
        <form action="#" method="post">
            @csrf
            <h1>Welcome to MovieList</h1>
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
            {{-- remember me --}}
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="rememberCheck" value="rememberMe">
                <label class="form-check-label" for="rememberCheck">Remember me</label>
            </div>

            <div class="text-center">
                <button class="btn btn-primary btn-block mb-4" type="submit" >Login</button>
            </div>
            

            @yield('content2')
        </form>
    </div>
@endsection