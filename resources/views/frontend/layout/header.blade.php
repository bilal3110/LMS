<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Seaweed+Script&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}" />
  </head>

  <body>
    <div class="loading">
      <div class="loader">
        <img src="images/logo.png" alt="" />
      </div>
    </div>
    <div class="top-nav">
      <span><i class="fa-solid fa-phone mx-2"></i> +98 7654 3210</span>

      <span>
        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
      </span>
    </div>
    <nav>
      <div class="logo">
        <a href="{{route('f-home')}}">
          <img src="images/logo.png" alt="" />
        </a>
      </div>

      <div class="navbar">
        <div><a href="{{route('f-home')}}">Home </a></div>

        <div>
          <a href="" class="no-loader"
            >Admissions <i id="s-icon" class="fa-solid fa-caret-down"></i
          ></a>
          <ul id="nav-menu">
            <li><a href="{{route('f-add-procedure')}}">Admission Procedure</a></li>
            <li><a href="{{route('f-apply')}}">Apply Online</a></li>
            <li><a href="{{route('f-c-course')}}">Computer Courses</a></li>
          </ul>
        </div>

        <div><a href="{{route('f-about')}}">About Us </a></div>

        <div><a href="{{route('f-gallery')}}">Gallery </a></div>

        <div><a href="{{route('f-contact')}}">Contact Us </a></div>
      </div>

      <span>
        <a href="" id="nav-btn">Apply Now</a>
      </span>
    </nav>

    <!-- Responsive Navbar -->

    <div class="res-nav">
      <div class="res-nav-btn">
        <div class="logo">
          <a href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
        </div>

        <span id="bars">
          <i class="fa-solid fa-bars"></i>
        </span>
      </div>

      <div class="res-nav-links">
        <div><a href="{{route('f-home')}}">Home </a></div>

        <div>
          <a id="admission" href="#"
            >Admissions <i id="s-icon" class="fa-solid fa-caret-down"></i
          ></a>
          <ul id="res-nav-menu">
            <li><a href="{{route('f-add-procedure')}}">Admission Procedure</a></li>
            <li><a href="{{route('f-apply')}}">Apply Online</a></li>
            <li><a href="{{route('f-c-course')}}">Computer Courses</a></li>
          </ul>
        </div>

        <div><a href="{{route('f-about')}}">About Us </a></div>

        <div><a href="{{route('f-gallery')}}">Gallery </a></div>

        <div><a href="{{route('f-contact')}}">Contact Us </a></div>
      </div>
    </div>
