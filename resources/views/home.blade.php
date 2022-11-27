@extends('/template/template1')

@section('title', 'Home')

@section('content')
    {{-- movie image carousel --}}
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
                <img class="carousel-image d-block w-100" src="https://initiate.alphacoders.com/images/112/stretched-1920-1080-1125974.jpg?3063" alt="Movie image">
            </div>
            <div class="carousel-item">
                <img class="carousel-image d-block w-100" src="https://initiate.alphacoders.com/images/845/stretched-1920-1080-845639.jpg?4924" alt="Movie image">
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
    {{-- popular movie section  --}}
    <h3 class="font-weight-bold mt-3 mb-2 pb-2 pl-2">Popular</h3>
    <hr>

    <div id="movieCardCarousel" class="carousel slide mb-4" data-ride="carousel">
        <div class="carousel-inner row pl-3 pr-3">
            <div class="carousel-item active col-md-2">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </div>
            <div class="carousel-item active col-md-2">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </div>
            <div class="carousel-item active col-md-2">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </div>

            <div class="carousel-item active col-md-2">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </div>
            <div class="carousel-item active col-md-2">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </div>
            <div class="carousel-item active col-md-2">
                <div class="card mb-2">
                    <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </div>
        </div>
        <a class="carousel-control-prev" href="#movieCardCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#movieCardCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection