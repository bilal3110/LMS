@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <div class="main-content p-5">
            <div class="app-txt d-flex justify-content-between my-2">
                <h3 style="font-size: 30px; font-weight: 800; color: #00a3c9;">
                    Courses
                </h3>
                <span class="d-flex gap-3">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                    <a href="{{ route('addCourse') }}" class="btn btn-success py-2">Add Course</a>
                </span>
            </div>
            <hr>
            <span class="d-flex flex-wrap gap-3">
                @foreach ($courses as $course)
                    <div class="card shadow" style="width:25rem;">
                        <img src="{{ asset($course->course_image) }}" class="card-image-top" alt="Course Image">
                        <div class="card-body">
                            <h2 class="card-title" style="font-size: 30px; font-weight: 700; color: #00a3c9;">
                                {{ $course->course_title }}</h2>
                            <h6 class="card-text" style="font-size: 14px; font-weight: 500; color: #00a3c9;">
                                {{ $course->course_duration }}</h6>
                        </div>
                        <h4 class="mx-3" style="font-size: 25px; font-weight: 700; color: #00a3c9;">Skills</h4>
                        <ul class="d-flex flex-wrap">
                            <li style="font-size: 14px; font-weight: 500; color: #00a3c9; margin-left: -12px;"
                                class="list-group-item">{{ $course->course_skills }}</li>
                        </ul>
                        <h4 class="mx-3" style="font-size: 25px; font-weight: 700; color: #00a3c9;">Fees</h4>
                        <ul class="d-flex flex-wrap">
                            <li style="font-size: 14px; font-weight: 500; color: #00a3c9; margin-left: -12px;"
                                class="list-group-item">PKR {{ $course->course_fee }}/-</li>
                        </ul>
                        <span class="mx-3 py-2">
                          <a href="{{route('editCourse',['course_id' => $course->course_id])}}" class="text-success">Edit</a>
                          <a href="{{route('delCourse',['course_id' => $course->course_id])}}" class="text-danger">Delete</a>
                        </span>
                    </div>
                @endforeach
            </span>
        </div>
    </div>
@endsection
