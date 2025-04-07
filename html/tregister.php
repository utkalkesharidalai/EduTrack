<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Register </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(135deg, #e0f7fa, #80deea); min-height: 100vh;">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm" style="background-color: #0c111a;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="">
                <img src="../src/images/h_logo.png" alt="EduTrack Logo" height="40" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link " href="../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link " href="aboutus.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sign-in-alt me-1 active"></i> Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="adminlogin.php"><i
                                        class="fas fa-user-shield me-2"></i>Admin</a></li>
                            <li><a class="dropdown-item" href="slogin.php"><i
                                        class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="tlogin.php"><i
                                        class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="sregister.php"><i
                                        class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="tregister.php"><i
                                        class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <form method="POST" action="">
                            <div class="text-center mb-4">
                                <img src="../src/images/admin.png" alt="Admin" height="60" class="mb-2">
                                <h4 class="fw-bold">Teacher Registration</h4>
                            </div>

                            <div class="mb-3">
                                <label for="branch" class="form-label">Choose your branch:</label>
                                <select id="branch" name="branch" class="form-select" required>
                                    <option value="">Select branch</option>
                                    <option value="IT">IT</option>
                                    <option value="ETC">ETC</option>
                                    <option value="BC">BC</option>
                                    <option value="MC">MC</option>
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
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <img src="../src/images/h_logo.png" alt="EduTrack Logo" height="40" class="mb-3">
                    <p class="small">Empowering educational institutions with comprehensive management solutions for the
                        digital age.</p>
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
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">About Us</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Gallery</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5 class="h6 mb-3">Services</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Student Management</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Online Exams</a></li>
                        <li class="mb-2"><a href="#" class="text-white text-decoration-none">Attendance Tracking</a>
                        </li>
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
</body>

</html>