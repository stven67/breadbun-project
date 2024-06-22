<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        .message {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }

        .add-product-form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin Dashboard</a>
</nav>

<!-- Main Content -->
<div class="container mt-4">
    <!-- Messages -->
    <div class="message">
    </div>

    <!-- Add Product Form -->
    <div class="card mb-4 add-product-form">
        <div class="card-header">
            Add New Product
        </div>
        <div class="card-body">
            <form id="addProductForm" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="productName">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                </div>
                <div class="form-group">
                    <label for="productPrice">Product Price</label>
                    <input type="number" class="form-control" id="productPrice" name="productPrice" min="0" required>
                </div>
                <div class="form-group">
                    <label for="productStock">Product Stock</label>
                    <input type="number" class="form-control" id="productStock" name="productStock" min="0" required>
                </div>
                <div class="form-group">
                    <input type="file" class="form-control-file" id="productImage" name="productImage" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary" id="addProductBtn">Add Product</button>
            </form>
        </div>
    </div>

    <!-- Product List -->
    <div class="card">
        <div class="card-header">
            Product List
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="productList">
                        <!-- Product items will be appended here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS, jQuery, and Custom JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript for handling form submission and AJAX requests
    $(document).ready(function() {
        // Add Product Form Submission
        $('#addProductForm').submit(function(event) {
            event.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: 'process.php', // Adjust URL according to your server setup
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    $('#productList').html(response); // Refresh product list on success
                    $('#addProductForm')[0].reset(); // Reset form fields
                    $('.message').html('<div class="alert alert-success alert-dismissible fade show" role="alert">Product added successfully<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    $('.message').html('<div class="alert alert-danger alert-dismissible fade show" role="alert">Failed to add product<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                }
            });
        });

        // Fetch initial product list
        fetchProductList();

        // Function to fetch and display product list
        function fetchProductList() {
            $.ajax({
                url: 'fetch_products.php', // Replace with your PHP file to fetch products
                type: 'GET',
                success: function(response) {
                    $('#productList').html(response);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });
</script>

</body>
</html>

