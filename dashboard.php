<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Admin Dashboard</title>
  <link rel="icon" href="../src/images/admin.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<style>
    body.dark {
      background-color: #1e1e2f !important;
      color: #f8f9fa !important;
    }

    body.dark .bg-white {
      background-color: #2c2c3e !important;
    }

    body.dark .nav-link {
      color: #f8f9fa !important;
    }

    body.dark .card {
      background-color: #2c2c3e;
      color: #fff;
    }
  </style>
</head>

<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top">
    <div class="container-fluid">
      <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar">
        <i class="bx bx-menu fs-4"></i>
      </button>
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="../src/images/admin.png" width="30" class="me-2"> Admin Panel
      </a>
      <form class="d-none d-md-flex w-50 mx-auto">
        <input type="search" class="form-control" placeholder="Search..." />
      </form>
      <div class="d-flex align-items-center gap-3">
        <button class="btn btn-sm btn-outline-dark" id="themeToggle" title="Toggle Dark/Light">
          <i class="bx bx-moon"></i>
        </button>
        <i class="bx bx-bell fs-5"></i>
        <img src="images/profile.jpg" class="rounded-circle" width="35" />
      </div>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="offcanvas-lg offcanvas-start bg-white border-end" tabindex="-1" id="sidebar">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body px-2">
      <ul class="nav flex-column">
        <li class="nav-item mb-2">
          <a href="#" class="nav-link"><i class="bx bxs-dashboard me-2"></i>Dashboard</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" data-bs-toggle="collapse" href="#teacherMenu"><i class="bx bx-user me-2"></i>Teacher</a>
          <div class="collapse ps-3" id="teacherMenu">
            <a href="#" class="nav-link">Profile</a>
            <a href="#" class="nav-link">Activity</a>
            <a href="#" class="nav-link">Status</a>
          </div>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link" data-bs-toggle="collapse" href="#studentMenu"><i class="bx bx-group me-2"></i>Student</a>
          <div class="collapse ps-3" id="studentMenu">
            <a href="#" class="nav-link">AA</a>
            <a href="#" class="nav-link">BC</a>
            <a href="#" class="nav-link">Civil</a>
            <a href="#" class="nav-link">ETC</a>
            <a href="#" class="nav-link">Electrical</a>
            <a href="#" class="nav-link">IOT</a>
            <a href="#" class="nav-link">IT</a>
            <a href="#" class="nav-link">Math & Science</a>
            <a href="#" class="nav-link">Mechanical</a>
            <a href="#" class="nav-link">MOM</a>
            <a href="#" class="nav-link">Pharmacy</a>
          </div>
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link"><i class="bx bx-cloud-upload me-2"></i>Upload New</a>
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link"><i class="bx bx-flag me-2"></i>Notice Board</a>
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link"><i class="bx bx-medal me-2"></i>Award</a>
        </li>
        <li class="nav-item mb-2">
          <a href="#" class="nav-link"><i class="bx bx-cog me-2"></i>Settings</a>
        </li>
        <li class="nav-item mt-3">
          <a href="logout.php" class="nav-link text-danger"><i class="bx bx-log-out me-2"></i>Logout</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Main Content -->
  <main class="container-fluid mt-4 px-4">
    <div class="row g-4">
      <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h6 class="card-title">Total Users</h6>
            <h3>1,234</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h6 class="card-title">Teachers</h6>
            <h3>56</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h6 class="card-title">Students</h6>
            <h3>1,100</h3>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-3">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h6 class="card-title">Pending Tasks</h6>
            <h3>12</h3>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Bootstrap + Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const themeToggle = document.getElementById("themeToggle");
    const body = document.body;

    themeToggle.addEventListener("click", () => {
      body.classList.toggle("dark");
      const icon = themeToggle.querySelector("i");
      icon.classList.toggle("bx-moon");
      icon.classList.toggle("bx-sun");
    });
  </script>
</body>



</html>
