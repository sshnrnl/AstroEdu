<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('Home/Home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Navbar -->
    @include('Header_Footer.header')
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
                        <button type="button" class="btn btn-light" onclick="window.location.href='{{ url('/signin') }}'">Join Us!</button>
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


    <div class="cardTitle_container">
        <h1 class="card_titles">Browse Courses</h1>
    </div>
    
    <div class="cardDesc_container">
        <span class="card_descs">Below are previews of the courses available on our platform. Each course is thoughtfully designed to help<br> you acquire new skills, 
        delve into exciting topics, and achieve your personal and professional goals</span>
    </div>

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
    
    <!-- Main End -->
     
    <!-- Footer Start -->

     @include('Header_Footer.footer')
     
    <!-- Footer End -->
</body>
</html>