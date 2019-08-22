<?php 
include "config.php";
?>
<!doctype html>
<html>
    <head>
        <title>jQuery Datepicker to filter records with PHP MySQL</title>

        <!-- CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
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
        
        <!-- Search filter -->
        <form method='post' action=''>
            Start Date <input type='text' class='dateFilter' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
            
            End Date <input type='text' class='dateFilter' name='endDate' value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

            <input type='submit' name='but_search' value='Search'>
        </form>

        <!-- Employees List -->
        <div  >
            
            <table border='1' width='100%' style='border-collapse: collapse;margin-top: 20px;'>
                <tr>
                    <th>Name</th>
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
    </body>
</html>