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

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card shadow-lg">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Add Category</h4>
                </div>
                <div class="card-body">
                    <form action="submit-category.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category Name</label>
                            <input type="text" id="category" name="category" class="form-control" placeholder="Enter category name" required>
                            <div class="form-text">This is a product category.</div>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS CDN (for features like modals, alerts if needed) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
  </html>
  