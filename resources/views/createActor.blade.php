@extends('/navTemplate/adminTemplate')

@section('title1', 'Add Actor')

@section('content1')
<div class="m-4">
    <form action="/CreateActor" method="post">
        @csrf
        <h1>Add Actor</h1>
        <div class="mb-4">
            <label class="form-label" for="name">Name</label>
            <input class="form-control" type="text" id="name"/>
        </div>

        <div class="mb-4">
            <label class="form-label">Gender</label>
            <select class="form-select" id="genre" aria-label="select gender">
                <option selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>  
        </div>

        <div class="mb-4">
            <label class="form-label">Biography</label>
            <textarea class="form-control" aria-label="biography"></textarea>
        </div>

        <div class="mb-4">
            <label class="form-label" for="dob">Date of Birth</label>
            <input class="form-control" type="date" id="dob"/>
        </div>

        <div class="mb-4">
            <label class="form-label" for="birthPlace">Place of Birth</label>
            <input class="form-control" type="text" id="birthPlace"/>
        </div>

        <div class="mb-4">
            <label for="inputImage" class="form-label">Image URL</label>
            <input name="inputImage" class="form-control" type="file" id="formFile">
        </div>

        <div class="mb-4">
            <label class="form-label" for="popularity">Popularity</label>
            <input class="form-control" type="text" id="popularity"/>
        </div>

        <div class="text-center">
            <button class="btn btn-primary btn-block text-center mb-4" type="submit" >Create</button>
        </div>
    </form>
</div>    
@endsection