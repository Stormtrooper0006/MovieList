@extends('/navTemplate/guestTemplate')

@section('title1', 'Home')

@section('content1')
    {{-- hero section --}}
    <div id="movieCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            {{-- @foreach ($collection as $item)
                @if ($item->first)
                    <div class="carousel-item active">
                        <img class="carousel-image d-block w-100" src={{'/storage/assets/'.$item->movieBannerImage}} alt="Movie banner image">
                    </div>
                @else
                    <div class="carousel-item">
                        <img class="carousel-image d-block w-100" src={{'/storage/assets/'.$item->movieBannerImage}} alt="Movie banner image">
                    </div>
                @endif
            @endforeach --}}
            {{-- placeholder --}}
            <div class="carousel-item active">
                <img class="carousel-image d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
            </div>
            <div class="carousel-item">
                <img class="carousel-image d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
            </div>
            <div class="carousel-item">
                <img class="carousel-image d-block w-100" src="https://images5.alphacoders.com/617/617961.jpg" alt="Movie image">
            </div>

            {{-- placeholder --}}
        </div>
        <a class="carousel-control-prev" href="#movieCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#movieCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- popular section  --}}
    <h3 class="font-weight-bold mt-3 mb-2 pb-2 pl-2">Popular</h3>
    <hr>
    <div class="justify-content-center align-items-center container-sm d-flex flex-column flex-wrap gap-4">
        {{-- <div class="d-flex flex-wrap justify-content-center">
            @foreach ($collection as $item)
                <div class="card m-2" style="width: 15rem;">
                    <a href="/#">
                        <img class="card-img-top" src={{'/storage/assets/'.$item->movieCardImage}} alt="Movie card image">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{'/storage/assets/'.$item->title}}</h5>
                        <p class="card-text">{{'/storage/assets/'.$item->year}}</p>
                    </div>
                </div>    
            @endforeach  
        </div> --}}

        {{-- placeholder --}}
        <div class="d-flex flex-wrap justify-content-center mt-2">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>                        
                    <p class="card-text">2xxx</p>
                    </div>
                </div>    
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">2xxx</p>
                </div>
            </div>    
            {{-- placeholder --}}
    </div>

    {{-- movie section --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h3 class="font-weight-bold" id="temp">Show</h3>
            </div>
            <div class="col-md-3">
                <form action="#" class="d-flex">
                    @csrf
                    <input class="form-control me-2" type="search" name="title" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success ml-2" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <hr>

@endsection