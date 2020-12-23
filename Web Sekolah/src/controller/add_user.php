<?php
    include 'src/model/config.php';

        if(isset($_POST['submit'])){
            $userid = $_POST['userid'];
            $fnama = $_POST['fnama'];
            $lnama = $_POST['lnama'];
            $role = $_POST['role'];
            $address = $_POST['address'];
            $password = md5($_POST['password']);

            $sql = "INSERT INTO user VALUES ('$userid', '$password', '$fnama', '$lnama', '$role', '$address')";
            mysqli_query($db, $sql);
            header("location:index.php");
            }
            else if(isset($_POST['cancel'])){
                 header("location:index.php");
     }
?>