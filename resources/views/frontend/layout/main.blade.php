@include('frontend.layout.header')
@if (session('success'))
  <div class="site-notice" role="status"><div class="shell">{{ session('success') }}</div></div>
@endif
@yield('main-section')
@include('frontend.layout.footer')
