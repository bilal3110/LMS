@extends('frontend.layout.main')
@section('main-section')
    <!-- Navbar Ends -->

    <main id="home" style="min-height: 42vh">
      <div class="head-txt">
        <h2>Computer Skills</h2>
      </div>
    </main>

    <section class="about" id="about">
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
                  <a href="{{route('f-c-apply',['course_id'=> $course->course_id])}}" class="btn btn-success">Apply Now</a>
                </span>
            </div>
        @endforeach
    </span>
    </section>
@endsection
