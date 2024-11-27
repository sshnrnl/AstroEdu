<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning</title>
    <link rel="stylesheet" href="{{ asset('Community/Community.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Navbar -->
    @include('Header_Footer.header')
    <!-- Navbar End -->

    <!-- Main Start -->
    <div class="container">
        <!-- Search Bar -->
        <h1>Hello, How Can We Help You?</h1>
        <div class="search-bar">
            <input type="text" placeholder="Search for answers" />
            <button>Search</button>
        </div>

        <!-- FAQ Section -->
        <div class="faq-section">
            <h2>Frequently asked questions</h2>
            
            <!-- FAQ Items -->
            <div class="faq-item">
                <h3>Who is AstroEdu for?</h3>
                <span class="icon">&#x25BC;</span>
            </div>
            <div class="faq-item">
                <h3>Do I need to create an account to use AstroEdu?</h3>
                <span class="icon">&#x25BC;</span>
            </div>
            <div class="faq-item">
                <h3>Is AstroEdu free?</h3>
                <span class="icon">&#x25BC;</span>
            </div>
            <div class="faq-item">
                <h3>Can parents or teachers monitor students' progress?</h3>
                <span class="icon">&#x25BC;</span>
            </div>
            <div class="faq-item">
                <h3>Can I use AstroEdu offline?</h3>
                <span class="icon">&#x25BC;</span>
            </div>
            <div class="faq-item">
                <h3>How can I contact customer support?</h3>
                <span class="icon">&#x25BC;</span>
            </div>
        </div>
    </div>
    <!-- Main End -->
     
    <!-- Footer Start -->
     @include('Header_Footer.footer')
    <!-- Footer End -->
</body>
</html>