<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200..1000&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
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
                    <li class="nav-item"><a class="nav-link  " href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../gallery.php">Gallery</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="partials/login/adminlogin.php"><i class="fas fa-user-shield me-2 active"></i>Admin</a></li>
                            <li><a class="dropdown-item" href="partials/login/slogin.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="partials/login/tlogin.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="partials/register/sregister.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="partials/register/tregister.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4 login-card" style="width: 100%; max-width: 400px;">

            <div class="text-center mb-4">
                <!-- Logo -->
                <img src="partials/images/h_logo.png" alt="Logo" height="50" class="mb-2">
                <h4 class="fw-bold">Admin Login</h4>
            </div>

            <form action="adminlogin.php" method="POST">
                <!-- Email with icon -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" required
                            placeholder="Enter email">
                    </div>
                </div>

                <!-- Password with icon -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" required
                            placeholder="Enter password">
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-sign-in-alt me-1"></i> Login
                    </button>
                </div>
            </form>

        </div>
    </div>
    <footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <img src="partials/images/h_logo.png" alt="EduTrack Logo" height="40" class="mb-3">
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
                    <li class="mb-2"><a href="index.php" class="text-white text-decoration-none">Home</a></li>
                    <li class="mb-2"><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
                    <li class="mb-2"><a href="gallery.php" class="text-white text-decoration-none">Gallery</a></li>
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>