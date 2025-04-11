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
        <div class="col-lg-8">

            <div class="card shadow">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0">Add Product</h4>
                </div>
                <div class="card-body">
                    <form action="submit-product.php" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <label for="p_name" class="form-label">Product Name</label>
                            <input type="text" id="p_name" name="p_name" class="form-control" placeholder="Enter product name" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price (Rs.)</label>
                            <input type="text" id="price" name="price" class="form-control" placeholder="Enter price" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter product description" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="img" class="form-label">Product Image</label>
                            <input type="file" id="img" name="img" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" name="category" class="form-select" required>
                                <option value="">Select Category</option>
                                <?php
                                // Example categories (replace with dynamic PHP if needed)
                                $categories = ['Electronics', 'Fashion', 'Home', 'Books'];
                                foreach($categories as $cat) {
                                    echo "<option value='$cat'>$cat</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Optional Subcategory (Uncomment if needed) -->
                        <!--
                        <div class="mb-3">
                            <label for="subcategory" class="form-label">Subcategory</label>
                            <select id="subcategory" name="subcategory" class="form-select">
                                <option value="">Select Subcategory</option>
                                <?php
                                // Example subcategories
                                $subcategories = ['Mobile', 'Laptop', 'Shirts', 'Novels'];
                                foreach($subcategories as $subcat) {
                                    echo "<option value='$subcat'>$subcat</option>";
                                }
                                ?>
                            </select>
                        </div>
                        -->

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS (optional for dropdowns, alerts) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
