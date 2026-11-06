@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <div class="main-content p-5">
            <h1 style="font-size: 30px; font-weight: 800; color: #00a3c9;">
            @if (Auth::check())
                Welcome, {{ Auth::user()->admin_name }}
            @else
                No user is logged in
            @endif
            </h1>
            <hr>
            <span class="d-flex justify-content-around">
                <div class="c-box">
                    <h1>{{$students}}</h1>
                    <p>
                        Total Studnets
                    </p>
                </div>

                <div class="c-box">
                    <h1>{{$classes}}</h1>
                    <p>
                        Total Applications
                    </p>
                </div>

                <div class="c-box">
                    <h1>{{$totalContacts}}</h1>
                    <p>
                        Total Messages
                    </p>
                </div>

                <div class="c-box">
                    <h1>{{$courses}}</h1>
                    <p>
                        Total Courses
                    </p>
                </div>
            </span>
            <div class="d-flex flex-wrap gap-2 my-3">
                <span>
                    <div class="card" style="width: 38rem;">
                        <div class="card-header">Recent Apllications</div>
                        <table class="table table-bordered table-striped text-para">
                            <thead class="table-striped">
                                <tr>
                                    <th scope="col">Sr</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    {{-- <th scope="col">Email</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                              @endphp
                                @foreach ($message as $data)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->phone }}</td>
                                        <td>{{ $data->email }}</td>
                                    </tr>
                                @endforeach
                                <td>
                                    <a style="text-decoration: none; color: #00a3c9; font-weight: 600;"
                                        href="{{ route('showMessage') }}">View
                                        More</a>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </span>
                <span>
                    <div class="card" id="" style="width: 18rem">
                        <div class="card-header">TO DO LIST</div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A Fourth item</li>
                        </ul>
                    </div>
                </span>
            </div>
        </div>
    </div>
@endsection
