@extends('/navTemplate/adminTemplate')

@section('title1', 'Actors')

@section('content1')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
            <h3 class="font-weight-bold" id="temp">Show</h3>
        </div>
        <a class="btn btn-primary col-md-1 mt-3" href="#">Add Actor</a>
        <div class="col-md-2 mt-3">
                <input class="form-control me-2" id="search" type="text" onkeyup="searchSort()" placeholder="Search actor..." aria-label="Search actor">
        </div>
    </div>
</div>

<div class="justify-content-center align-items-center container-sm d-flex flex-column flex-wrap gap-4">
    {{-- <div class="d-flex flex-wrap justify-content-center mt-2" id="cardList">
        @foreach ($collection as $item)
            <a class="card-item" href="#">
                <div class="card m-2" style="width: 15rem;">
                    <img class="card-img-top" src={{'/storage/assets/'.$item->actorImage}} alt="Actor image">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">{{$item->title}}</p>
                    </div>
                </div>    
            </a>
        @endforeach  
    </div> --}}

    {{-- placeholder --}}
    <div class="d-flex flex-wrap justify-content-center mt-2" id="cardList">
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Shia LaBeouf</h5>                        
                    <p class="card-text">Transformer 1</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 2</h5>                        
                    <p class="card-text">Transformer 2</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 3</h5>                        
                    <p class="card-text">Transformer 3</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 4</h5>                        
                    <p class="card-text">Transformer 4</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 5</h5>                        
                    <p class="card-text">Transformer 5</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 6</h5>                        
                    <p class="card-text">Transformer 6</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 7</h5>                        
                    <p class="card-text">Transformer 7</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 8</h5>                        
                    <p class="card-text">Transformer 8</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 9</h5>                        
                    <p class="card-text">Transformer 9</p>
                </div>
            </div>    
        </a>
        <a class="card-item" href="#">
            <div class="card m-2">
                <img class="card-img-top" src="https://static.tvtropes.org/pmwiki/pub/images/shia_labeouf300_5998.jpg" alt="Actor image">
                <div class="card-body">
                    <h5 class="card-title">Actor 10</h5>                        
                    <p class="card-text">Transformer 10</p>
                </div>
            </div>    
        </a>
        {{-- placeholder --}}
    </div>
</div>
@endsection