</head>

<?php
include "./layouts/headers.php";

include_once "./config/dbconfig.php";

if (isset($_GET['edit_id'])) {
    $sql_query = "SELECT * FROM products WHERE id=" . $_GET['edit_id'];
    $result_set = mysqli_query($con, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
}
if (isset($_POST['btn-update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql_query = "UPDATE products SET `name` = '$name', `price` = '$price', `description` = '$description' WHERE id = " . $_GET['edit_id'];
    if (mysqli_query($con, $sql_query)) {
?>
        <script type="text/javascript">
            alert('Success to update product');
            window.location.href = 'product_index.php';
        </script>
    <?php
    } else {
    ?>
        <script type="text/javascript">
            alert('Error while updating product');
        </script>
<?php
    }
}
if (isset($_POST['btn-cancel'])) {
    header("Location: indexproducts.php");
}
?>

<body>
    <?php include "./layouts/navbar.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div>
            <h3>PHP CRUD Functions | Edit Product</h3>
        </div>
        <div class="container mt-5">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" autocomplete="off" id="name" name="name" placeholder="Input product name here" value="<?php echo $fetched_row['name']; ?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product price</label>
                    <input type="text" class="form-control" autocomplete="off" id="price" name="price" placeholder="Input product price here" value="<?php echo $fetched_row['price']; ?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product price</label>
                    <textarea class="form-control" autocomplete="off" name="description" id="description" cols="30" rows="5" placeholder="Input product description here"><?php echo $fetched_row['description']; ?></textarea>
                </div>
                <div class="mb-3">
                    <button class="btn btn-md btn-primary" type="submit" name="btn-update">Update Product</button>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
include "./layouts/footer.php";
?>