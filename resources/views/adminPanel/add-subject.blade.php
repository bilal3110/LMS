@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <section class="col-lg-8 card p-4 m-5">
            <h2 style="font-size: 30px; font-weight: 800; color: #00a3c9;">Add Subject</h2>
            <div class="apply-form">
              <form id="apply-form" action="{{ route('insertSubject') }}" method="post">
                  @csrf
                  <div class="mb-3">
                      <label class="form-label">Class</label>
                      <select class="form-select" name="class_name">
                          <option selected disabled>Select Class</option>
                          <option selected disabled>Select Class</option>
                          <option value="Play Group">Play Group</option>
                          <option value="Nursery">Nursery</option>
                          <option value="KG">KG</option>
                          <option value="One">One</option>
                          <option value="Two">Two</option>
                          <option value="Three">Three</option>
                          <option value="Four">Four</option>
                          <option value="Class-Five">Class Five</option>
                          <option value="Six">Six</option>
                          <option value="Seven">Seven</option>
                          <option value="Eight">Eight</option>
                          <option value="Nine">Nine</option>
                          <option value="Ten">Ten</option>
                      </select>
                  </div>
                  @for ($i = 1; $i <= 8; $i++)
                      <div class="mb-3">
                          <label for="" class="form-label">Subject {{ $i }}</label>
                          <input type="text" name="sub{{ $i }}" id="" class="form-control" placeholder=""
                              aria-describedby="helpId" />
                      </div>
                  @endfor
                  <span>
                      <input type="submit" id="nav-btn" class="btn btn-primary" value="Submit">
                  </span>
              </form>
          </div>
          
        </section>
    </div>
@endsection
