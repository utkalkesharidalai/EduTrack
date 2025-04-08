<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Register </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="../css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body style="background: linear-gradient(to right, #f8fdff, #d7f3f7);">
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
            <div class="col-lg-10">
                <div class="card shadow-lg">
                    <div class="card-header text-center bg-primary text-white">
                        <h3><i class="fas fa-user-graduate me-2"></i>Student Registration</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter Your Name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter Your Email" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="reg_number" class="form-label">Registration Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="reg_number" name="reg_number" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Contact Number <span
                                            class="text-danger">*</span></label>
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="father_name" class="form-label">Father's Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="father_name" name="father_name" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="father_phone" class="form-label">Father's Contact Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="father_phone" name="father_phone" class="form-control"
                                        placeholder="+91" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="mother_name" class="form-label">Mother's Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="mother_name" name="mother_name" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="mother_phone" class="form-label">Mother's Contact Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="mother_phone" name="mother_phone" class="form-control"
                                        placeholder="+91" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth <span
                                            class="text-danger">*</span></label>
                                    <input type="date" id="dob" name="dob" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="a_year" class="form-label">Admission Year <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="a_year" name="a_year" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="branch" class="form-label">Branch <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="branch" name="branch" required>
                                        <option value="">Select branch</option>
                                        <option>IT</option>
                                        <option>ETC</option>
                                        <option>BC</option>
                                        <option>MC</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="gender" class="form-label">Gender <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="gender" name="gender" required>
                                        <option value="">Select gender</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="blood" class="form-label">Blood Group <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="blood" name="blood" required>
                                        <option value="">Select blood group</option>
                                        <option>A+ve</option>
                                        <option>A-ve</option>
                                        <option>B+ve</option>
                                        <option>B-ve</option>
                                        <option>AB+ve</option>
                                        <option>AB-ve</option>
                                        <option>O+ve</option>
                                        <option>O-ve</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="aadhar" class="form-label">Aadhar Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="aadhar" name="aadhar" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="present_address" class="form-label">Present Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="present_address" name="present_address" class="form-control"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label for="permanent_address" class="form-label">Permanent Address <span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="permanent_address" name="permanent_address"
                                        class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="category" class="form-label">Category <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="">Select category</option>
                                        <option>General</option>
                                        <option>OBC</option>
                                        <option>SC</option>
                                        <option>ST</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="semester" class="form-label">Current Semester <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" id="semester" name="semester" required>
                                        <option value="">Select semester</option>
                                        <option>1st</option>
                                        <option>2nd</option>
                                        <option>3rd</option>
                                        <option>4th</option>
                                        <option>5th</option>
                                        <option>6th</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="year" class="form-label">Year <span class="text-danger">*</span></label>
                                    <select class="form-select" id="year" name="year" required>
                                        <option value="">Select year</option>
                                        <option>1st</option>
                                        <option>2nd</option>
                                        <option>3rd</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="password" class="form-label">New Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        autocomplete="off" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="confirm_password" class="form-label">Confirm Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" id="confirm_password" name="confirm_password"
                                        class="form-control" autocomplete="off" required>
                                </div>

                                <div class="text-center mt-4">
                                    <button type="reset" class="btn btn-outline-secondary me-3">
                                        <i class="fas fa-rotate-left me-1"></i> Reset
                                    </button>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-paper-plane me-1"></i> Submit
                                    </button>
                                </div>

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