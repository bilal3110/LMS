@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <div class="main-content p-5">
            <div class="app-txt d-flex justify-content-between my-2">
                <h3 style="font-size: 30px; font-weight: 800; color: #00a3c9;">
                    Classes
                </h3>
                <span class="d-flex gap-3">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">
                            Search
                        </button>
                    </form>
                    <a href="{{ route('addSubject') }}" class="btn btn-success py-2">Add Subject</a>
                </span>
            </div>
            <hr>
            <span class="d-flex flex-wrap gap-3">
                @foreach ($subjects as $subject)
                    <div class="card" id="" style="width: 18rem">
                        <div class="card-header">{{ $subject->class_name }}</div>
                        @php
                            $subjectNames = json_decode($subject->sub_names, true);
                        @endphp
                        <ul class="list-group list-group-flush">
                            @foreach ($subjectNames as $subjectName)
                                <li class="list-group-item">{{ $subjectName }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </span>
        </div>
        </span>
    </div>
    </div>
@endsection
