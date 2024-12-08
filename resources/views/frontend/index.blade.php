@extends('frontend.layout.main')
@section('main-section')
    <!-- Navbar Ends -->
    <main id="home">
      <div class="head-txt">
        <h2>A Bright Future while growing together</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae
          totam itaque ullam impedit!
        </p>
        <a href="" id="head-btn">Apply Now</a>
      </div>
    </main>
    <section class="about" id="about">
      <div class="about-txt">
        <h2>About School</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nemo eius
          nulla officia excepturi repellendus molestias, soluta consequatur quam
          earum voluptates veniam accusamus ipsum minus officiis saepe maiores
          ad tempora. Lorem ipsum, dolor sit amet consectetur adipisicing elit.
          Blanditiis maiores ab tempore dicta sunt saepe similique ex et cum
          excepturi. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Amet inventore veritatis quas quidem nihil provident et ad itaque
          totam id? Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Praesentium doloribus, labore facilis distinctio aliquam atque.
          Placeat nam ipsam quos nemo.
        </p>
        <a href="" id="head-btn">View More</a>
      </div>

      <div class="about-img">
        <img src="{{url('frontend/images/studentss.jpg')}}" alt="" />
      </div>
    </section>

    <div class="courses" id="courses">
      <h2>Our Courses</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.ecati?</p>
      <div class="c-content">
        <div class="c-box">
          <h3>Kinder Garden</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nihil
            commodi obca
          </p>
        </div>

        <div class="c-box">
          <h3>Primary School</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nihil
            commodi obca
          </p>
        </div>

        <div class="c-box">
          <h3>Middle School</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nihil
            commodi obca
          </p>
        </div>

        <div class="c-box">
          <h3>High School</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt nihil
            commodi obca
          </p>
        </div>
      </div>
      <a href="" id="head-btn">Apply Now</a>
    </div>

    <section class="gallery" id="gallery">
      <h2>Gallery</h2>
      <div class="g-content">
        <div>
          <img src="{{url('frontend/images/g (1).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (2).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (3).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (4).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (5).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (6).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (7).jpg')}}" alt="" />
        </div>
        <div>
          <img src="{{url('frontend/images/g (1).jpg')}}" alt="" />
        </div>
      </div>
    </section>

@endsection
