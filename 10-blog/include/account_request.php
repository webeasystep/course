<?php

if (!isset($_SESSION['user_name'])) {
    header('Location:../index.php');
} else if ($_SESSION['user_type'] != 'admin') {
    header('Location:../index.php');
} else {
    $user = $_SESSION['user_name'];
}

/* fetch user detail */
$query = "SELECT * FROM users_buffer";

$result = mysqli_query($conn, $query);

if ($result) {
    if (mysqli_num_rows($result) == 0) {
        echo "No more requests to show";
    } else if (mysqli_num_rows($result) > 0) {
        echo "
    <table class='table'>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
          <th>Accept</th>
          <th>Delete</th>
        </tr>

    <tbody>
    ";


        while ($row = mysqli_fetch_assoc($result)) {
            //include("../include/frame_profile_detail.php");
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";

            $accept_requested_user_link = '../include/accept_requested_user.php?user_name=' . $row['user_name'];
            echo "<td><a href=$accept_requested_user_link ><button type=\"button\" class=\"btn btn-success\">Accept</button></a></td>";

            $delete_requested_user_link = '../include/delete_requested_user.php?user_name=' . $row['user_name'];
            echo "<td><a href=$delete_requested_user_link ><button type=\"button\" class=\"btn btn-danger\">Delete</button></a></td>";

            echo "</tr>";

        }
        echo "
    </tbody>
  </table>
   ";

    }
} else {
    echo "failed";
}

?>
