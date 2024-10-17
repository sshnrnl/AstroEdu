<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{ asset('Login/SignUp.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- buat yg gambarnya -->
              <div class="col-5"> 
                <img src="{{ asset('Login/Home3.jpg') }}">
              </div>

                <!-- buat contentnya -->
              <div class="col-7">
                <h2>Get Sarted</h2>
                <p>
                    Already have account? <a href="{{ url('/signin') }}">Sign In</a>
                </p>
                

                <div class="mb-3">
                    <label for="Name" class="form-label">Name</label>
                    <input id="nameInput" class="form-control" type="text" placeholder="Name" aria-label="default input" required>
                </div>

                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input id="emailInput" class="form-control" type="email" placeholder="Email" aria-label="default input" required>
                </div>

                <div class="mb-3">
                    <label for="Password" class="form-label">Password</label>
                    <input id="passwordInput" class="form-control" type="password" placeholder="Password" aria-label="default input example" required>
                </div>

                <button type="button" class="btn btn-dark" onclick="validateAndRedirect()">Sign Up</button>

                <script>
                function validateAndRedirect() {
                    const text = document.getElementById('nameInput').value;
                    const email = document.getElementById('emailInput').value;
                    const password = document.getElementById('passwordInput').value;

                    if (email && password) {
                        window.location.href = '{{ url("/learn") }}';
                    } else {
                        alert('Please fill in all the fields.');
                    }
                }
                </script>

                <p>Or Sign up With</p>
                <div class="container_logo">
                    <div class="row row-cols-2">
                        <div class="col">
                        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='{{ url('#') }}'">Google</button>
                      </div>
                      <div class="col">
                        <button type="button" class="btn btn-outline-dark" onclick="window.location.href='{{ url('#') }}'">Facebook</button>
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>