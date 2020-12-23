<?php
    include 'src/model/config.php';
    include 'src/model/session.php';
?>

<html>
    <head>
        <!-- Bootstrap -->
	    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Jquery & DataTable -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">U-School</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <a class="nav-item nav-link active">Welcome</a>
            
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="index.php">Home<span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="src/view/profile.php">Coder's Profile</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
            </div>
            </div>
        </nav>
    <div class="container-fluid">
        <p style="float:right;"><a href="add.php" class="btn btn-primary">Add<i class="fa fa-plus"></i></a></p>
    </div>
    <div class="container">

    <?php
    if ($status == 3) {
        $query = "SELECT * FROM grade WHERE user_id='$username'";
        $query2 = "SELECT * FROM user WHERE user_id='$username'";
        $result = mysqli_query($db, $query);
        $result2 = mysqli_query($db, $query2);
        $row = mysqli_fetch_array($result);
        $row2 = mysqli_fetch_array($result2);

        echo "<div style='border: 1px solid #000;'>";
        echo "<h1 class='text-center'>Murid</h1>";
        echo "<h2 class='text-center'>Nama Murid: ". $row2['first_name'] . " " . $row2['last_name'] ."</h2>";
        echo "<h2 class='text-center'>ID Murid: " . $row['user_id'] . "</h2>";
        echo "<p>Nilai Tugas : " . $row['nilai_tugas'] . "</p>";
        echo "<p>Nilai UTS : " . $row['nilai_uts'] . "</p>";
        echo "<p>Nilai UAS : " . $row['nilai_uas'] . "</p>";

        // Mainin disini
        $grade = ($row['nilai_tugas'] + $row['nilai_uts'] + $row['nilai_uas']) / 3;
        if($grade > 80 && $grade < 101) {
            $huruf = "A";
        }
        else if($grade > 64 && $grade < 81) {
            $huruf = "B";
        }
        else if($grade > 44 && $grade < 65) {
            $huruf = "C";
        }
        else {
            $huruf = "D";
        }

        if($huruf == "D") {
            $predikat = "Tidak Lulus";
        }
        else {
            $predikat = "Lulus";
        }

        echo "<p>Grade : " . $huruf . "</p>";
        echo "<p>Predikat: " . $predikat . "</p>";
        echo "</div>";
    }
    ?>

    <!-- Buat guru -->
    <?php
    if($status == 2) {

    ?>
            <table id="siswatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
				<tr>
					<th> User ID </th>
					<th> Name </th>
                    <th> Tugas </th>
                    <th> UTS </th>
                    <th> UAS </th>
					<th> More Action</th>
				</tr>
			</thead>
            <tbody>
                <?php
                    if($status == 2) {
                        $counter = 0;
                        $query = "SELECT * FROM grade";
                        $query2 = "SELECT * FROM user WHERE role_id=3";
                        $data = mysqli_query($db, $query);
                        $data2 = mysqli_query($db, $query2);

                        while($row2 = mysqli_fetch_assoc($data2)) {
                            $array[] = $row2;
                        }

                        while($row = $data->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>". $array[$counter]['user_id']."</td>";
                            echo "<td>" . $array[$counter]['first_name'] . "</td>";
                            echo "<td>". $row['nilai_tugas'] . "</td>";
                            echo "<td>". $row['nilai_uts'] . "</td>";
                            echo "<td>". $row['nilai_uas'] . "</td>";

                            $counter++;
                            echo '<td>
                                <a class="fa fa-legal" href="update.php?User_ID='. $row['user_id'].'"></a></td>';
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>

    <?php
    }
    ?>

    <!-- Buat admin -->
    <?php
    if($status == 1) {
    
    ?>
        <table id="siswatable" class="table table-striped table-bordered" style="width:100%">
            <thead>
				<tr>
					<th> User ID </th>
					<th> First Name </th>
					<th> Role ID </th>
					<!-- <th> Deskripsi </th> -->
					<th> More Action</th>
				</tr>
			</thead>
            <tbody>
                <?php
                    if($status == 1) {
                        $query = "SELECT user_id, first_name, role_id FROM user";
                        $data = mysqli_query($db, $query);
    
                        while($row = $data->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>". $row['user_id'] . "</td>";
                            echo "<td>". $row['first_name'] . "</td>";
                            echo "<td>". $row['role_id'] . "</td>";
                            // echo "<td>". $row['Deskripsi']. "</td>";
    
                            echo '<td><a class="fa fa-minus-circle" href="delete.php?User_ID='. $row['user_id'].'"></a> 
                            <a class="fa fa-legal" href="update.php?User_ID='. $row['user_id'].'"></a></td>';
                            echo "</tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
    </div>

    <script>
        $(document).ready( function () {
            $('#siswatable').DataTable();

        });
    </script>
</body>
</html>
    </body>
</html>