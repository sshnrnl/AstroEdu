<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- Footer -->
    <footer>
    <div class="container-fluid d-flex justify-content-around p-5" style="background-color: #7e91c0">
      <div class="d-flex flex-column align-items-center">
        <img class="footer_logo" src="{{ asset('Login/Astronot.png') }}" alt="">
      </div>
  
      <div class="">
        <h3 class="text-light fw-bold">Site map</h3>
  
        <div class="d-flex m-0 p-0">
          <div class="container d-flex flex-column m-0 p-0">
            <a href="" class="footer_text text-decoration-none text-light">Store</a>
            <a href="" class="footer_text text-decoration-none text-light">Profile</a>
            <a href="" class="footer_text text-decoration-none text-light">Home</a>
          </div>
        </div>
  
      </div>
  
      <div class="">
        <h3 class="text-light fw-bold" style="padding-left: 30px;">Follow kami di:</h3>
        <ul class="d-flex gap-4" style="list-style-type: none;">
          <img src="{{ asset('Login/youtube.png') }}" width="50" height="40" alt="">
          <img src="{{ asset('Login/x.png') }}" width="70" height="40" alt="">
          <img src="{{ asset('Login/Facebook Logo.png') }}" width="50" height="40" alt="">
          <img src="{{ asset('Login/Instagram Logo.png') }}" width="50" height="40" alt="">
        </ul>
      </div>
    </div>
  
  
    <div class="d-flex justify-content-center p-2" style="background: black">
      <span class="text-light">All rights reserved. &copy; 2024 AstroEdu.ID</span>
    </div>
  
  </footer>

</body>
</html>