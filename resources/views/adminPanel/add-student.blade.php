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
          <form id="apply-form" method="post">
            <div class="mb-3">
              <label for="" class="form-label">Student Name</label>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Father/Guardian Name</label>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Mother Name Name</label>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Contact No</label>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input
                type="email"
                name=""
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Address</label>
              <input
                type="text"
                name=""
                id=""
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Class</label>
              <select class="form-select form-select-lg" name="" id="">
                <option selected>Select Class</option>
                <option value="">Play Group</option>
                <option value="">Nursery</option>
                <option value="">KG</option>
                <option value="">Class-One</option>
                <option value="">Class-Two</option>
                <option value="">Class-Three</option>
                <option value="">Class-Four</option>
                <option value="">Class-Five</option>
                <option value="">Class-Six</option>
                <option value="">Class-Seven</option>
                <option value="">Class-Eight</option>
                <option value="">Matric-Class-Nine</option>
                <option value="">Matric-Class-Ten</option>
              </select>
            </div>
          </form>
          <span>
            <a id="head-btn" class="btn btn-success no-loader app-btn">Submit</a>
          </span>
        </div>
      </section>
    </div>
@endsection