@extends('/navTemplate/adminTemplate')

@section('title1', 'Home')

@section('content1')
    {{-- hero section --}}
    <div id="movieCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            {{-- @foreach ($collection as $item)
                @if ($item->first)
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img class="d-block w-100" src={{'/storage/assets/'.$item->movieBannerImage}} alt="Movie banner image">
                    </div>
                @else
                    <div class="carousel-item" data-bs-interval="5000">
                        <img class="d-block w-100" src={{'/storage/assets/'.$item->movieBannerImage}} alt="Movie banner image">
                    </div>
                @endif
            @endforeach --}}

            {{-- placeholder --}}
            <div class="carousel-item active" data-bs-interval="5000">
                <img class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img class="d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
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
    <h3 class="font-weight-bold mt-3 mb-2 pb-2 ps-2">Popular</h3>
    <hr>
    <div class="justify-content-center align-items-center container-sm d-flex flex-column flex-wrap gap-4">
        {{-- <div class="d-flex flex-wrap justify-content-center">
            @foreach ($collection as $item)
                <a href="#">
                    <div class="card m-2" style="width: 15rem;">
                        <img class="card-img-top" src={{'/storage/assets/'.$item->movieCardImage}} alt="Movie card image">
                        <div class="card-body">
                            <h5 class="card-title">{{'/storage/assets/'.$item->title}}</h5>
                            <p class="card-text">{{'/storage/assets/'.$item->year}}</p>
                        </div>
                    </div>    
                </a>
            @endforeach  
        </div> --}}

        {{-- placeholder --}}
        <div class="d-flex flex-wrap justify-content-center mt-2">
            <a href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            {{-- placeholder --}}
        </div>
    </div>

    {{-- movie section --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h3 class="font-weight-bold" id="temp">Show</h3>
            </div>
            <a class="btn btn-primary col-md-1" href="#">add movie</a>
            <div class="col-md-2">
                    <input class="form-control me-2" id="movieSearch" type="text" onkeyup="searchSort()" placeholder="Search movie..." aria-label="Search movie">                </form>
            </div>
        </div>
    </div>
    <hr>
    <ul class="d-flex mt-3 mb-2 pb-2 ps-2">
        <li><a class="sort btn m-2" href="#">Comedy</a></li>
        <li><a class="sort btn m-2" href="#">Crime</a></li>
        <li><a class="sort btn m-2" href="#">Drama</a></li>
        <li><a class="sort btn m-2" href="#">Action</a></li>
        <li><a class="sort btn m-2" href="#">Fantasy</a></li>
        <li><a class="sort btn m-2" href="#">History</a></li>
    </ul>
    <div class="d-flex mt-3 mb-2 pb-2 ps-2">
        <p class="pt-3">Sort By: </p>
        <button class="sort btn m-2" onclick="sortAsc()">A-Z</button>
        <button class="sort btn m-2" onclick="sortDsc()">Z-A</button>
    </div>
    <div class="justify-content-center align-items-center container-sm d-flex flex-column flex-wrap gap-4">
        {{-- <div class="d-flex flex-wrap justify-content-center mt-2" id="movieCardList">
            @foreach ($collection as $item)
                <a class="card-item" href="#">
                    <div class="card m-2" style="width: 15rem;">
                        <img class="card-img-top" src={{'/storage/assets/'.$item->movieCardImage}} alt="Movie card image">
                        <div class="card-body">
                            <h5 class="card-title">{{'/storage/assets/'.$item->title}}</h5>
                            <p class="card-text">{{'/storage/assets/'.$item->year}}</p>
                        </div>
                    </div>    
                </a>
            @endforeach  
        </div> --}}

        {{-- placeholder --}}
        <div class="d-flex flex-wrap justify-content-center mt-2" id="movieCardList">
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Ashiaap 1</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 2</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Optimus 3</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 4</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Bumblebee 5</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 6</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 7</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 8</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 9</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            <a class="card-item" href="#">
                <div class="card m-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Transformer 10</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
            {{-- placeholder --}}
        </div>
    </div>
@endsection