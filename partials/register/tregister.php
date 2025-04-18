<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(to right, #e0ecff, #f7faff);
      padding: 20px;
    }
    .form-container {
      max-width: 600px;
      margin: auto;
      background: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
    }
    .form-container img {
      height: 70px;
      margin-bottom: 20px;
    }
    .form-label sup {
      color: red;
    }
  </style>
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark  sticky-top shadow-sm" style="background-color: #0c111a;">
        <div class="container">
  
        <a class="navbar-brand fw-bold" href="index.html">
                <img src="partials/images/h_logo.png" alt="EduTrack Logo" height="40" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link " href="../../index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../../gallery.php">Gallery</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="../login/adminlogin.php"><i class="fas fa-user-shield me-2"></i>Admin</a></li>
                            <li><a class="dropdown-item" href="../login/slogin.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="../login/tlogin.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="sregister.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="tregister.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


  <div class="container">
    <div class="form-container">
      <form method="POST" action="">
        <div class="text-center">
          <img src="../src/images/admin.png" alt="Admin">
          <h4 class="mb-3 fw-bold">Register New Admin</h4>
        </div>

        <!-- Branch -->
                <div class="mb-3">

                <label for="branch" class="form-label">Choose your branch:</label>
                <select id="branch" name="branch" class="form-select" required>
                  
                  <option value="" disabled selected>Select your branch</option>
                 <option value="aa">Architectural Assistantship</option>
                 <option value="ame">Aircraft Maintanance Engineering</option>
                 <option value="bc">Beauty Culture</option>
                 <option value="ce">Civil Engineering</option>
                 <option value="caiot">Computer Engineering and IOT</option>
                 <option value="ee">Electrical Engineering</option>
                 <option value="etc">Electronics and Telecommunication Engineering</option>
                  <option value="IT">Information Technology</option>
                  <option value="me">Mechanial Engineering</option>

                  <
                </select>
              </div>

              <div class="mb-3">
                <label class="form-label">Name <sup>*</sup></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                  <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Email <sup>*</sup></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-phone"></i></span>
                  <input type="tel" name="phone" class="form-control" placeholder="+91" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Designation</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-briefcase"></i></span>
                  <input type="text" name="designation" class="form-control" placeholder="Enter Your Designation" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Date of Birth</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                  <input type="date" name="dob" class="form-control" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">New Password <sup>*</sup></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Confirm Password <sup>*</sup></label>
                <div class="input-group">
                  <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                </div>
              </div>

              <div class="d-flex justify-content-between">
                <button type="reset" class="btn btn-outline-secondary">
                  <i class="fas fa-rotate-left me-1"></i> Reset
                </button>
                <button type="submit" class="btn btn-primary">
                  <i class="fas fa-paper-plane me-1"></i> Submit
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="src/images/h_logo.png" alt="EduTrack Logo" height="40" class="mb-3">
                <p class="small">Empowering educational institutions with comprehensive management solutions for the digital age.</p>
                <div class="d-flex gap-3">
                    <a href="#" class="text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h5 class="h6 mb-3">Quick Links</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="..//about.php" class="text-white text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="..//gallery.php" class="text-white text-decoration-none">Gallery</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5 class="h6 mb-3">Services</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Student Management</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Online Exams</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Attendance Tracking</a></li>
                    <li class="mb-2"><a href="#" class="text-white text-decoration-none">Reporting System</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-4">
                <h5 class="h6 mb-3">Contact Us</h5>
                <ul class="list-unstyled small">
                    <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Bhubaneswar, Odisha</li>
                    <li class="mb-2"><i class="fas fa-phone me-2"></i> +91 9876543210</li>
                    <li class="mb-2"><i class="fas fa-envelope me-2"></i> info@edutrack.edu</li>
                </ul>
            </div>
        </div>
        <hr class="my-4">
        <div class="text-center small">
            <p class="mb-0">&copy; 2025 EduTrack. All rights reserved. Designed & Developed by EduTrack Team</p>
        </div>
    </div>
</footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




