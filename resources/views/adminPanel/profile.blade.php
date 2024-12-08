@extends('adminPanel.layout.main')
@section('main-section')
    <div class="container-box">
        @include('adminPanel.layout.side')
        <div class="main-content p-5">
            <h1 style="font-size: 30px; font-weight: 800; color: #00a3c9;">Hey; {{ Auth::user()->admin_name }}</h1>
            <hr>
            <form action="{{ route('updateProfile') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="admin_name" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{ Auth::user()->admin_name }}" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Contact No</label>
                    <input type="text" name="admin_phone" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{ Auth::user()->admin_phone }}" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="admin_email" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" value="{{ Auth::user()->admin_email }}" />
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Password</label>
                  <input type="password" name="admin_password" id="" class="form-control" placeholder=""
                      aria-describedby="helpId" />
              </div>

              <div class="mb-3">
                  <label for="" class="form-label">Confirm Password</label>
                  <input type="password" name="admin_password_confirmation" id="" class="form-control"
                      placeholder="" aria-describedby="helpId" />
              </div>
              
                <input type="submit" value="Submit"
                    style="
      text-decoration: none;
      background: var(--primary-color);
      font-size: 16px;
      font-weight: 600;
      color: var(--tertiary-color);
      padding: 12px 30px;
      text-align: center;
      border-radius: 6px;
    " />
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection
