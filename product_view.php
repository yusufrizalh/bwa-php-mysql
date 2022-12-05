<?php
include "./layouts/headers.php";

include_once "./config/dbconfig.php";

if (isset($_GET['view_id'])) {
    $sql_query = "SELECT * FROM products WHERE id = " . $_GET['view_id'];
    $result_set = mysqli_query($con, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
}
?>

<body>
    <?php include "./layouts/navbar.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div>
            <h3>PHP CRUD Functions | Product Detail</h3>
        </div>
        <div class="container mt-5">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <td><label for="id" class="form-label">ID</label></td>
                    <td><?php echo $fetched_row["id"]; ?></td>
                </tr>
                <tr>
                    <td><label for="name" class="form-label">NAME</label></td>
                    <td><?php echo $fetched_row["name"]; ?></td>
                </tr>
                <tr>
                    <td><label for="price" class="form-label">PRICE</label></td>
                    <td><?php echo "IDR " . number_format($fetched_row["price"], 0, ",", "."); ?></td>
                </tr>
                <tr>
                    <td><label for="description" class="form-label">DESCRIPTION</label></td>
                    <td><?php echo $fetched_row["description"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

<?php
include "./layouts/footer.php";
?>