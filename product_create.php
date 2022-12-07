</head>

<?php
include "./layouts/headers.php";

include_once "./config/dbconfig.php";

if (isset($_POST['btn-save'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];

    $sql_query = "INSERT INTO products(`name`, `price`, `description`, `category`) VALUES('" . $name . "','" . $price . "','" . $description . "', '" . $category . "')";
    if (mysqli_query($con, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Success to create new product');
            window.location.href = 'product_index.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Error while creating new product');
        </script>
<?php
    }
}
?>

<body>
    <?php include "./layouts/navbar.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div>
            <h3>PHP CRUD Functions | Create PRoduct</h3>
        </div>
        <div class="container mt-5">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" autocomplete="off" id="name" name="name" placeholder="Input product name here">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="text" class="form-control" autocomplete="off" id="price" name="price" placeholder="Input product price here">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="" disabled selected>CHOOSE ONE</option>
                        <option value="SMARTPHONE">SMARTPHONE</option>
                        <option value="LAPTOP">LAPTOP</option>
                        <option value="MONITOR">MONITOR</option>
                        <option value="COMPUTER">COMPUTER</option>
                        <option value="OTHER">OTHER</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Description</label>
                    <textarea class="form-control" autocomplete="off" name="description" id="description" cols="30" rows="5" placeholder="Input product description here"></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-md btn-primary" type="submit" name="btn-save">Create Product</button>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
include "./layouts/footer.php";
?>