@extends('/navTemplate/userTemplate')

@section('title1', 'Profile')

@section('content1')
<div class="justify-content-center align-items-center container-sm d-flex flex-wrap gap-4 mt-4 mb-4">
    <div class="text-center">
        <h2>My Profile</h2>
        {{-- <button type="button" class="btn ms-2" data-bs-toggle="modal" data-bs-target="#modalMenu">
            <img class="rounded-circle" alt="profile picture" src={{$collection->profileImg}}/>
        </button>           
        <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalMenuLabel">Update Image</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="post">       
                        @csrf         
                        @method('patch')
                        <div class="modal-body">
                            <label for="profileUrl"></label>
                            <input class="form-control" type="url" id="profileUrl" placeholder="Image URL"/>
                            <p class="text-start">Please upload your image to other sources first and copy the URL</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="sumit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>     
        </div>
        <p class="fw-bold">{{$collection->name}}</p>
        <p>{{$collection->email}}</p>  --}}

        {{-- placeholder --}}
        <button type="button" class="btn ms-2" data-bs-toggle="modal" data-bs-target="#modalMenu">
            <img class="rounded-circle" alt="profile picture" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp" />
        </button>           
        <div class="modal fade" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content bg-dark">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalMenuLabel">Update Image</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="#" method="post">       
                        @csrf         
                        @method('patch')
                        <div class="modal-body">
                            <label for="profileUrl"></label>
                            <input class="form-control" type="url" id="profileUrl" placeholder="Image URL"/>
                            <p class="text-start">Please upload your image to other sources first and copy the URL</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="sumit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>     
        </div>
        <p class="fw-bold">Name</p>
        <p>email@email.com</p>   
        {{-- placeholder --}}             
    </div>

    {{-- <form action="#" method="post" class="w-25">
        @csrf
        <h3  class="text-center">Update Profile</h3>
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" id="username" placeholder={{$collection->username}}/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" placeholder={{$collection->email}}/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="dob">DOB</label>
            <input class="form-control" type="date" id="dob"/>
        </div>
        <div class="mb-3">
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control" type="tel" id="phone" placeholder={{$collection->phone}}/>
        </div>

        <div>
            <button class="btn btn-primary btn-block text-center mb-4 w-100" type="submit" >Save Changes</button>
        </div>
    </form>    --}}

    {{-- placeholder --}}
    <form action="#" method="post" class="w-25">
        @csrf
        <h3 class="text-center">Update Profile</h3>
        {{-- username --}}
        <div class="mb-3">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" id="username" placeholder="Name"/>
        </div>
        {{-- email --}}
        <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" placeholder="email@email.com"/>
        </div>
        {{-- DOB --}}
        <div class="mb-3">
            <label class="form-label" for="dob">DOB</label>
            <input class="form-control" type="date" id="dob"/>
        </div>
        {{-- phone --}}
        <div class="mb-3">
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control" type="tel" id="phone" placeholder="08123456"/>
        </div>

        <div>
            <button class="btn btn-primary btn-block text-center mb-4 w-100" type="submit" >Save Changes</button>
        </div>
    </form>   
    {{-- placeholder --}}
</div>
@endsection