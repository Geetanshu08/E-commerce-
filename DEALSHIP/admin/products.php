<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background: #f8f9fa;">
    <div class="container">
        <h2 class="text-center mb-4">Product Management</h2>
        <div class="card p-4 shadow-lg">
            <form id="productForm">
                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" id="productName" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="productPrice" class="form-label">Product Price</label>
                    <input type="number" id="productPrice" class="form-control" required>
                </div>
                <button type="button" class="btn btn-success w-100" onclick="addProduct()">Add Product</button>
            </form>
        </div>
        <h3 class="text-center mt-4">Product List</h3>
        <ul id="productList" class="list-group mt-3"></ul>
    </div>
    <script>
        function addProduct() {
            let name = document.getElementById("productName").value;
            let price = document.getElementById("productPrice").value;
            if (name && price) {
                let li = document.createElement("li");
                li.className = "list-group-item d-flex justify-content-between align-items-center";
                li.innerHTML = `${name} - $${price} <button class='btn btn-danger btn-sm' onclick='removeProduct(this)'>Delete</button>`;
                document.getElementById("productList").appendChild(li);
                document.getElementById("productForm").reset();
            }
        }
        function removeProduct(button) {
            button.parentElement.remove();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
