<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link rel="stylesheet" href="{{ asset('Learning/Learning.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Navbar -->
    @include('Header_Footer.header')
    <!-- Navbar End -->

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
     
    <!-- Footer Start -->
     @include('Header_Footer.footer')
    <!-- Footer End -->
</body>
</html>