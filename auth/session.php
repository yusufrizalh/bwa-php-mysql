<?php

include "../config/dbconfig.php";

session_start();

$email_check = $_SESSION['login_user'];

$session_query = mysqli_query($con, "SELECT username FROM users WHERE email = '$email_check'");

$row = mysqli_fetch_array($session_query, MYSQLI_ASSOC);

$session_login = $row['username'];

if (!isset($_SESSION['login_user'])) {
    header("Location: user_login.php");
    die();
}
