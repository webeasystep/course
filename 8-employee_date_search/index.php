<?php 
include "config.php";
?>
<!doctype html>
<html>
    <head>
        <title>jQuery Datepicker to filter records with PHP MySQL</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Script -->
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type='text/javascript'>
        $(document).ready(function(){
            $('.dateFilter').datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
        </script>
    </head>
    <body >
    <div class="container">
        <div class="jumbotron">
            <h1>Employee date search Tutorial</h1>
        </div>

        <div class="row">
        <!-- Search filter -->
        <form class="form-inline" method='post' action=''>
            <div class="form-group">
                <label>Start Date </label>
                <input type='text' class='dateFilter form-control' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
            </div>
            <div class="form-group">
                <label>End Date </label>
                <input type='text' class='dateFilter form-control' name='endDate' value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>
            </div>
            <div class="form-group">
            <input type='submit' class="btn btn-info" name='but_search' value='Search'>
            </div>
        </form>

        <!-- Employees List -->
        <div style="padding: 0 15px;">
            <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Date of Join</th>
                    <th>Gender</th>
                    <th>Email</th>
                </tr>

                <?php
                $emp_query = "SELECT * FROM employee WHERE 1 ";

                // Date filter
                if(isset($_POST['but_search'])){
                    $fromDate = $_POST['fromDate'];
                    $endDate = $_POST['endDate'];

                    if(!empty($fromDate) && !empty($endDate)){
                        $emp_query .= " and date_of_join between '".$fromDate."' and '".$endDate."' ";
                    }
                }

                // Sort
                $emp_query .= " ORDER BY date_of_join DESC";
                $employeesRecords = mysqli_query($con,$emp_query);

                // Check records found or not
                if(mysqli_num_rows($employeesRecords) > 0){
                    while($empRecord = mysqli_fetch_assoc($employeesRecords)){
                        $id = $empRecord['id'];
                        $empName = $empRecord['emp_name'];
                        $date_of_join = $empRecord['date_of_join'];
                        $gender = $empRecord['gender'];
                        $email = $empRecord['email'];

                        echo "<tr>";
                        echo "<td>". $empName ."</td>";
                        echo "<td><img src='https://i.pravatar.cc/70?u=". $email ."'/></td>";
                        echo "<td>". $date_of_join ."</td>";
                        echo "<td>". $gender ."</td>";
                        echo "<td>". $email ."</td>";
                        echo "</tr>";
                    }
                }else{
                    echo "<tr>";
                    echo "<td colspan='4'>No record found.</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
        </div>
    </body>
</html>