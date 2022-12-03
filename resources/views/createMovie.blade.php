@extends('/navTemplate/adminTemplate')

@section('title1', 'Add Movie')

@section('content1')
<div class="m-4">
    <form action="/CreateMovie" method="post">
        @csrf
        <h1>Add Movie</h1>
        <div class="mb-4">
            <label class="form-label" for="title">Title</label>
            <input class="form-control" type="text" id="title"/>
        </div>

        <div class="mb-4">
            <label class="form-label">Description</label>
            <textarea class="form-control" aria-label="description"></textarea>
        </div>

        <div class="mb-4">
            <label class="form-label">Genre</label>
            <select class="form-select" id="genre" aria-label="select genre">
                <option selected>Select Genre</option>
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
            <div class="d-flex gap-3 mb-3" id="actorForm">
                <div class="w-50">
                    <label class="form-label">Actor</label>
                    <select class="form-select" id="genre" aria-label="select Actor">
                        <option selected>Select Actor</option>
                        {{-- @foreach ($collection as $item)
                            <option value={{$item->name}}>{{$item->name}}</option>
                        @endforeach --}}

                        {{-- placeholder --}}
                        <option value="Actor1">Actor1</option>
                        <option value="Actor2">Actor2</option>
                        {{-- placeholder --}}
                    </select>  
                </div>
                <div class="w-50">
                    <label class="form-label" for="charName">Character Name</label>
                    <input class="form-control" type="text" id="charName"/>
                </div>
            </div>
        </div>
        <p class="btn btn-primary mb-5" onclick="addMoreActor()">Add more</p>

        <div class="mb-4">
            <label class="form-label" for="director">Director</label>
            <input class="form-control" type="text" id="director"/>
        </div>

        <div class="mb-4">
            <label class="form-label" for="releaseDate">Release Date</label>
            <input class="form-control" type="date" id="releaseDate"/>
        </div>

        <div class="mb-4">
            <label for="inputImage" class="form-label">Image URL</label>
            <input name="inputImage" class="form-control" type="file" id="inputImage">
        </div>

        <div class="mb-4">
            <label for="inputBgImage" class="form-label">Background URL</label>
            <input name="inputBgImage" class="form-control" type="file" id="inputBgImage">
        </div>

        <div class="text-center">
            <button class="btn btn-primary btn-block text-center mb-4" type="submit" >Create</button>
        </div>
    </form>
</div>    
@endsection