<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Pagination with PHP</title>
    <style>
        .align-middle {
            vertical-align: middle !important;
        }
    </style>
</head>
<body>
    <!-- Make Menu Header / Navbar -->
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: white;"><b>Pagination with PHP</b></a>
            </div>
        </div>
    </nav>

    <div style="padding: 0 15px;">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th class="text-center">NO</th>
                    <th>NIS</th>
                    <th>TYPE OF SEX</th>
                    <th>TEL</th>
                    <th>ADDRESS</th>
                </tr>
                <?php
                // Include / load file db.php
                include "db.php";
                // Check whether there is data on the page URL
                $page = (isset($_GET['page'])) ? $_GET['page'] : 1;

                 $limit = 5; // Amount of data per page

                 // Make a query to display to what number will be displayed in a table in the database
                 $limit_start = ($page - 1) * $limit;

                 // Create a query to display student data according to the specified limit
                 $sql = $pdo->prepare ("SELECT * FROM student LIMIT". $limit_start. ",". $limit);
                 $sql->execute (); // Execute the query

                 $no = $limit_start + 1; // For table numbering
                 while ($data = $sql->fetch ()) {// Get all data from the results of the execution of $sql

                ?>
                    <tr>
                        <td class="align-middle text-center"> <?php echo $no; ?> </td>
                         <td class="align-middle"> <?php echo $data['nis']; ?> </td>
                         <td class="align-middle"> <?php echo $data['name']; ?> </td>
                         <td class="align-middle"> <?php echo $data['gender']; ?> </td>
                         <td class="align-middle"> <?php echo $data['tel']; ?> </td>
                         <td class="align-middle"> <?php echo $data['address']; ?> </td>
                    </tr>
                <?php
                $no++; // Add 1 for each looping
                }
                ?>
            </table>
        <div>

        <!--
        Make the pagination  With bootstrap, we make it easy to make pagination buttons with a design
         good course -->
        <ul class="pagination">
            <!-- LINK FIRST AND PREV -->
            <?php
            if ($page == 1) {// If the page is used to 1, then disable the PREV link
            ?>
                <li class="disabled"><a href="#">First</a></li>
                <li class="disabled"><a href="#">&laquo;</a></li>
            <?php
            } else { // If you open page 1
                $link_prev = ($page > 1) ? $page - 1 : 1;
            ?>
                <li><a href="index.php?page=1">First</a></li>
                <li><a href="index.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
            <?php
            }
            ?>

            <!-- LINK NUMBER -->
            <?php
            // Create a query to count all amounts of data
            $sql2 = $pdo->prepare("SELECT COUNT(*) AS total FROM student");
            $sql2->execute(); // Execute the query
            $get_total = $sql2->fetch();

            $total_page = ceil($get_total['total'] / $limit); // Count the number of pages
            $total_number = 3; // Specify the link number before and after the current page
            $start_number = ($page > $total_number) ? $page - $total_number : 1; // For the beginning of the member link
            $end_number = ($page < ($total_page - $total_number)) ? $page + $total_number : $total_page; // To the end of the link number

            for ($i = $start_number; $i <= $end_number; $i++) {
                $link_active = ($page == $i) ? 'class="active"' : '';
            ?>
                <li <?php echo $link_active; ?>><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php
            }
            ?>

            <!-- LINK NEXT AND LAST -->
            <?php
            // If the page is equal to the number of pages, then disable the NEXT link
             // This means that the page is the last page
             if ($page == $total_page) {// if the last page
            ?>
                <li class="disabled"><a href="#">&raquo;</a></li>
                <li class="disabled"><a href="#">Last</a></li>
            <?php
            } else { // If not the last page
                $link_next = ($page < $total_page) ? $page + 1 : $total_page;
            ?>
                <li><a href="index.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                <li><a href="index.php?page=<?php echo $total_page; ?>">Last</a></li>
            <?php
            }
            ?>
        </ul>
    </div>
</body>
</html>