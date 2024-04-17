@extends('../layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Students
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach ($students as $student)
            <div class="col-md-4  mb-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ $student->imageURL }}" class="card-img-top" alt="...">
                        <h5 class="card-title">{{ $student->fname }} {{ $student->lname }}</h5>
                        <h5 class="card-subtitle">{{ $student->marks }} {{ $student->grade }}</h5>
                        <a href="{{ route('students.edit', $student->id) }}" class="card-link">Edit</a>
                        <a href="{{ route('students.trash', $student->id) }}" class="card-link">Delete</a>
                        <a href="{{ route('students.show', $student->id) }}" class="card-link">Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
