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

    <!-- <div class="container">
    
    <div class="quiz-container">
        <div class="quiz-header">
            <h5>Question x of 8</h5>
        </div>
        <div class="quiz-body">
            <h6>Lorem ipsum dolor sit amet?</h6>
            <form action="#" method="POST">
                <ul class="quiz-options">
                    <li>
                        <input type="radio" name="answer" id="option1" value="1" required>
                        <label for="option1">Lorem ipsum dolor</label>
                    </li>
                    <li>
                        <input type="radio" name="answer" id="option2" value="2">
                        <label for="option2">Lorem ipsum dolor</label>
                    </li>
                    <li>
                        <input type="radio" name="answer" id="option3" value="3">
                        <label for="option3">Lorem ipsum dolor</label>
                    </li>
                    <li>
                        <input type="radio" name="answer" id="option4" value="4">
                        <label for="option4">Lorem ipsum dolor</label>
                    </li>
                </ul>
                <button type="submit" class="btn">Next question →</button>
            </form>
        </div>
    </div>
    </div> -->

    <div class="container">
        <div class="header">
            <a href="#" class="">Language / Unit 1: lorem loreman</a>
            <span></span>
        </div>
        <div class="progress-bar">
            <span>🔊</span>
            <span>📜</span>
            <span>💬</span>
            <span>📄</span>
            <span>📜</span>
            <span>🔊</span>
            <span>📄</span>
        </div>
        <div class="question-section">
            <p class="question-title">Question x of 8</p>
            <p class="question">Lorem ipsum dolor sit amet?</p>
            <p class="instructions">Choose one right answer!</p>
            <ul class="options">
                 <li>Lorem ipsum dolor</li>
                <li>Lorem ipsum dolor</li>
                <li>Lorem ipsum dolor</li>
                <li>Lorem ipsum dolor</li>
                <li>
            </ul>
            <a href="#" class="next-button">Next question →</a>
        </div>
    </div>

    <!-- Main End -->
     
    <!-- Footer Start -->

     @include('Header_Footer.footer')
     
    <!-- Footer End -->
</body>
</html>