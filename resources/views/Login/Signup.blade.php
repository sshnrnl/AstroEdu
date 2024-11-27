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
                    Already have account? <a href="{{ route('signin') }}">Sign In</a>
                </p>
                
                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @endif
                

                <form method="POST" action="{{ route('signup') }}">
                    @csrf
                    <!-- <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>
                    @error('name') <p>{{ $message }}</p> @enderror

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                    @error('email') <p>{{ $message }}</p> @enderror

                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                    @error('password') <p>{{ $message }}</p> @enderror

                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" required> -->

                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input 
                            type="text" 
                            name="name" 
                            id="nameInput" 
                            class="form-control" 
                            placeholder="Name" 
                            required>
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input 
                            type="email" 
                            name="email" 
                            id="emailInput" 
                            class="form-control" 
                            placeholder="Email" 
                            required>
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Password</label>
                        <input 
                            type="password" 
                            name="password" 
                            id="passwordInput" 
                            class="form-control" 
                            placeholder="Password" 
                            required>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="passwordConfirmationInput" class="form-label">Confirm Password</label>
                        <input 
                            type="password" 
                            name="password_confirmation" 
                            id="passwordConfirmationInput" 
                            class="form-control" 
                            placeholder="Confirm Password" 
                            required>
                    </div>

                    <button type="submit" class="btn btn-dark">Signup</button>
                </form>
                
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