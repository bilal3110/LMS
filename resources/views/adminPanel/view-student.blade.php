@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
@include('adminPanel.layout.side')
      <div class="app-content p-3">
        <div class="card">
            <div class="card-header">{{$student->stud_name}} S/O {{$student->stud_father}}</div>
            <div class="card-body">
              <div class="row">
                <div class="col-8 col-lg-12">
                  <div class="chart-container-2">
                    @if ($student->stud_img)
                    <img style="width: 18rem" src="{{ asset($student->stud_img) }}" class="card-image-top" alt="Course Image">
                    @endif
                  </div>
                </div>
                <div class="col-9 col-lg-12">
                  <div class="table-responsive">
                    <table class="table align-items-center">
                      <tbody>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i> Full
                            Name
                          </td>
                          <td>{{$student->stud_name}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Father
                            Name
                          </td>
                          <td>{{$student->stud_father}}</td>
                        </tr>
                        <tr>
                            <td>
                              <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Mother
                              Name
                            </td>
                            <td>{{$student->stud_mother}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Class
                          </td>
                          <td>{{$student->stud_class}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Roll No
                          </td>
                          <td>{{$student->stud_rollNo}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i
                            >Section
                          </td>
                          <td>{{$student->stud_section}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Contact
                          </td>
                          <td>{{$student->stud_phone}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i
                            >Email
                          </td>
                          <td>{{$student->stud_email}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Address
                          </td>
                          <td>{{$student->stud_address}}</td>
                        </tr>
                        <tr>
                            <td>
                                <a class="btn btn-primary" style="font-weight: 600;" href="{{route('updateStudentPage',['stud_id' => $student->stud_id])}}">Update</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
      </div>
    </div>
@endsection