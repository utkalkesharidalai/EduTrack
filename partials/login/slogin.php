
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login </title>
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
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
        rel="stylesheet" />
</head>

<body>
 <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark  sticky-top shadow-sm" style="background-color: #0c111a;">
        <div class="container">    
                <a class="navbar-brand fw-bold" href="index.html">
                <img src="src/images/h_logo.png" alt="EduTrack Logo" height="40" class="me-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="..//about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="..//gallery.php">Gallery</a></li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown me-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-sign-in-alt me-1"></i> Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="..//partials/login/adminlogin.php"><i class="fas fa-user-shield me-2"></i>Admin</a></li>
                            <li><a class="dropdown-item" href="..//partials/login/login.php"><i class="fas fa-user-graduate me-2"></i>Student</a></li>
                            <li><a class="dropdown-item" href="..//partials/login/tlogin.php"><i class="fas fa-chalkboard-teacher me-2"></i>Teacher</a></li>
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
                <img src="../src/images/h_logo.png" alt="Logo" height="50" class="mb-2">
                <h4 class="fw-bold">Student Login</h4>
            </div>

            <form action="slogin.php" method="POST">
                <!-- Email with icon -->
                <div class="mb-3">
                    <label for="email" class="form-label">Registion No</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="ri-id-card-line"></i></span>
                        <input type="email" class="form-control" id="reg" name="reg" required
                            placeholder="Registion No">
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
        
        <?php
(include'partials/scripts.php');      
(include'partials/footer.php');       
?>