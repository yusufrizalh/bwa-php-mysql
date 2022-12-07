<?php
include "./layouts/headers.php";

include_once "./config/dbconfig.php";
?>

<body>
    <?php include "./layouts/navbar.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div>
            <h3>PHP CRUD Functions | Products by Category</h3>
        </div>
        <div class="container mt-5">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="table-dark">
                        <th>SEQ</th>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>CATEGORY</th>
                    </tr>
                </thead>
                <?php
                if (isset($_GET['view_category'])) {
                    // $sql_query = "SELECT * FROM products WHERE category LIKE " . "'%" . $_GET["view_category"] . "%'";
                    // $sql_query = "SELECT * FROM products WHERE category IN (" . "'" . $_GET["view_category"] . "'" . ")";
                    $sql_query = "SELECT * FROM products WHERE category = " . "'" . $_GET['view_category'] . "'";
                    $result_set = mysqli_query($con, $sql_query);
                    $seq = 1;
                    while ($fetched_row = mysqli_fetch_row($result_set)) {
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $seq; ?></td>
                                <td><?php echo $fetched_row[0]; ?></td>
                                <td><?php echo $fetched_row[1]; ?></td>
                                <td><?php echo "IDR " . number_format($fetched_row[2], 0, ",", "."); ?></td>
                                <td><?php echo $fetched_row[4]; ?></td>
                            </tr>
                        </tbody>
                    <?php
                        $seq++;
                    }
                    ?>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</body>

<?php
include "./layouts/footer.php";
?>