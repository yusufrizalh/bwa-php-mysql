<script type="text/javascript">
    function view_id(id) {
        window.location.href = 'product_view.php?view_id=' + id;
    }

    function view_category(category) {
        window.location.href = 'category_view.php?view_category=' + category;
    }

    function edit_id(id) {
        window.location.href = 'product_edit.php?edit_id=' + id;

    }

    function delete_id(id) {
        if (confirm("Are you sure to delete?")) {
            window.location.href = 'product_index.php?delete_id=' + id;
        }
    }
</script>

</head>
<?php
include "../layouts/headers.php";

include_once "../config/dbconfig.php";

if (isset($_GET['delete_id'])) {
    $sql_query = "DELETE FROM products WHERE id = " . $_GET['delete_id'];
    mysqli_query($con, $sql_query);
    header("Location: $_SERVER[PHP_SELF]");
}
?>

<body>
    <?php include "../layouts/navbar_profile.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div>
            <h3>PHP CRUD Functions | All Products</h3>
        </div>
        <div>
            <a href="http://localhost/webphp/products/product_create.php" class="btn btn-md btn-primary">New Product</a>
        </div>
        <div class="container mt-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="table-dark">
                        <th>NO</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>CATEGORY</th>
                        <th colspan="2">ACTIONS</th>
                    </tr>
                </thead>
                <?php
                $sql_query = "SELECT * FROM products ORDER BY id DESC";
                $result_set = mysqli_query($con, $sql_query);
                $seq = 1;
                while ($row = mysqli_fetch_row($result_set)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $seq; ?></td>
                            <td><a href="javascript:view_id('<?php echo $row[0]; ?>')" class="text-primary"><?php echo $row[1]; ?></a></td>
                            <td><?php echo "IDR " . number_format($row[2], 0, ",", ".") ?></td>
                            <td><a href="javascript:view_category('<?php echo $row[4]; ?>')" class="text-primary"><?php echo $row[4]; ?></a></td>
                            <td>
                                <a href="javascript:edit_id('<?php echo $row[0]; ?>')" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                            <td>
                                <a href="javascript:delete_id('<?php echo $row[0]; ?>')" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                <?php
                    $seq++;
                }
                ?>
            </table>
        </div>
    </div>
    <!-- need to open dropdown menu -->
    <?php include "../layouts/popperjs.php"; ?>
</body>

<?php
include "../layouts/footer.php";
?>