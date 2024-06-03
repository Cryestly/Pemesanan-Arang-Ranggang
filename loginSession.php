<?php
session_start();
include 'conn.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql1 = "select level from user where username = '$username' and password = '$password'";
    $q1 = mysqli_query($conn, $sql1);
    while ($r1 = mysqli_fetch_assoc($q1)) {
        if ($r1['level'] == 'pembeli') {
            $_SESSION['status'] = 'Login';
            header("location:loginPembeli.php");
        } elseif ($r1['level'] == 'owner') {
            $_SESSION['status'] = 'Login';
            header("location:Dashboards/owner.php");
        } elseif ($r1['level'] == 'admin') {
            $_SESSION['status'] = 'Login';
            header("location:Dashboards/tables.php");
        }
    }
}
