@extends('studentPortal.layout.main')

@section('main-section')
<div class="container-box">
    @include('studentPortal.layout.side')
    <div class="app-content p-3 d-flex gap-5">
        <div class="card" style="width: 30rem;">
            <div class="card-header">{{Auth::guard('studentGuard')->user()->stud_name}} S/O {{Auth::guard('studentGuard')->user()->stud_father}}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-8 col-lg-12">
                        <div class="chart-container-2">
                            @php
                            // Fetch the image filename from the authenticated user
                            $portal_img = Auth::guard('studentGuard')->user()->stud_image;
                        @endphp
                        
                        @if ($portal_img)
                            <!-- Use the correct variable (stud_image) to access the image path -->
                            <img style="width: 18rem" src="{{ asset('/' . $portal_img) }}" />
                        @else
                            <img src="{{ asset('images/im.webp') }}" class="img-thumbnail" style="height: 100%; width: 260px;" />
                        @endif
                        
                        </div>
                    </div>
                    <div class="col-9 col-lg-12">
                        <div class="table-responsive">
                            <table class="table align-items-center">
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle mr-2" style="color: black; margin-right: 10px"></i>
                                            Full
                                            Name
                                        </td>
                                        <td>{{Auth::guard('studentGuard')->user()->stud_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle mr-2"
                                                style="color: black; margin-right: 10px"></i>Father
                                            Name
                                        </td>
                                        <td>{{Auth::guard('studentGuard')->user()->stud_father}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle mr-2"
                                                style="color: black; margin-right: 10px"></i>Roll No
                                        </td>
                                        <td>{{Auth::guard('studentGuard')->user()->stud_rollNo}}</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fa fa-circle mr-2"
                                                style="color: black; margin-right: 10px"></i>Class
                                        </td>
                                        <td>{{Auth::guard('studentGuard')->user()->stud_class}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="d-flex flex-column gap-3">
            <!-- <h2 style="font-size: 30px; font-weight: 800; color: #00a3c9" >Recent Notes</h2> -->
            <div class="card" id="" style="width: 18rem">
                @if ($subjects->isEmpty())
                <p>No subjects available for your class ({{ $portal->stud_class }}).</p>
            @else
                @foreach ($subjects as $subject)
                    @if (!empty($subject->sub_names))
                        <div class="card" style="width: 18rem">
                            <div class="card-header">{{ $portal->stud_class }}</div>
                            @php
                                $subjectNames = json_decode($subject->sub_names, true) ?? [];
                            @endphp
                            <ul class="list-group list-group-flush">
                                @foreach ($subjectNames as $subjectName)
                                    <li class="list-group-item">{{ $subjectName }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <p>No subject names defined for {{ $portal->stud_class }}.</p>
                    @endif
                @endforeach
            @endif
            
            </div>
            <div class="card">
                <div class="card-header">Diary</div>
                <span class="d-flex flex-column gap-3" id="notesList"></span>
            </div>
        </span>
    </div>
</div>
@endsection
