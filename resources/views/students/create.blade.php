@extends('../layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Add a Student Profile
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('students.store') }}" method="post">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ csrf_field() }}
            <div class="mb-3">
                <label for="fname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" aria-describedby="fname">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" aria-describedby="lname">
            </div>
            <div class="mb-3">
                <label for="marks" class="form-label">Mark</label>
                <input type="text" class="form-control" id="marks" name="marks" maxlength="3" pattern="[0-9]*"
                    aria-describedby="marks">
                @error('marks')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">Letter Grade</label>
                <input type="text" class="form-control" id="grade" name="grade" maxlength="2"
                    pattern="[a-zA-Z+-]*" aria-describedby="grade">
                @error('grades')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="imageURL" class="form-label">Image URL</label>
                <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="imageURL">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
