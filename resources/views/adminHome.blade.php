@extends('/navTemplate/adminTemplate')

@section('title1', 'Home')

@section('content1')
    {{-- hero section --}}
    <div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- @foreach ($collection as $item)
                @if ($item->first)
                    <div class="carousel-item active" data-bs-interval="5000">
                        <a href="/AdminMovieDetails/{{$item->id}}">
                            <img class="d-block w-100" src={{'/storage/assets/'.$item->movieBackgroundImage}} alt="Movie banner image">
                        </a>
                    </div>
                @else
                    <div class="carousel-item" data-bs-interval="5000">
                        <a href="/AdminMovieDetails/{{$item->id}}">
                            <img class="d-block w-100" src={{'/storage/assets/'.$item->movieBackgroundImage}} alt="Movie banner image">
                        </a>
                    </div>
                @endif
            @endforeach --}}

            {{-- placeholder --}}
            <div class="carousel-item active" data-bs-interval="5000">
                <a href="#">
                    <img class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <a href="#">
                    <img class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
                </a>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <a href="#">
                    <img class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
                </a>
            </div>
            {{-- placeholder --}}

        <button class="carousel-control-prev" type="button" data-bs-target="#movieCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#movieCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>

    {{-- popular section  --}}
    <h3 class="fw-bold mt-3 mb-2 pb-2 ps-2">Popular</h3>
    <hr>
    <div class="justify-content-center container-sm d-flex flex-wrap gap-1 mt-2">
        {{-- @foreach ($collection as $item)
            <a href="/AdminMovieDetails/{{$item->id}}">
                <div class="card m-2" style="width: 15rem;">
                    <img class="card-img-top" src={{'/storage/assets/'.$item->movieImage}} alt="Movie card image">
                    <div class="card-body bg-dark">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->year}}</p>
                    </div>
                </div>    
            </a>
        @endforeach               --}}

        {{-- placeholder --}}
        @for ($i = 0; $i < 5; $i++)
        <a href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Title</h5>                        
                    <p class="card-text">2xxx</p>
                </div>
            </div>    
        </a>
    @endfor
        {{-- placeholder --}}
    </div>

    {{-- movie section --}}
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-9">
                <h3 class="fw-bold" id="temp">Show</h3>
            </div>
            <a class="btn btn-primary col-md-1" href="/CreateMovie">Add Movie</a>
            <div class="col-md-2">
                    <input class="form-control me-2" id="search" type="text" onkeyup="searchSort()" placeholder="Search movie..." aria-label="Search movie">
            </div>
        </div>
    </div>
    <hr>
    <ul class="d-flex mt-3 mb-2 pb-2 ps-1">
        <li><button class="sort btn m-2" onclick="showAll()">All</button></li>
        <li><button class="sort btn m-2" onclick="sortAction()">Action</button></li>
        <li><button class="sort btn m-2" onclick="sortComedy()">Comedy</button></li>
        <li><button class="sort btn m-2" onclick="sortCrime()">Crime</button></li>
        <li><button class="sort btn m-2" onclick="sortDrama()">Drama</button></li>
        <li><button class="sort btn m-2" onclick="sortFantasy()">Fantasy</button></li>
        <li><button class="sort btn m-2" onclick="sortHistory()">History</button></li>
    </ul>
    <div class="d-flex mt-3 mb-2 pb-2 ps-3">
        <p class="pt-3">Sort By: </p>
        <button class="sort btn m-2" onclick="sortAsc()">A-Z</button>
        <button class="sort btn m-2" onclick="sortDsc()">Z-A</button>
    </div>
    <div class="justify-content-center container-sm d-flex flex-wrap gap-1 mt-2" id="cardList">
        {{-- @foreach ($collection as $item)
            <a class="card-item" href="/AdminMovieDetails/{{$item->id}}">
                <div class="card m-2" style="width: 15rem;">
                    <img class="card-img-top" src={{'/storage/assets/'.$item->movieImage}} alt="Movie card image">
                    <div class="card-body bg-dark">
                        <h5 class="card-title">{{$item->title}}</h5>
                        <p class="card-text">{{$item->year}}</p>
                        <p class="genre" hidden>{{$item->genre}}</p>
                    </div>
                </div>    
            </a>
        @endforeach      --}}

        {{-- placeholder --}}
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Ashiaap</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Action</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 2</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Comedy</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Optimus 3</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Crime</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 4</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Drama</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Bumblebee 5</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Fantasy</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 6</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>History</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 7</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Action</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 8</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Action</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 9</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Action</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Transformer 10</h5>                        
                    <p class="card-text">2xxx</p>
                    <p class="genre" hidden>Action</p>
                </div>
            </div>    
        </a>    
        {{-- placeholder --}}
    </div>
@endsection