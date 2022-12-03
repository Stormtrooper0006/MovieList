@extends('/navTemplate/template')

@section('title')
    @yield('title1')
@endsection

@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/AdminHome/{{$collection->id}}">MovieList</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="Navbar">
                <ul class="navbar-nav">
                    <li class="nav-item p-1">
                        <a class="nav-link" href="/AdminHome/{{$collection->id}}">Home</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="nav-link" href="/AdminActors">Actors</a>
                    </li>
                    <li class="nav-item dropdown p-1">
                        <button id="btnGroupDrop" type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img id="profileImg" src="{{'/storage/assets/icon/profile.png'}}" alt="profile">
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/GuestHome">Logout</a></li>
                        </ul>
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