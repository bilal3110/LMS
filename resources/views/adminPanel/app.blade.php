@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <div class="app-content p-3">
            <div class="app-txt d-flex justify-content-between my-2">
                <h3 style="font-size: 30px; font-weight: 800; color: #00a3c9;">
                    APPLICATIONS
                </h3>
                <span class="d-flex gap-3">
                    <form class="d-flex" role="search" action="{{route('student_apply')}}" method="GET">
                      <input class="form-control me-2" type="search" name="search" placeholder="Search" value="{{ request('search') }}" aria-label="Search" />
                      <input class="btn btn-outline-success" type="submit" id="search-btn" value="Search">
                    </form>
                    <a href="{{route('showAppForm')}}" class="btn btn-success py-2">Add Applications</a>
                    <a href="{{route('student_apply')}}" class="btn btn-success py-2">Reset</a>
                </span>
            </div>
            <hr>
            <div class="card" style="width: 60rem">
                <div class="card-header">All Apllications</div>
                <div class="table-responsive">
                    <table class="table" style="font-size: 15px;">
                        <thead>
                            <tr>
                                <th scope="col">Sr</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Mother Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($application as $app)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $app->student_name }}</td>
                                    <td>{{ $app->father_name }}</td>
                                    <td>{{ $app->mother_name }}</td>
                                    <td>{{ $app->class }}</td>
                                    <td>{{ $app->contact }}</td>
                                    <td>{{ $app->email }}</td>
                                    <td>{{ $app->address }}</td>
                                    <td>
                                        <form action="{{route('acceptApp',$app->sid)}}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">Accept</button>
                                        </form>
                                        <a href="{{route('appDel',['sid' => $app->sid])}}" class="btn btn-danger my-2" style="font-size: 14px; font-weight: 600;"
                                        >Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="my-3">
                <nav style="all: unset" aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        @if ($application->onfirstPage())
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{  $application->previousPageUrl() }}">Previous</a>
                            </li>
                        @endif
                        @foreach ($application->getUrlRange(1,  $application->lastPage()) as $page => $url)
                            @if ($page ==  $application->currentPage())
                                <li class="page-item"><a class="page-link" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                        @if ( $application->hasmorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $application->nextPageUrl() }}">Next</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
