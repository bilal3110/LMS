@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <div class="app-content  p-3">
            <div class="app-txt d-flex justify-content-between my-2">
                <h3 style="font-size: 30px; font-weight: 800; color: #00a3c9;">
                    Messages
                </h3>
                <span class="d-flex gap-3">
                    <form class="d-flex" action="{{ route('showMessage') }}" method="GET" role="search">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search" value="{{ request('search') }}" aria-label="Search" />
                        <input class="btn btn-outline-success" type="submit" id="search-btn" value="Search">
                        <a href="{{route('showMessage')}}" class="btn btn-success mx-2 py-2" style="font-size: 17px; font-weight: 600">Reset</a>
                    </form>                    
                </span>
            </div>
            <hr>
            <div class="card" style="width: 60rem">
                <div class="card-header">Recent Messages</div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sr</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                        @foreach ($contact as $data)
                            <tr>
                                <th scope="row">{{ $serial++ }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->message }}</td>
                                <td>
                                    {{-- <a class="btn btn-primary my-2" style="font-size: 14px; font-weight: 600;"  href="">Update</a> --}}
                                    <a class="btn btn-danger my-2" style="font-size: 14px; font-weight: 600;"
                                        href="{{ route('delMessage', ['cid' => $data->cid]) }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            {{-- Pagination --}}
            <div class="my-3">
                <nav style="all: unset;" aria-label="Page navigation example">
                    <ul class="pagination justify-content-end">
                        @if ($contact->onfirstPage())
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a href="{{ $contact->previousPageUrl() }}" class="page-link">Previous</a>
                            </li>
                        @endif
                        @foreach ($contact->getUrlRange(1, $contact->lastPage()) as $page => $url)
                        @if ($page == $contact->currentPage())
                            <li class="page-item"><a class="page-link" href="#">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                        @if ($contact->hasmorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $contact->nextPageUrl() }}">Next</a>
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
