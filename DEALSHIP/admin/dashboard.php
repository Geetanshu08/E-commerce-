<?php
include "head.php" ;
?>
<body>
  
  <!-- Navbar -->
 <?php
include "nav.php" ;
 ?>
  <!-- Sidebar + Content Layout -->
  <?php
include "sidebar.php";
  ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    
    
    
    <div class="container py-4">
      <!-- Header -->
      <div class="text-center mb-5">
        <h2>Dashboard</h2>
        <!-- <p class="text-muted">Overview of your store's performance</p> -->
      </div>
      
      <!-- Stats Cards -->
      <div class="row g-4">
        <div class="col-md-3">
          <div class="card bg-light text-dark p-3 shadow-sm text-center">
            <h5>Total Orders</h5>
            <h3>1,245</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light text-dark p-3 shadow-sm text-center">
            <h5>Total Revenue</h5>
            <h3>₹45,320</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light text-dark p-3 shadow-sm text-center">
            <h5>Products</h5>
            <h3>128</h3>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card bg-light text-dark p-3 shadow-sm text-center">
            <h5>Customers</h5>
            <h3>980</h3>
          </div>
        </div>
      </div>
      
      <!-- Recent Orders -->
      <div class="mt-5">
        <h4>Recent Orders</h4>
        <table class="table table-striped table-hover mt-3">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Customer</th>
              <th>Product</th>
              <th>Amount</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1001</td>
              <td>Priya Sharma</td>
              <td>Lipstick Set</td>
              <td>₹25</td>
              <td><span class="badge bg-success">Delivered</span></td>
            </tr>
            <tr>
              <td>1002</td>
              <td>Riya Kapoor</td>
              <td>Facial Kit</td>
              <td>₹40</td>
              <td><span class="badge bg-warning">Pending</span></td>
            </tr>
            <tr>
              <td>1003</td>
              <td>Shruti Mehta</td>
              <td>Hair Serum</td>
              <td>₹15</td>
              <td><span class="badge bg-danger">Cancelled</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>
  