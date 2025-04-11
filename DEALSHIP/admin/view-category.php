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
        <div class="col-lg-10">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">View Categories</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-light">
                            <tr>
                                <th>S.N.</th>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        // Replace this loop with: while($data = mysqli_fetch_assoc($query)) {...}
                        foreach ($categories as $index => $data) {
                        ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo htmlspecialchars($data['category']); ?></td>
                                <td>
                                    <a href="edit-category.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success me-1">Edit</a>
                                    <a href="delete-category.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>