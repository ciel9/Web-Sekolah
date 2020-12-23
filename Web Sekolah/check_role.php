<?php
  include 'src/model/config.php';
  if(isset($_SESSION['user_id'])) {
    $userid = $_SESSION['user_id'];
    $sql = "SELECT * FROM user WHERE user_id = '$userid' LIMIT 1";
    $user = mysqli_query($db, $sql);
    $user = mysqli_fetch_array($user);

    if($user['role'] == 1) {
      $_SESSION['role'] = 1;
    }
    else if ($user['role'] == 2) {
      $_SESSION['role'] = 2;
    }
    else {
      $_SESSION['role'] = 3;
    }
  }

?>