<?php
    session_start();

    if($_SESSION['status'] != "login"){
        header("location:loginpage.php");
    }

    if(isset($_SESSION['user_id'])) {
        $username = $_SESSION['user_id'];
        $sql = "SELECT * FROM user WHERE user_id = '$username'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_array($result);
        $status = $row['role_id'];
    }

?>