@extends('/navTemplate/guestTemplate')

@section('title1', 'Actor Details')

@section('content1')
<div class="d-flex m-4">
    {{-- <div>
        <img id="actorImage" class="rounded" src={{'/storage/assets/'.$item->actorImage}} alt="Actor image">
        <h4 class="mb-3">Personal Info</h4>
        <h5>Popularity</h5>
        <p>{{$collection->popularity}}</p>
        <h5>Gender</h5>
        <p>{{$collection->gender}}</p>
        <h5>Birthday</h5>
        <p>{{$collection->dob}}</p>
        <h5>Place of Birth</h5>
        <p>{{$collection->birthplace}}</p>
    </div>
    <div class="ms-4">
        <h3 class="fw-bold">Shia LaBeouf</h3>
        <h5>Biography</h5>
        <p>{{$collection->biography}}</p>
        <h3 class="fw-bold mt-3 mb-2 pb-2 ps-2">Known For</h3>
        <hr>
        @foreach ($collection as $item)
            <a href="#">
                <div class="card m-2">
                    <img class="card-img-top" src={{'/storage/assets/'.$item->movieImage}} alt="Movie card image">
                    <div class="card-body bg-dark">
                        <h5 class="card-title">Title</h5>                        
                        <p class="card-text">2xxx</p>
                    </div>
                </div>    
            </a>
        @endforeach
    </div> --}}

    {{-- placeholder --}}
    <div>
        <img id="actorImage" class="rounded" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Movie card image">
        <h4 class="mb-3">Personal Info</h4>
        <h5>Popularity</h5>
        <p>50.55</p>
        <h5>Gender</h5>
        <p>Male</p>
        <h5>Birthday</h5>
        <p>yyyy-mm-dd</p>
        <h5>Place of Birth</h5>
        <p>City, Nation</p>
    </div>
    <div class="ms-4">
        <h3 class="fw-bold">Shia LaBeouf</h3>
        <h5>Biography</h5>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, iusto ipsam consequatur non eius dolorum incidunt suscipit quisquam unde possimus consectetur eaque eligendi consequuntur voluptatem sequi autem. Velit, similique commodi.</p>
        <h3 class="fw-bold mt-3 mb-2 pb-2 ps-2">Known For</h3>
        <hr>
        <a href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                <div class="card-body bg-dark">
                    <h5 class="card-title">Title</h5>                        
                    <p class="card-text">2xxx</p>
                </div>
            </div>    
        </a>
    </div>
    {{-- placeholder --}}
</div>   
@endsection