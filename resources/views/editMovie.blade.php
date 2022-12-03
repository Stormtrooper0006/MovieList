@extends('/navTemplate/adminTemplate')

@section('title1', 'Edit Movie')

@section('content1')
<div class="m-4">
    <form action="/UpdateMovie/{{$collection->id}}" method="post">
        @csrf
        @method("patch")
        <h1>Add Movie</h1>
        <div class="mb-4">
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" id="title" placeholder={{$collection->title}}/>
        </div>

        <div class="mb-4">
            <label class="form-label">Description</label>
            <textarea class="form-control" aria-label="description" placeholder={{$collection->description}}></textarea>
        </div>

        <div class="mb-4">
            <label class="form-label">Genre</label>
            <select class="form-select" id="genre" aria-label="select genre">
                <option selected>{{$collection->genre}}</option>
                <option value="Action">Action</option>
                <option value="Comedy">Comedy</option>
                <option value="Crime">Crime</option>
                <option value="Drama">Drama</option>
                <option value="Fantasy">Fantasy</option>
                <option value="History">History</option>
            </select>  
        </div>

        <div class="mb-2">
            <h5>Actors</h5>
            <div class="d-flex gap-3 mb-3">
                @foreach ($collection2 as $item)
                    <div class="w-50">
                        <label class="form-label">Actor</label>
                        <select class="form-select" id="genre" aria-label="select Actor">
                            <option selected>{{$item->name}}</option>
                            @foreach ($collection3 as $item2)
                                <option value={{$item2->name}}>{{$item2->name}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="w-50">
                        <label class="form-label" for="charName">Character Name</label>
                        <input class="form-control" type="text" id="charName" placeholder={{$item->castName}}/>
                    </div>
                @endforeach
            </div>
            
            {{-- untuk add more actor --}}
            <div id="actorForm" style="display: none;">
                <div class="d-flex gap-3 mb-3" >
                    <div class="w-50">
                        <label class="form-label">Actor</label>
                        <select class="form-select" id="genre" aria-label="select Actor">
                            <option selected>Select Actor</option>
                            @foreach ($collection3 as $item)
                                <option value={{$item->name}}>{{$item->name}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="w-50">
                        <label class="form-label" for="charName">Character Name</label>
                        <input class="form-control" type="text" id="charName"/>
                    </div>
                </div>
            </div>
        </div>
        <p class="btn btn-primary mb-5" onclick="addMoreActor()">Add more</p>

        <div class="mb-4">
            <label class="form-label" for="director">Director</label>
            <input class="form-control" type="text" id="director" placeholder={{$collection->director}}/>
        </div>

        <div class="mb-4">
            <label class="form-label" for="releaseDate">Release Date</label>
            <input class="form-control" type="date" id="releaseDate" placeholder={{$collection->year}}/>
        </div>

        <div class="mb-4">
            <label for="inputImage" class="form-label">Image URL</label>
            <input name="inputImage" class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-4">
            <label for="inputBgImage" class="form-label">Background URL</label>
            <input name="inputBgImage" class="form-control" type="file" id="inputBgImage">
        </div>

        <div class="text-center">
            <button class="btn btn-primary btn-block text-center mb-4" type="submit" >Update</button>
        </div>
    </form>
</div>    
@endsection