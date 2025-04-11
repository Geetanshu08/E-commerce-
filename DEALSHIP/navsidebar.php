<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Navbar + Sidebar</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    /* Navbar Styling */
    .navbar-custom {
      background-color: #0d1b2a; /* Dark Navy */
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    .navbar-custom .navbar-brand,
    .navbar-custom .nav-link {
      color: #ffffff;
      font-weight: 500;
    }

    .navbar-custom .nav-link:hover {
      color: #adb5bd; /* Light grayish blue */
    }

    /* Sidebar Styling */
    .sidebar {
      width: 250px;
      height: 100vh;
      background-color: #e0e1dd; /* Light Gray */
      padding: 1.5rem 1rem;
    }

    .sidebar a {
      display: block;
      color: #000;
      text-decoration: none;
      margin-bottom: 1rem;
      font-weight: 500;
    }

    .sidebar a:hover {
      background-color: #d3d4cf;
      padding-left: 8px;
      border-radius: 5px;
    }

    /* Content area */
    .main-content {
      flex: 1;
      padding: 2rem;
      background-color: #f8f9fa;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DEALSHIP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>       

  <!-- Sidebar + Content Layout -->
  <div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar">
      <a href="">Dashboard</a>
      <a href="#">Login</a>
      <a href="#">Products</a>
      <a href="#">View Category</a>
      <a href="#">Settings</a>
    </div>

   

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
