<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('Header_Footer/Header_Footer.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <!-- Footer -->
    <footer>
    <div class="container-fluid d-flex justify-content-around p-5" style="background-color: #c6d6ff">
      <div class="d-flex flex-column align-items-center">
        <img class="footer_logo" src="{{ asset('Header_Footer/Astronot.png') }}" alt="">
      </div>
  
      <div class="">
        <h3 class="text-dark fw-bold">Site map</h3>
  
        <div class="d-flex m-0 p-0">
          <div class="container d-flex flex-column m-0 p-0">
            <a href="" class="footer_text text-decoration-none text-dark">Store</a>
            <a href="" class="footer_text text-decoration-none text-dark">Profile</a>
            <a href="" class="footer_text text-decoration-none text-dark">Home</a>
          </div>
        </div>
  
      </div>
  
      <div class="">
        <h3 class="text-dark fw-bold" style="padding-left: 30px;">Follow kami di:</h3>
        <ul class="d-flex gap-4" style="list-style-type: none;">
          <img src="{{ asset('Header_Footer/youtube.png') }}" width="50" height="40" alt="">
          <img src="{{ asset('Header_Footer/x.png') }}" width="70" height="40" alt="">
          <img src="{{ asset('Header_Footer/Facebook Logo.png') }}" width="50" height="40" alt="">
          <img src="{{ asset('Header_Footer/Instagram Logo.png') }}" width="50" height="40" alt="">
        </ul>
      </div>
    </div>
  
  
    <div class="d-flex justify-content-center p-2" style="background: #152244">
      <span class="text-light">All rights reserved. &copy; 2024 AstroEdu.ID</span>
    </div>
  
  </footer>

</body>
</html>