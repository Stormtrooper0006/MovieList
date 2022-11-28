@extends('/navTemplate/template')

@section('title')
    @yield('title1')
@endsection

@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MovieList</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#">Actors</a>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="btn-group" id="profileButton" role="group">
                                <button id="btnGroupDrop" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img id="profileImg" src="{{'/storage/assets/icon/profile.png'}}" alt="profile">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="btnGroupDrop">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </div>
                          </div>
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