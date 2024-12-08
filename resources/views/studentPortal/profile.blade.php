@extends('studentPortal.layout.main')

@section('main-section')
    <div class="container-box">
    @include('studentPortal.layout.side')
      <div class="app-content p-3 d-flex gap-5">
        <div class="card">
            <div class="card-header">{{Auth::guard('studentGuard')->user()->stud_name}} S/O {{Auth::guard('studentGuard')->user()->stud_father}}</div>
            <div class="card-body">
              <div class="row">
                <div class="col-8 col-lg-12">
                  <div class="chart-container-2">
                    <img
                      src="images/im.webp"
                      class="img-thumbnail"
                      style="height: 100%; width: 300px;"
                    />
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
                          <td>{{Auth::guard('studentGuard')->user()->stud_name}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Father
                            Name
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->stud_father}}</td>
                        </tr>
                        <tr>
                            <td>
                              <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Mother
                              Name
                            </td>
                            <td>{{Auth::guard('studentGuard')->user()->stud_mother}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Class
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->stud_class}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Roll No
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->stud_rollNo}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i
                            >Section
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->stud_section}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Contact
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->stud_phone}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i
                            >Email
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->portal_email}}</td>
                        </tr>
                        <tr>
                          <td>
                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>Address
                          </td>
                          <td>{{Auth::guard('studentGuard')->user()->stud_address}}</td>
                        </tr>
                        <tr>
                            <td class="text-danger" style="font-weight: 700;">
                                Note : If You Want to Update Any Information Visit or Contact Administration
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
@endsection