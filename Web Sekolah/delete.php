<?php
    include 'src/model/config.php';
    
    if(isset($_GET['User_ID'])){
        $id = $_GET['User_ID'];

        $sql = "DELETE FROM user WHERE user_id ='$id'";
        $query = mysqli_query($db, $sql);

        if($query){
            header("location:index.php");
        }else{
            echo "Gagal Menghapus Data !!";
        }
    }
?>