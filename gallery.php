<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS (only include once) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Your custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
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
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="../gallery.php">Gallery</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="partials/login/adminlogin.php"><i class="fas fa-user-shield me-2"></i>Admin</a></li>
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

    <!-- Main Content -->
    <main class="container my-5">
        <h2 class="text-center mb-4 fw-bold"
            style="font-size: 2.5rem; color: #130c0c; text-transform: uppercase; letter-spacing: 2px;">
            <i class="fas fa-images me-2"></i>Gallery
        </h2>

        <!-- Gallery Grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
            <!-- Gallery Item 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 1">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 2">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 3">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 4">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 5">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 6">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 7">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0 overflow-hidden">
                    <img src="../src/images/g9.jpg" class="card-img-top img-fluid gallery-img" alt="Gallery Image 8">
                    <div class="card-body text-center">
                        <p class="card-text">Image Description</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

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


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Custom JS if needed -->

</body>

</html>