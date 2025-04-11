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

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Add Subcategory</h4>
                </div>
                <div class="card-body">
                    <form action="submit-subcategory.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="subcategory" class="form-label">Subcategory Name</label>
                            <input type="text" id="subcategory" name="subcategory" class="form-control" placeholder="Enter subcategory name" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category" class="form-select" required>
                                <option value="">Select Category</option>
                                <?php
                                // Example static values — replace with dynamic DB values if needed
                                $categories = ['Electronics', 'Fashion', 'Books'];
                                foreach ($categories as $cat) {
                                    echo "<option value='$cat'>$cat</option>";
                                }
                                ?>
                            </select>
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

<!-- Bootstrap JS (optional for interactive components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
