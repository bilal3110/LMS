@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <section class="col-lg-8 card p-4 m-5">
            <h2>Add Here</h2>
            <div class="apply-form">
                <form id="apply-form" action="{{ route('updateCourse', $course->course_id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Course Title</label>
                        <input
                            type="text"
                            name="course_title"
                            class="form-control"
                            value="{{ $course->course_title }}"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Course Duration</label>
                        <input
                            type="text"
                            name="course_duration"
                            class="form-control"
                            value="{{ $course->course_duration }}"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Skills</label>
                        <input
                            type="text"
                            name="course_skills"
                            class="form-control"
                            value="{{ $course->course_skills }}"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Fees</label>
                        <input
                            type="text"
                            name="course_fees" 
                            class="form-control"
                            value="{{ $course->course_fee }}"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Course Image</label>
                        @if($course->course_image)
                            <img class="my-3" src="{{asset($course->course_image)}}" alt="">
                        @endif
                        {{-- <br> --}}
                        <input
                            type="file"
                            name="course_image"
                            class="form-control"
                            placeholder=""
                            aria-describedby="helpId"
                        />
                    </div>

                    <span>
                        <input type="submit" id="nav-btn" class="btn btn-primary" value="Submit">
                    </span>
                </form>
            </div>
        </section>
    </div>
@endsection
