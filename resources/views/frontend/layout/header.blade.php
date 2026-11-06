<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#9A1B28">
  <title>Blue Horizon School</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Mono&family=DM+Sans:opsz,wght@9..40,400;9..40,500;9..40,600;9..40,700&family=Playfair+Display:opsz,wght@5..120,600;5..120,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('frontend/css/style.css') }}">
</head>
<body class="school-site">
  <a class="skip-link" href="#content">Skip to content</a>
  <header class="site-header">
    <div class="utility-bar"><div class="shell"><span>Faisalabad, Punjab</span><a href="tel:+929876543210">+92 987 654 3210</a><a href="mailto:info@bluehorizon.edu">info@bluehorizon.edu</a></div></div>
    <div class="shell nav-wrap">
      <a class="wordmark" href="{{ route('f-home') }}" aria-label="Blue Horizon School home"><span>Blue</span> Horizon <small>School</small></a>
      <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation"><span></span><span></span><span></span><span class="sr-only">Menu</span></button>
      <nav id="primary-navigation" class="primary-nav" aria-label="Primary navigation">
        <a href="{{ route('f-home') }}">Home</a>
        <a href="{{ route('f-about') }}">Our school</a>
        <a href="{{ route('f-c-course') }}">Programs</a>
        <a href="{{ route('f-add-procedure') }}">Admissions</a>
        <a href="{{ route('f-gallery') }}">Campus life</a>
        <a href="{{ route('f-contact') }}">Contact</a>
      </nav>
      <a class="button button--small nav-apply" href="{{ route('f-apply') }}">Apply now <span aria-hidden="true">↗</span></a>
    </div>
  </header>
