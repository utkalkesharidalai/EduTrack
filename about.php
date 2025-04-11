<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .about-section {
            padding: 80px 0;
        }

        .mission-vision {
            background-color: #f8f9fa;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .mission-vision h3 {
            color: #007bff;
            margin-bottom: 20px;
        }

        .team-section {
            padding-top: 60px;
        }

        .team-member {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .team-member h5 {
            margin-bottom: 5px;
        }

        .team-member p {
            font-size: 0.9rem;
            color: #6c757d;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm" style="background-color: #0c111a;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.html">
                <img src="partials/images/h_logo.png" alt="EduTrack Logo" height="40" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link " href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="adminlogin.php"><i class="fas fa-user-shield me-2"></i>Admin</a></li>
                            <li><a class="dropdown-item" href="slogin.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="tlogin.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-plus me-1"></i> Register
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="sregister.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="html/tregister.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="about-section py-5">
        <div class="container">
            <h2 class="text-center mb-4">About EduTrack</h2>
            <p class="lead text-center mb-5">Your partner in efficient educational management.</p>

            <div class="mission-vision">
                <div class="row">
                    <div class="col-md-6">
                        <h3><i class="fas fa-bullseye me-2"></i> Our Mission</h3>
                        <p>To revolutionize the student data management process by automating the Proctor Form
                            system at the institute, streamlining the workflow for faculty and students . By enhancing
                            organization and data management, we aim to create a seamless and efficient process that reduces
                            manual effort, ensures consistent and accurate data, and improves accessibility. Our focus is to
                            provide reliable documentation for monitoring and maintaining the integrity.</p>
                    </div>
                    <div class="col-md-6">
                        <h3><i class="fas fa-eye me-2"></i> Our Vision</h3>
                        <p>To be the leading provider of innovative and user-friendly educational management solutions,
                            empowering institutions to enhance their operational efficiency, improve communication, and
                            foster a more productive learning environment.</p>
                    </div>
                </div>
            </div>

            <div class="team-section">
                <h3 class="text-center mb-4">Our Dedicated Team</h3>
                <p class="text-center mb-5">Meet the passionate individuals behind EduTrack.</p>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="team-member">
                            <img src="https://via.placeholder.com/150" alt="Team Member 1">
                            <h5>John Doe</h5>
                            <p class="mb-1">Founder & CEO</p>
                            <p class="text-muted small">Passionate about education and technology.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member">
                            <img src="https://via.placeholder.com/150" alt="Team Member 2">
                            <h5>Jane Smith</h5>
                            <p class="mb-1">Lead Developer</p>
                            <p class="text-muted small">Dedicated to creating robust and scalable solutions.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member">
                            <img src="https://via.placeholder.com/150" alt="Team Member 3">
                            <h5>Peter Jones</h5>
                            <p class="mb-1">Marketing Manager</p>
                            <p class="text-muted small">Focused on bringing EduTrack to educational institutions.</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="team-member">
                            <img src="https://via.placeholder.com/150" alt="Team Member 3">
                            <h5>Peter Jones</h5>
                            <p class="mb-1">Marketing Manager</p>
                            <p class="text-muted small">Focused on bringing EduTrack to educational institutions.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h3>Our Values</h3>
                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Innovation: We strive to bring cutting-edge solutions to the education sector.</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Efficiency: We are committed to streamlining processes and saving valuable time.</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Reliability: We ensure our platform is stable, secure, and dependable.</li>
                    <li class="mb-2"><i class="fas fa-check-circle text-success me-2"></i> Collaboration: We believe in working closely with our users to meet their needs.</li>
                </ul>
            </div>
        </div>
    </div>

  <!-- Footer -->
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