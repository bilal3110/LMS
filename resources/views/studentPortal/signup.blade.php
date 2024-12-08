<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Seaweed+Script&display=swap"
        rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('adminPanel/css/style.css') }}" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <section class="d-flex justify-content-center align-items-center p-5"
        style="background-color: #f0f0f1; height: 150vh;">
        <div class="card p-5 my-3" style="width: 30rem">
            <h2 style="
            margin: 20px 0px;
            font-size: 36px;
            font-weight: 800;
            color: #00a3c9;
            text-align: center;
          "
                class="card-title">
                Sign Up
            </h2>
            <form action="{{route('signupAdmin')}}" id="apply-form" class="d-flex flex-column" method="Post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Name</label>
                    <input type="text" name="admin_name" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Contact No</label>
                    <input type="text" name="admin_phone" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="email" name="admin_email" id="" class="form-control" placeholder=""
                        aria-describedby="helpId" />
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
            <span class="text-center my-2">
              <h4 style="font-size:16px;font-weight:600">Already Have an Account! <a href="{{route('loginPage')}}">Login</a></h4>
            </span>
            </form>
        </div>
    </section>
</body>
<!-- custom Js Files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="{{ asset('adminPanel/js/script.js') }}"></script>

<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>

</html>
