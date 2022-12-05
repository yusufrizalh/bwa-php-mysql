<script type="text/javascript">

</script>

</head>
<?php
include "../layouts/headers.php";

include_once "../config/dbconfig.php";

session_start();

if (isset($_POST['btn-login']) && $_SERVER['REQUEST_METHOD'] == "POST") {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql_query = "SELECT id FROM users WHERE email = '$email' AND password = '$password'";
    $result_set = mysqli_query($con, $sql_query);
    $fetched_row = mysqli_fetch_array($result_set, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result_set);

    if ($count == 1) {
        $_SESSION['login_user'] = $email;
        header("Location: user_profile.php");
    } else {
?>
        <script type="text/javascript">
            alert('Invalid email or password');
            window.location.href = 'user_login.php';
        </script>
<?php
    }
}
?>

<body>
    <?php include "../layouts/navbar.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div>
            <h3>PHP AUTH Functions | User Login</h3>
        </div>
        <div class="container mt-3">
            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" autocomplete="off" id="email" name="email" placeholder="Enter email address">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" autocomplete="off" id="password" name="password" placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-md btn-primary" type="submit" name="btn-login">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>

<?php
include "../layouts/footer.php";
?>