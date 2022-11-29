@extends('/navTemplate/template')

@section('title')
    @yield('title1')
@endsection

@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/GuestHome">MovieList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="Navbar">
                <ul class="navbar-nav">
                    <li class="nav-item p-1">
                        <a class="nav-link" href="/GuestHome">Home</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="/GuestUserActors">Actors</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link btn btn-primary" href="/UserRegister">Register</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link btn btn-primary" href="/UserLogin">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    @yield('content1')
</main>
@endsection