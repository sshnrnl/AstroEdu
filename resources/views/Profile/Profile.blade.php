<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ asset('Profile/Profile.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
    <div class="content">
        <div class="container">
            <div class="row">
              <div class="col-8"> 
                <h2>Edit Profile</h2><br>

                <div class="mb-3">
                    <label for="FullName" class="form-label">Full Name</label>
                    <input id="fullnameInput" class="form-control" type="text" placeholder="FullName" aria-label="default input" required>
                </div>

                <div class="row">
                  <div class="col-6">
                    <div class="mb-3">
                      <label for="SchoolName" class="form-label">School Name</label>
                      <input id="schoolnameInput" class="form-control" type="text" placeholder="SchoolName" aria-label="default input" required>
                    </div>
                  </div>

                  <div class="col-6">
                    <div class="mb-3">
                      <label for="Grade" class="form-label">Grade Level</label>
                      <input id="gradeInput" class="form-control" type="text" placeholder="Grade" aria-label="default input" required>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                    <label for="Email" class="form-label">Email</label>
                    <input id="emailInput" class="form-control" type="email" placeholder="Email" aria-label="default input" required>
                </div>

                <div class="mb-3">
                    <label for="Number" class="form-label">Phone Number</label>
                    <input id="numberInput" class="form-control" type="text" placeholder="Number" aria-label="default input" required>
                </div>

                <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ url('/') }}'">Cancel</button>
                <button type="button" class="btn btn-light" onclick="window.location.href='{{ url('/') }}'">Save</button>

              </div>

                
              <div class="col-4">
              <div class="profile-card">
                <div class="profile-image-container">
                  <img src="{{ asset('Profile/profile.jpeg') }}" alt="Profile Image" class="profile-image">
                  <div class="edit-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil" viewBox="0 0 16 16">
                      <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325"/>
                    </svg>
                  </div>
                </div>
                <div class="profile-name">
                  <p>Jessica Wong</p>
                </div>
              </div>
              
              </div>

            </div>
        </div>
    </div>
</body>
</html>