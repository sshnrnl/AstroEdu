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

      <div class="d-flex align-items-center">
        <a class="navbar-brand" href="#">
          <img
            src="{{ asset('Header_Footer/Astronot.png') }}"
            alt="Bootstrap"
            width="50"
            height="50"
          />
        </a>
        <span class="fs-3 fw-semibold text-light">AstroEdu</span>
        </div>
        
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
          class="collapse navbar-collapse justify-content-between"
          id="navbarNav"
        >
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-light" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-light" href="{{ url('/learn') }}">Learning</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-decoration-none text-light" href="{{ url('/community') }}">Community</a>
            </li>
          </ul>

            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-warning me-3" href="{{ url('/') }}">Sign In</button>
                <a href="{{ url('/profil') }}" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </a>
            </div>
          
        </div>
      </div>
    </nav>
    
</body>
</html>