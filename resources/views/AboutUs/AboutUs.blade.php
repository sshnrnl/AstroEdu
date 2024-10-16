<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('AboutUs/AboutUs.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="{{ asset('Login/Astronot.png') }}"
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
              <a class="nav-link" aria-current="page" href="welcome.blade.php"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Project</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/signin') }}">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Profile</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Navbar End -->

  <!-- Main Start -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="TextAboutUs">
                        <h1>About Us</h1>
                        <div class="Description">
                            <p>AstroEdu offers engaging educational resources designed to enhance 
                            learning experiences for elementary school students. We provide a variety of subject-specific 
                            questions accompanied by captivating features and appealing designs. Our goal is to change boring 
                            lessons into enjoyable experiences, helping to motivate students learning.</p>
                        </div>
                        <button type="button" class="btn btn-light">Join Us!</button>
                    </div>
                </div>
                <div class="col-7">
                    <div class="Vid">
                        <video autoplay muted controls loop>
                            <source src="{{ asset('AboutUs/Vid.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Main End -->

    <!-- Card Start -->
     <div class="card__container">
        <div class="card_container">
          <article class="card_article">
            <img src="{{ asset('Login/Card1.png') }}" alt="image" class="card_img">

            <div class="card_data">
              <span class="card_desc">Games</span>
                <h2 class="card_title">Astronot Satu</h2>
                <a href="#" class="card_button">Read More</a>
            </div>

          </article>
          <article class="card_article">
            <img src="{{ asset('Login/Card2.png') }}" alt="image" class="card_img">

            <div class="card_data">
              <span class="card_desc">Project</span>
                <h2 class="card_title">Astronot Dua</h2>
                <a href="#" class="card_button">Read More</a>
            </div>

          </article>
          <article class="card_article">
            <img src="{{ asset('Login/Card3.png') }}" alt="image" class="card_img">

            <div class="card_data">
              <span class="card_desc">Students</span>
                <h2 class="card_title">Astronot Tiga</h2>
                <a href="#" class="card_button">Read More</a>
            </div>

          </article>

        </div>
     </div>
    <!-- Card End -->
</body>
</html>