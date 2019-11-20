<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "elite");
$login_session;
if ($conn) {
    if (!isset($_SESSION['admin'])) {
        mysql_close($conn);
        header('Location: index.php');
    }

    $user_check = $_SESSION['admin']['id'];
    $sql = "SELECT id,email,name,role FROM admins WHERE id='$user_check'";
    $processQuery = mysqli_query($conn, $sql);
    if (mysqli_num_rows($processQuery) == 1) {
        $login_session = mysqli_fetch_assoc($processQuery);
        if (!isset($login_session)) {
            mysql_close($conn);
            header('Location: index.php');
        }
    } else {
        header('Location: index.php');
    }

}
