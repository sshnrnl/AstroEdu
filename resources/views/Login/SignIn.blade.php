<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="{{ asset('Login/SignIn.css') }}">
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
                <h2>Login</h2>
                <p>
                    Don't have account? <a href="{{ route('signup') }}">Sign Up</a>
                </p>

                @if(session('success'))
                    <p>{{ session('success') }}</p>
                @endif

                <form method="POST" action="{{ route('signin') }}">
                    @csrf
                    <!-- <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                    @error('email') <p>{{ $message }}</p> @enderror

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                    @error('password') <p>{{ $message }}</p> @enderror -->

                    <div class="mb-3">
                      <label for="emailInput" class="form-label">Email</label>
                      <input 
                          type="email" 
                          name="email" 
                          id="emailInput" 
                          class="form-control" 
                          placeholder="Email" 
                          aria-label="Email" 
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
                          aria-label="Password" 
                          required>
                      @error('password')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                  </div>

                    <button type="submit" class="btn btn-primary">Signin</button>
                </form>

                <script>
                function validateAndRedirect() {
                    const email = document.getElementById('emailInput').value;
                    const password = document.getElementById('passwordInput').value;

                    if (email && password) {
                        window.location.href = '{{ url("/learn") }}';
                    } else {
                        alert('Please fill in all the fields.');
                    }
                }
                </script>

                <p>Or Sign in With</p>
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