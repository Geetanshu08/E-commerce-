<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beauty Store Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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



    body {
      background-color: #f8f9fa;
    }
    .card {
      border-radius: 15px;
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