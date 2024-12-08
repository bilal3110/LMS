@extends('frontend.layout.main')
@section('main-section')
    <!-- Navbar Ends -->
    <main id="home" style="min-height: 42vh">
        <div class="head-txt">
            <h2>Apply Online</h2>
        </div>
    </main>

    <section class="apply">
        <h2>Apply Here</h2>
        <p>
            Register your child with us at Blue Horizon. To enroll your child at
            Blue Horizon, kindly fill in the required information on this page. Fill
            in all details regarding Student Name, Parents/Guardians on the form in
            order to complete the registration process.
        </p>
        <div class="apply-form">
            <form action="{{ route('courseForm') }}" id="apply-form" method="post">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->course_id ?? '' }}">

                <div class="mb-3">
                    <label for="name" class="form-label">Student Name</label>
                    <input type="text" name="name" id="name" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="father_name" class="form-label">Father Name</label>
                    <input type="text" name="father_name" id="father_name" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="contact" class="form-label">Contact No</label>
                    <input type="text" name="contact" id="contact" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required />
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required />
                </div>

                <div class="mb-3">
                  <label for="question">Are You Horizon's Student?</label><br />
                  <input type="radio" id="yes" name="is_horizon_student" value="1" required />
                  <label for="yes">Yes</label>
                  <input type="radio" id="no" name="is_horizon_student" value="0" />
                  <label for="no">No</label>
              </div>
              <!-- Submit Button -->
              <input type="submit" id="nav-btn" class="btn btn-primary" value="Apply">
            </form>
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        </div>
    </section>
@endsection
