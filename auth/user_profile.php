</head>
<?php
include "../layouts/headers.php";
include "./session.php";
?>

<body>
    <?php include "../layouts/navbar_profile.php"; ?>
    <div class="container mt-5 mb-5 py-5">
        <div class="container mt-5">
            <h3>Welcome, <?php echo $session_login; ?></h3>
        </div>
    </div>

    <!-- need to open dropdown menu -->
    <?php include "../layouts/popperjs.php"; ?>
</body>

<?php
include "../layouts/footer.php";
?>