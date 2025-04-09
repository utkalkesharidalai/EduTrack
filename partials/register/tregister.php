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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>




