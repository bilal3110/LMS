  <footer class="site-footer">
    <div class="shell footer-grid">
      <div><a class="wordmark wordmark--footer" href="{{ route('f-home') }}"><span>Blue</span> Horizon <small>School</small></a><p>A thoughtful beginning for curious, capable learners.</p></div>
      <div><p class="footer-label">Visit</p><address>Faisalabad 38000<br>Punjab, Pakistan</address></div>
      <div><p class="footer-label">Explore</p><a href="{{ route('f-about') }}">Our school</a><a href="{{ route('f-c-course') }}">Programs</a><a href="{{ route('f-add-procedure') }}">Admissions</a></div>
      <div><p class="footer-label">Connect</p><a href="tel:+929876543210">+92 987 654 3210</a><a href="mailto:info@bluehorizon.edu">info@bluehorizon.edu</a><a href="{{ route('f-contact') }}">Send an enquiry</a></div>
    </div>
    <div class="shell footer-bottom"><span>© {{ date('Y') }} Blue Horizon School</span><span>Learn with purpose.</span></div>
  </footer>
  <script src="{{ url('frontend/js/script.js') }}"></script>
</body>
</html>
