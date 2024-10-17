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
     
    <!-- Footer Start -->
     @include('Header_Footer.footer')
    <!-- Footer End -->
</body>
</html>