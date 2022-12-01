@extends('/navTemplate/userTemplate')

@section('title1', 'Watchlist')

@section('content1')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 mt-2">
            <h1 class="font-weight-bold" id="temp">My Watchlist</h1>
        </div>
        <div class="col-md-3 mt-3">
                <input class="form-control me-2" id="search" type="text" onkeyup="searchSort()" placeholder="Search movie..." aria-label="Search movie">
        </div>
    </div>
</div>

<ul class="d-flex mt-3 mb-2 pb-2 ps-1">
    <li><button class="sort btn m-2" onclick="showAll()">All</button></li>
    <li><button class="sort btn m-2" onclick="sortPlanned()">Planned</button></li>
    <li><button class="sort btn m-2" onclick="sortWatching()">Watching</button></li>
    <li><button class="sort btn m-2" onclick="sortFinished()">Finished</button></li>
</ul>

<div class="justify-content-center align-items-center container-sm d-flex flex-wrap gap-5 mt-2 mb-2" id="cardList">
    {{-- @foreach ($collection as $item)
        <div class="card-item">
            <div class="card m-2">
                <div class="d-flex">
                    <a href="#">
                        <img class="card-img-top" style="width: 8rem" src={{'/storage/assets/'.$item->movieCardImage}} alt="Movie card image">
                    </a>
                    <div class="card-body bg-dark">
                        <h3 class="card-title ms-2 pt-3">{{$item->title}}</h5>                        
                        <p class="card-text status ms-2">{{$item->status}}</p>
                        <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#modalMenu">Menu</button>     
                        <form action="#" method="post">       
                            @csrf    
                            @method('patch')           
                            <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalMenuLabel">Change Status</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select class="form-select" aria-label="select status">
                                                <option selected>Select Status</option>
                                                <option value="1">Planned</option>
                                                <option value="2">Watching</option>
                                                <option value="3">Finished</option>
                                                <option value="4">Remove</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="sumit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    @endforeach

    <div style="margin: 2rem">
        {{$post_data->links()}}
    </div> --}}

    {{-- placeholder --}}
    @for ($i = 0; $i < 3; $i++)
        <div class="card-item">
            <div class="card m-2">
                <div class="d-flex">
                    <a href="#">
                        <img class="card-img-top" style="width: 8rem" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    </a>
                    <div class="card-body bg-dark">
                        <h5 class="card-title ms-2 pt-3" style="font-size: 25px;">Ashiaap</h5>                       
                        <p class="card-text status ms-2">Planned</p>
                        <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#modalMenu">Menu</button>     
                        <form action="#" method="post">       
                            @csrf         
                            @method('patch')      
                            <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalMenuLabel">Change Status</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select class="form-select" aria-label="select status">
                                                <option selected>Select Status</option>
                                                <option value="1">Planned</option>
                                                <option value="2">Watching</option>
                                                <option value="3">Finished</option>
                                                <option value="4">Remove</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="sumit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    @endfor
    @for ($i = 0; $i < 3; $i++)
        <div class="card-item">
            <div class="card m-2">
                <div class="d-flex">
                    <a href="#">
                        <img class="card-img-top" style="width: 8rem" src="https://wallpapercave.com/wp/wp8952373.jpg" alt="Movie card image">
                    </a>
                    <div class="card-body bg-dark">
                        <h5 class="card-title ms-2 pt-3" style="font-size: 25px;">Anjay</h5>                       
                        <p class="card-text status ms-2">Finished</p>
                        <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#modalMenu">Menu</button>     
                        <form action="#" method="post">       
                            @csrf     
                            @method('patch')          
                            <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content bg-dark">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalMenuLabel">Change Status</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <select class="form-select" aria-label="select status">
                                                <option selected>Select Status</option>
                                                <option value="1">Planned</option>
                                                <option value="2">Watching</option>
                                                <option value="3">Finished</option>
                                                <option value="4">Remove</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="sumit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    @endfor
    {{-- placeholder --}}
</div>
@endsection