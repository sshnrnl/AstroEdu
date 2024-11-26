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
    <footer style="background-color: #02090E; color: #fff; padding: 20px 0;">
        <div class="container text-center">
            <!-- Social Media Icons -->
            <div class="mb-4">
                <a href="#" class="mx-2"><img src="{{ asset('Header_Footer/Facebook Logo.png') }}" width="40" alt="Facebook"></a>
                <a href="#" class="mx-2"><img src="{{ asset('Header_Footer/Instagram Logo.png') }}" width="40" alt="Instagram"></a>
                <a href="#" class="mx-2"><img src="{{ asset('Header_Footer/x.png') }}" width="40" alt="Twitter"></a>
                <a href="#" class="mx-2"><img src="{{ asset('Header_Footer/youtube.png') }}" width="40" alt="YouTube"></a>
            </div>
            
            <!-- Navigation Links -->
            <div class="mb-2">
                <a href="#" class="text-decoration-none text-light mx-3">Home</a>
                <a href="{{ url('/learn') }}" class="text-decoration-none text-light mx-3">Learning</a>
                <a href="{{ url('/community') }}" class="text-decoration-none text-light mx-3">Community</a>
            </div>
        </div>
  </footer>
            <div class="d-flex justify-content-center p-2" style="background: #152244;  color: #fff">
              <span>All rights reserved. &copy; 2024 AstroEdu.ID</span>
            </div>
        
  
  

</body>
</html>