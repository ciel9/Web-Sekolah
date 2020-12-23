<?php        
    if(isset($_POST['submit'])) {
        $userid = $_POST['userid'];
        $password = $_POST['password'];
        
        $query = "SELECT password FROM user WHERE user_id = '$userid'";
                
        $result = mysqli_query($db, $query);
        
        while($row = mysqli_fetch_array($result)){
            $passtable = $row[0];
            }
        
        
        $passbanding = md5($password);

        if($passbanding == $passtable){
            session_start();
            $_SESSION['user_id'] = $userid;
            $_SESSION['status'] = "login";
            header("location:index.php");
                    
            }
            else{
                echo "Password salah";
            }
                
        }
        
?>