<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
        <?php
            include 'src/model/config.php';

            if(isset($_GET['User_ID'])) {
                // insert Nim into id
                $id = $_GET['User_ID'];
            
                // INSERT ALL DATA WHERE Nim = id INTO $data
                $data = mysqli_query($db, "SELECT * FROM user WHERE user_id = $id");
                
                // FETCH DATA
                $row = mysqli_fetch_assoc($data);

            }
        ?>
            <h1 style="text-align:center;">Form Penambahan Data Siswa</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label>ID User</label>
                    <input type="text" name="userid"  value ="<?php echo $row['user_id']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>FirstNama</label>
                    <input type="text" name="fnama" value ="<?php echo $row['first_name']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>LastNama</label>
                    <input type="text" name="lnama" value ="<?php echo $row['last_name']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" value ="<?php echo $row['role_id']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value ="<?php echo $row['address']?>" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" value ="<?php echo $row['password']?>" class="form-control">
                </div>
                <button name="submit" type="submit">Update</button>
                <button name="cancel" type="submit">Cancel</button>
            </form>

            <?php
                include 'src/model/config.php';

                if(isset($_POST['submit'])){
                    $userid = $_POST['userid'];
                    $fnama = $_POST['fnama'];
                    $lnama = $_POST['lnama'];
                    $role = $_POST['role'];
                    $address = $_POST['address'];
                    $password = md5($_POST['password']);

                    mysqli_query($db, "UPDATE user SET user_id = '$userid', password = '$password', first_name = '$fnama', last_name = '$lnama', role_id = '$role', address = '$address' WHERE user_id = '$userid'");
                    header("location:index.php");
                }
                else if (isset($_POST['cancel'])){
                    header("location:index.php");
                }
            ?>
        </div>
    </body>
</html>