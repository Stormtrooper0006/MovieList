@extends('/navTemplate/template')

@section('title')
    @yield('title1')
@endsection

@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/GuestHome">MovieList</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="/GuestHome">Home</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="/GuestUserActors">Actors</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link btn btn-primary" href="/UserRegister">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-primary" href="/UserLogin">Login</a>
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