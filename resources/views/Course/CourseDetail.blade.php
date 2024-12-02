<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <link rel="stylesheet" href="{{ asset('Course/CourseDetail.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Navbar -->
    @include('Header_Footer.header')
    <!-- Navbar End -->
    <div class="header">
        <h1>Exploring the Wonders of Science: From Atoms to Ecosystems</h1>
    </div>
    <div class="content">
        <div class="video-placeholder">
            <video autoplay muted controls loop>
                <source src="{{ asset('AboutUs/Vid.mp4') }}" type="video/mp4">
        </div>

        <div class="about-section">
            <h2 class="section-title">About this course</h2>
            <p>
                Unlock the secrets of the universe with "Exploring the Wonders of Science: From Atoms to Ecosystems," a comprehensive course designed for elementary school students. This course takes young learners on an exciting journey through the fascinating world of science. From the invisible building blocks of matter to the breathtaking complexity of ecosystems, students will gain a deeper understanding of the natural world and how everything is interconnected.
            </p>
            <p>
                Through vibrant video lessons, students will explore a variety of topics, including the structure of atoms, the states of matter, the water cycle, food chains, and the solar system. Each concept is explained in a simple, easy-to-understand way, supported by real-life examples and captivating visuals that bring science to life.
            </p>
        </div>

        <div class="learning-section">
            <h2 class="section-title">What You'll Learn</h2>
            <ul>
                <li>Understand the basic needs of plants, animals, and humans.</li>
                <li>Discover the water cycle and its role in life.</li>
                <li>Learn about the solar system and Earth's place in it.</li>
                <li>Dive into ecosystems and food chains.</li>
                <li>Examine the characteristics of living and non-living things.</li>
                <li>Identify the parts of plants and animals.</li>
            </ul>
        </div>

        <div class="instructor-section">
            <h2 class="section-title">Instructor</h2>
            <div class="instructor">
                <img src="{{ asset('Course/Learn1.png') }}" alt="Noah Benjamin">
                <div class="instructor-details">
                    <h3>Noah Benjamin</h3>
                    <p>Science Teacher | Elementary Education</p>
                    <p>
                        Noah Benjamin is a passionate and dedicated Science teacher committed to sparking curiosity and a love for science in elementary school students. With a degree in Environmental Science and several years of teaching experience, Noah creates engaging, hands-on lessons that bring the natural world to life. His goal is to help students understand the world around them and develop critical thinking skills through real-world applications.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main End -->
     
    <!-- Footer Start -->
     @include('Header_Footer.footer')
    <!-- Footer End -->
</body>
</html>