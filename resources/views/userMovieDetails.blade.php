@extends('/navTemplate/userTemplate')

@section('title1', 'Movie Details')

@section('content1')
<div id="movieDetailsContainer">
    {{-- <img id="bgImage" class="d-block w-100" src={{'/storage/assets/'.$collection->movieBackgroundImage}} alt="Movie background image">
    <div id="movieDetails">
        <div class="d-flex align-items-center">
            <img id="movieDetailsImage" class="rounded" src={{'/storage/assets/'.$collection->movieImage}} alt="Movie card image">
            <div class="ms-4">
                <h3 class="fw-bold">{{$collection->title}}</h3>
                <ul class="d-flex gap-3">
                    @foreach ($collection as $item)
                        <li>{{$item->genre}}</li>
                    @endforeach
                </ul>
                <h5>Release Date</h5>
                <p>{{$collection->year}}</p>
                <h5>Director</h5>
                <p class="fw-bold">{{$collection->director}}</p>
                <h4>Synopsis</h4>
                <p>{{$collection->description}}</p>
            </div>
        </div>
    </div> --}}

    {{-- placeholder --}}
    <img id="bgImage" class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie background image">
    <div id="movieDetails">
        <div class="d-flex align-items-center">
            <img id="movieDetailsImage" class="rounded" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            <div class="ms-4">
                <h3 class="fw-bold">Title</h3>
                <ul class="d-flex gap-3">
                    <li>Genre1</li>
                    <li>Genre2</li>
                </ul>
                <h5>Release Date</h5>
                <p>2xxx</p>
                <h5>Director</h5>
                <p class="fw-bold">The Director</p>
                <h4>Synopsis</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis repellendus sapiente vero. Consequuntur obcaecati nisi tempore hic harum ipsum, modi ullam eius voluptates cum aliquam accusantium, maxime impedit maiores reiciendis!</p>
            </div>
        </div>
    </div>
    {{-- placeholder --}}
</div>
<h3 class="fw-bold mt-3 mb-2 pb-2 ps-2">Cast</h3>
<hr>
<div class="container-fluid d-flex flex-wrap gap-1 mt-2" id="cardList">
    {{-- <div class="d-flex flex-wrap justify-content-center">
        @foreach ($collection as $item)
            <a class="card-item" href="/UserActorDetails/{id}">
                <div class="card m-2" style="width: 15rem;">
                    <img class="card-img-top" src={{'/storage/assets/'.$item->actorImage}} alt="Actor image">
                    <div class="card-body bg-dark">
                        <h5 class="card-title">{{$item->castName}}</h5>
                        <p class="card-text">{{$item->name}}</p>
                    </div>
                </div>    
            </a>
        @endforeach  
    </div> --}}

    {{-- placeholder --}}
    <a class="card-item" href="#">
        <div class="card m-2">
            <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
            <div class="card-body bg-dark">
                <h5 class="card-title">Sam witwicky</h5>                        
                <p class="card-text">Shia LaBeouf</p>
            </div>
        </div>    
    </a>
    <a class="card-item" href="#">
        <div class="card m-2">
            <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
            <div class="card-body bg-dark">
                <h5 class="card-title">Cast name</h5>                        
                <p class="card-text">Real name</p>
            </div>
        </div>    
    </a>
    {{-- placeholder --}}
</div>
<h3 class="fw-bold mt-3 mb-2 pb-2 ps-2">More</h3>
<hr>
<div class="justify-content-center container-sm d-flex flex-wrap gap-1 mt-2" id="cardList">
    {{-- @foreach ($collection as $item)
        <div class="card-item">
            <div class="card m-2" style="width: 15rem;">
                <a href="/UserMovieDetails/{id}">
                    <img class="card-img-top" src={{'/storage/assets/'.$item->movieCardImage}} alt="Movie card image">
                </a>
                <div class="card-body bg-dark">
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->year}}</p>
                    @if ($item->userId == NULL)
                        <form action="/UserWatchlist/{{$item->id}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary w-100">+</button>
                        </form>
                    @else
                        <form action="/UserWatchlist/{{$item->id}}" method="post">
                            @csrf
                            @method("delete")
                            <button type="submit" class="btn btn-danger w-100">&check;</button>
                        </form>
                    @endif
                    <p class="genre" hidden>{{$item->genre}}</p>
                </div>
            </div>    
        </div>
    @endforeach       --}}

    {{-- placeholder --}}
    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Ashiaap</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-danger w-100">&check;</a>
                <p class="genre" hidden>Action</p>
            </div>
        </div>    
    </div>
    
    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 2</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-danger w-100">&check;</a>
                <p class="genre" hidden>Comedy</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Optimus 3</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-danger w-100">&check;</a>
                <p class="genre" hidden>Crime</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 4</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>Drama</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Bumblebee 5</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>Fantasy</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 6</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>History</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 7</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>Action</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 8</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>Action</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 9</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>Action</p>
            </div>
        </div>    
    </div>

    <div  class="card-item">
        <div class="card m-2">
            <a href="#">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
            </a>
            <div class="card-body bg-dark">
                <h5 class="card-title">Transformer 10</h5>                        
                <p class="card-text">2xxx</p>
                <a href="#" class="btn btn-primary w-100">+</a>
                <p class="genre" hidden>Action</p>
            </div>
        </div>    
    </div>
    {{-- placeholder --}}
</div>
@endsection