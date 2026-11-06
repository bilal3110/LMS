<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="theme-color" content="#9A1B28">
    <title>Blue Horizon | Administration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono&family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('adminPanel/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="portal-shell admin-shell"><a class="skip-link" href="#workspace">Skip to content</a>
    <nav class="topbar" aria-label="Administration controls"><button id="bars" type="button"
            aria-label="Toggle navigation" aria-expanded="true"><i class="fa-solid fa-bars"></i></button><a
            class="portal-brand" href="{{ route('dashboard') }}">Blue
            <span>Horizon</span><small>Administration</small></a><button id="user" type="button"
            aria-label="Open account menu" aria-expanded="false"><i class="fa-solid fa-user-gear"></i></button></nav>
    <ul id="user-links" aria-label="Account menu">
        <li><a href="{{ route('profile') }}">Profile</a></li>
        <li><a href="{{ route('adminlogout') }}">Log out</a></li>
    </ul>
