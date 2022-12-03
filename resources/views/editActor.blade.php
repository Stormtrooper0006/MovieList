@extends('/navTemplate/adminTemplate')

@section('title1', 'Add Actor')

@section('content1')
<div class="m-4">
    <form action="/UpdateActor/{{$collection->id}}" method="post">
        @csrf
        @method("patch")
        <h1>Add Actor</h1>
        <div class="mb-4">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" type="text" id="name" placeholder={{$collection->name}}/>
        </div>

        <div class="mb-4">
            <label class="form-label">Gender</label>
            <select class="form-select" id="genre" aria-label="select gender">
                <option selected>placeholder={{$collection->gender}}</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>  
        </div>

        <div class="mb-4">
            <label class="form-label">Biography</label>
            <textarea class="form-control" aria-label="biography" placeholder={{$collection->biography}}></textarea>
        </div>

        <div class="mb-4">
            <label class="form-label" for="dob">Date of Birth</label>
            <input class="form-control" type="date" id="dob"/>
        </div>

        <div class="mb-4">
            <label class="form-label" for="birthPlace">Place of Birth</label>
            <input class="form-control" type="text" id="birthPlace" placeholder={{$collection->birthplace}}/>
        </div>

        <div class="mb-4">
            <label for="inputImage" class="form-label">Image URL</label>
            <input name="inputImage" class="form-control" type="file" id="inputImage">
        </div>

        <div class="mb-4">
            <label class="form-label" for="popularity">Popularity</label>
            <input class="form-control" type="text" id="popularity" placeholder={{$collection->popularity}}/>
        </div>

        <div class="text-center">
            <button class="btn btn-primary btn-block text-center mb-4" type="submit" >Update</button>
        </div>
    </form>
</div>    
@endsection