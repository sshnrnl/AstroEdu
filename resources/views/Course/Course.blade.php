<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
    <link rel="stylesheet" href="{{ asset('Course/Course.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Navbar -->
    @include('Header_Footer.header')
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="course_container-fluid py-5 px-5">
    <h2 class="text-center">Courses</h2>

    <!-- Filter buttons -->
    <div class=" button-container d-flex justify-content-center mb-4">
        <a href="" class="custom-btn">All</a>
        <a href="" class="custom-btn">Math</a>
        <a href="" class="custom-btn">Science</a>
        <a href="" class="custom-btn">English</a>
    </div>

    <!-- Courses grid -->
     <div class="row">
        @for ($i = 0; $i < 8; $i++)
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <img src="{{ asset('Course/Learn1.png') }}" class="card-img-top" alt="Course image">
                <div class="card-body">
                    <h5 class="card-title">Tipe Mapel</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in tempor arcu. Suspendisse mattis condimentum purus blandit vehicula.
                    </p>
                </div>
                <div class="d-flex justify-content-around">
                  <h4>Math</h4>
                  <h4> 1 hr 20 min</h4>
                  <a href="" class="custom-button mb-3">Details</a>

                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

    <!-- Main End -->
     
    <!-- Footer Start -->
     @include('Header_Footer.footer')
    <!-- Footer End -->
</body>
</html>