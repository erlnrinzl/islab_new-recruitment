<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi IS Part-Time Lab Assistant</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ url('/css/form.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0096D9;height: 130px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.50);">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img class="logo" src="{{ url('/image/logo-SIS-PNG-white.png') }}" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav px-5">
          <a class="nav-link" aria-current="page" href="#section-1">IS Case Study Club Member</a>
          <a class="nav-link text-white" aria-current="page" href="#section-2">IS Part-Time Lab Assistant</a>
          <a class="nav-link" aria-current="page" href="#section-3">IS Project Member</a>
        </div>
        <div class="ms-auto">
          <a class="nav-link signin text-white" aria-current="page" href="#">
            Sign out
            <img class="icon-signin ms-2" src="/image/icon-signin.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container mt-5 pb-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-header">
            <h3 class="card-title px-2 py-3">IS Part-Time Lab Assistant Registration Form</h3>
            <p class="card-text px-2">Please fill in the necessary info below to register.</p>
          </div>
          <div class="card-body px-4 py-3">
            <form>
              <div class="mb-3">
                <label for="studentId" class="form-label">Student ID:</label>
                <input type="text" class="form-control" id="studentId" value="2602162453" readonly>
              </div>
              <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" value="Brayen Fredgin Cahyadi" readonly>
              </div> 
              <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" value="brayen.cahyadi@binus.ac.id" readonly>
              </div>
              <div class="mb-3">
                <label for="region" class="form-label">Region:</label>
                <input type="text" class="form-control" id="region" value="Bekasi" readonly>
              </div>
              <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan:</label>
                <input type="text" class="form-control" id="jurusan" value="Business Information Technology" readonly>
              </div>
              <div class="mb-3">
                <label for="period" class="form-label">Period:</label>
                <input type="text" class="form-control" id="period" value="2023/2024 Even Semester" readonly>
              </div>
              <div class="mb-3">
                <label for="role" class="form-label">Role:</label>
                <input type="text" class="form-control" id="role" value="IS Part-Time Lab Assistant" readonly>
              </div>
              <div class="mb-3">
                <label for="courseOption" class="form-label">Course Option <span class="text-danger">*</span>:</label>
                <select class="form-select" id="courseOption" required>
                  <option value=""disabled selected>Select a course</option>
                  <option value="streaming 1">Streaming 1</option>
                  <option value="streaming 2">Streaming 2</option>
                  <option value="streaming 3">Streaming 3</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number for WhatsApp <span class="text-danger">*</span>:</label>
                <input type="tel" class="form-control" id="phoneNumber" required>
              </div>
              <div class="mb-3">
                <label for="currentAddress" class="form-label">Current Address <span class="text-danger">*</span>:</label>
                <textarea class="form-control" id="currentAddress" rows="3" required></textarea>
              </div>
              <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Register</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-dark mb-0">
    <div class="col-md-auto mx-3">
      <a href="#" class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1">
        SCHOOL OF INFORMATION SYSTEMS
      </a>
    </div>
    <div class="col-md-auto ms-auto mx-3">
      <span class="text-white text-decoration-none">© BINUS Higher Education. All rights reserved.</span>
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-Nwn8UR0l8MbsiQUpyCn7v5z9fY2l9b6sM3gPw/6arxX9S3SMFVZOzLyukHPQl+Hr" crossorigin="anonymous"></script>
</body>
</html>
