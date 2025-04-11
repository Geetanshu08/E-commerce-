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
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0">Update Category</h4>
                </div>
                <div class="card-body">
                    <form action="update-category.php" method="post" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

                        <div class="mb-3">
                            <label for="category" class="form-label">Category Name</label>
                            <input type="text" name="category" id="category" class="form-control" 
                                   placeholder="Enter category name" 
                                   value="<?php echo htmlspecialchars($data['category']); ?>" required>
                            <div class="form-text">This is a product category</div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
