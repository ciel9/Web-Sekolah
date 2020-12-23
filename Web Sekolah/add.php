<?php
    include 'src/model/config.php';
    include 'src/model/session.php';
    include 'src/controller/add_user.php';
?>

<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <h1 style="text-align:center;">Form Penambahan Data Siswa</h1>
            <form action="" method="POST">
                <div class="form-group">
                    <label>ID User</label>
                    <input type="text" name="userid" class="form-control">
                </div>
                <div class="form-group">
                    <label>FirstNama</label>
                    <input type="text" name="fnama" class="form-control">
                </div>
                <div class="form-group">
                    <label>LastNama</label>
                    <input type="text" name="lnama" class="form-control">
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <input type="text" name="role" class="form-control">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <button name="submit" type="submit">Add</button>
                <button name="cancel" type="submit">Cancel</button>
                
            </form>
        </div>
    </body>
</html>