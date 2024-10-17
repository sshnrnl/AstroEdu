<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="{{ asset('Header_Footer/Header_Footer.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="{{ asset('Header_Footer/Astronot.png') }}"
            alt="Bootstrap"
            width="50"
            height="50"
          />
        </a>
        <span class="fs-3 fw-semibold">AstroEdu</span>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-center"
          id="navbarNav"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-dark" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-dark" href="{{ url('/learn') }}">Learning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-dark" href="#">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-dark" href="{{ url('/') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-dark" href="{{ url('/signin') }}">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-dark" href="#">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
</body>
</html>