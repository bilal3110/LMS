@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('adminPanel.layout.side')
        <div class="app-content p-3">
            <div class="app-txt d-flex justify-content-between my-2">
                <h3 style="font-size: 30px; font-weight: 800; color: #00a3c9;">
                    Students
                </h3>
                <span class="d-flex gap-3">
                    <form class="d-flex" role="search" action="" method="GET">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search"
                            value="{{ request('search') }}" aria-label="Search" />
                        <input class="btn btn-outline-success" type="submit" id="search-btn" value="Search">
                        <a href="{{ route('showStudents') }}" class="btn btn-success px-3 py-2 mx-2">Reset</a>
                    </form>
                </span>
            </div>
            <hr>
            <div class="card" style="width: 60rem">
                <div class="card-header">Students</div>
                <div class="table-responsive">
                    <table class="table" style="font-size: 15px;">
                        <thead>
                            <tr>
                                <th scope="col">Sr</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Father Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Section</th>
                                <th scope="col">Roll No</th>
                                <th>Profile</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $student->stud_name }}</td>
                                    <td>{{ $student->stud_father }}</td>
                                    <td>{{ $student->stud_class }}</td>
                                    <td>{{ $student->stud_section }}</td>
                                    <td>{{ $student->stud_rollNo }}</td>
                                    <td>
                                        <a href="{{ route('viewStudent', ['stud_id' => $student->stud_id]) }}"
                                            class="btn btn-success my-2" style="font-size: 14px; font-weight: 600;">View</a>
                                        @php
                                            $isAccountGenerated = \App\Models\StudentPortal::where(
                                                'portal_email',
                                                $student->stud_rollNo . '@horizon.edu.pk',
                                            )->exists();
                                        @endphp

                                        <a class="btn {{ $isAccountGenerated ? 'btn-primary' : 'btn-success' }} my-2"
                                            style="font-size: 14px; font-weight: 600;"
                                            href="{{ !$isAccountGenerated ? route('genAccount', ['stud_id' => $student->stud_id]) : '#' }}"
                                            {{ $isAccountGenerated ? 'disabled' : '' }}>
                                            {{ $isAccountGenerated ? 'Generated' : 'Generate' }}
                                        </a>

                                    </td>
                                    <td>
                                        <a href="{{ route('delStudent', ['stud_id' => $student->stud_id]) }}"
                                            class="btn btn-danger my-2"
                                            style="font-size: 14px; font-weight: 600;">Delete</a>
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
                        @if ($students->onfirstPage())
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $students->previousPageUrl() }}">Previous</a>
                            </li>
                        @endif
                        @foreach ($students->getUrlRange(1, $students->lastPage()) as $page => $url)
                            @if ($page == $students->currentPage())
                                <li class="page-item"><a class="page-link" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                        @if ($students->hasmorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $students->nextPageUrl() }}">Next</a>
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
