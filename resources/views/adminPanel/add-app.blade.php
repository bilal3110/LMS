@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <section class="col-lg-8 card p-4 m-5">
            <h2>Apply Here</h2>
            <p>
                Register your child with us at Blue Horizon. To enroll your child at
                Blue Horizon, kindly fill in the required information on this page.
                Fill in all details regarding Student Name, Parents/guardians on the
                form in order to complete the registration process.
            </p>
            <div class="apply-form">
              <form id="apply-form" action="{{route('class_insert')}}" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label class="form-label">Student Name</label>
                      <input type="text" name="student_name" class="form-control" placeholder="Enter student name" />
                  </div>
          
                  <div class="mb-3">
                      <label class="form-label">Father/Guardian Name</label>
                      <input type="text" name="father_name" class="form-control" placeholder="Enter father/guardian name" />
                  </div>
          
                  <div class="mb-3">
                      <label class="form-label">Mother Name</label>
                      <input type="text" name="mother_name" class="form-control" placeholder="Enter mother name" />
                  </div>
          
                  <div class="mb-3">
                      <label class="form-label">Contact No</label>
                      <input type="text" name="contact" class="form-control" placeholder="Enter contact number" />
                  </div>
          
                  <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" placeholder="Enter email" />
                  </div>
          
                  <div class="mb-3">
                      <label class="form-label">Address</label>
                      <input type="text" name="address" class="form-control" placeholder="Enter address" />
                  </div>
          
                  <div class="mb-3">
                      <label class="form-label">Class</label>
                      <select class="form-select" name="class">
                          <option selected disabled>Select Class</option>
                          <option value="Play Group">Play Group</option>
                          <option value="Nursery">Nursery</option>
                          <option value="KG">KG</option>
                          <option value="Class-One">Class One</option>
                          <option value="Class-Two">Class Two</option>
                          <option value="Class-Three">Class Three</option>
                          <option value="Class-Four">Class Four</option>
                          <option value="Class-Five">Class Five</option>
                          <option value="Class-Six">Class Six</option>
                          <option value="Class-Seven">Class Seven</option>
                          <option value="Class-Eight">Class Eight</option>
                          <option value="Matric-Class-Nine">Matric Class Nine</option>
                          <option value="Matric-Class-Ten">Matric Class Ten</option>
                      </select>
                  </div>
          
                  <span>
                      <input type="submit" id="nav-btn" class="btn btn-primary" value="Apply">
                  </span>
              </form>
          </div>
        </section>
    </div>
@endsection
