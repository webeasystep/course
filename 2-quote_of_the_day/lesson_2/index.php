<!DOCTYPE html>
<html>
<head>
    <title>quote of the day</title>
</head>
<body>
<?php
// control all quotes
include "functions.php" ;
    $quotes = read();
 ?>
<table border="1">
    <thead>
    <td>Name</td>
    <td>Options</td>
    </thead>
    <?php
    foreach ($quotes as $key => $quote) { ?>
        <tr>
            <td><?= $quote ?></td>
            <td><a href="functions.php?delete&id=<?= $key ?>">Delete</a></td>
        </tr>
    <?php };?>

</table>

</body>
</html>