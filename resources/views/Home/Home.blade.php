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

  <div class="container">
    <!-- Hero Section -->
    <div class="hero-section">
        <div class="content">
            <h1>Learning Should be Fun</h1>
            <p>Play, Learn, and Grow: Unlock Your Child's Love for Learning!</p>
            <a href="{{ url('/learn') }}" class="btn">Join Course</a>
        </div>
        <!-- Astronaut Image -->
        <div>
            <img src="{{ asset('Home/rafiki.png') }}" alt="Astronaut" class="astronaut">
        </div>
    </div>

    <!-- Info Section -->
    <div class="info-section">
        <div class="info-box">
            <h3>Education</h3>
            <p>Elementary</p>
        </div>
        <div class="info-box">
            <h3>6+</h3>
            <p>Subjects</p>
        </div>
        <div class="info-box">
            <h3>50++</h3>
            <p>Materials made by<br> Specialist</p>
        </div>
        <div class="info-box">
            <h3>Accreditation</h3>
            <p>A</p>
        </div>
    </div>
</div>



    <div class="cardTitle_container">
        <h1 class="card_titles">Browse Courses</h1>
    </div>
    
    <div class="cardDesc_container">
        <p class="text-center">Below are previews of the courses available on our platform. Each course is thoughtfully designed to help<br> you acquire new skills, 
        delve into exciting topics, and achieve your personal and professional goals</p>
    </div>

    <div class="card__container">
        <div class="card_container">
          <article class="card_article">
            <img src="{{ asset('Login/Card1.png') }}" alt="image" class="card_img">

            <div class="card_data">
              <span class="card_desc">Course</span>
                <h2 class="card_title">Science</h2>
                <a href="{{ route('courses.index', ['category' => 'Science']) }}" class="card_button">Read More</a>
            </div>

          </article>
          <article class="card_article">
            <img src="{{ asset('Login/Card2.png') }}" alt="image" class="card_img">

            <div class="card_data">
              <span class="card_desc">Course</span>
                <h2 class="card_title">Math</h2>
                <a href="{{ route('courses.index', ['category' => 'Math']) }}" class="card_button">Read More</a>
            </div>

          </article>
          <article class="card_article">
            <img src="{{ asset('Login/Card3.png') }}" alt="image" class="card_img">

            <div class="card_data">
              <span class="card_desc">Course</span>
                <h2 class="card_title">English</h2>
                <a href="{{ route('courses.index', ['category' => 'English']) }}" class="card_button">Read More</a>
            </div>

          </article>
          

        </div>
    </div>



  <main>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="TextAboutUs">
                        <h1 class="vid-title">About Us</h1>
                        <p class="Description">AstroEdu offers engaging educational resources designed to enhance 
                        learning experiences for elementary school students. We provide a variety of subject-specific 
                        questions accompanied by captivating features and appealing designs. Our goal is to change boring 
                        lessons into enjoyable experiences, helping to motivate students learning.</p>
                        <button type="button" class="btn btn-light btn-left" onclick="window.location.href='{{ url('/signin') }}'">Join Us!</button>
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


    

    <!-- Rating start -->
    
    <body>
    <div class="reviews-container">
        <!-- Repeatable Review Card -->
        @for ($i = 0; $i < 3; $i++)
        <div class="review-card">
            <img src="https://via.placeholder.com/50" alt="User">
            <div class="name">Aliyyah</div>
            <div class="stars">⭐⭐⭐⭐☆ 4/5</div>
            <div class="review-text">
                With this website, my children finally can study without having to use Y**tube as entertainment.
            </div>
        </div>
        @endfor
    </div>
</body>

    <!-- Rating end -->


    <!-- Main End -->
     
    <!-- Footer Start -->

     @include('Header_Footer.footer')
     
    <!-- Footer End -->
</body>
</html>