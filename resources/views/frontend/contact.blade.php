@extends('frontend.layout.main')
@section('main-section')
    <!-- Navbar Ends -->
    <main id="home" style="min-height: 42vh">
      <div class="head-txt">
        <h2>Contact Us</h2>
      </div>
    </main>

    <section class="contact">
      <div class="contact-container">
        <div class="contact-left">
          <h2>For Any Query</h2>
          <form action="{{route('contactForm')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" class="form-label">Name</label>
              <input
                type="text"
                name="name"
                id="name"
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">phone</label>
              <input
                type="text"
                name="phone"
                id="phone"
                class="form-control"
                placeholder=""
                aria-describedby="helpId"
              />
            </div>

            <div class="mb-3">
              <label for="" class="form-label">Your Query</label>
              <textarea class="form-control" name="message" id="msg" rows="3"></textarea>
            </div>
            <span>
              <input name="submit" type="submit" id="nav-btn" class="">Submit</input>
            </span>
          </form>
        </div>

        <div class="contact-right">
          <h2>Get In Touch</h2>
          <p>We're open for any suggestion or just to have a chat</p>
          <div class="f-contact">
            <a href=""><i class="fa-solid fa-phone"></i> 987-6543-210</a>
            <a href=""><i class="fa-brands fa-whatsapp"></i> 012-3456-789</a>
            <a href=""><i class="fa-solid fa-fax"></i> 678-9876-03214</a>
            <a href=""><i class="fa-solid fa-envelope"></i> info@edu.com</a>
          </div>
        </div>
      </div>
    </section>

@endsection
