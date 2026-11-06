@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
@include('adminPanel.layout.side')
      <div class="app-content p-3">
        <div class="apply-form card p-3" style="width: 50rem">
            <form class="d-flex flex-column" id="apply-form" action="{{route('editStudent',$student->stud_id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="stud_id">
                <div class="mb-3">
                    <label class="form-label">Student Name</label>
                    <input type="text" name="stud_name" class="form-control" placeholder="Enter student name" value="{{$student->stud_name}}" />
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Father/Guardian Name</label>
                    <input type="text" name="stud_father" class="form-control" placeholder="Enter father/guardian name" value="{{$student->stud_father}}" />
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Mother Name</label>
                    <input type="text" name="stud_mother" class="form-control" placeholder="Enter mother name" value="{{$student->stud_mother}}" />
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Contact No</label>
                    <input type="text" name="stud_phone" class="form-control" placeholder="Enter contact number" value="{{$student->stud_phone}}" />
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="stud_email" class="form-control" placeholder="Enter email" value="{{$student->stud_email}}" />
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="stud_address" class="form-control" placeholder="Enter address" value="{{$student->stud_address}}" />
                </div>
        
                <div class="mb-3">
                    <label class="form-label">Class</label>
                    <select class="form-select" name="stud_class">
                        <option selected value="{{$student->stud_class}}">{{$student->stud_class}}</option>
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
        
                <div class="mb-3">
                    <label class="form-label">Roll No</label>
                    <input type="text" name="stud_rollNo" class="form-control" placeholder="Enter roll number" value="{{ $student->stud_rollNo }}" />
                </div>

                <div class="mb-3">
                    <label class="form-label">Section</label>
                    <input type="text" name="stud_section" class="form-control" placeholder="Enter address" value="{{$student->stud_section}}" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Image</label>
                    @if($student->stud_img)
                        <img class="my-3" src="{{asset($student->stud_img)}}" alt="">
                    @endif
                    {{-- <br> --}}
                    <input
                        type="file"
                        name="stud_img"
                        class="form-control"
                        placeholder=""
                        aria-describedby="helpId"
                    />
                </div>

                <span>
                    <input type="submit" id="nav-btn" class="btn btn-primary" value="Update">
                </span>
            </form>
        </div>
      </div>
    </div>
@endsection