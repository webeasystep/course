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
<form action="functions.php" method="post">
    <input type="text" name="quote" value="">
    <button type="submit" name="create" value="1">Submit</button>
</form>
<table>
    <thead>
    <td>Name</td>
    <td>Options</td>
    </thead>
    <?php
    foreach ($quotes as $key => $quote) { ?>
        <tr>
            <td><?= $quote ?></td>
            <td>
                <a href="functions.php?delete&id=<?= $key ?>">Delete</a> ||
                <a href="functions.php?edit&id=<?= $key ?>">Edit</a>
            </td>
        </tr>
    <?php };?>

</table>

</body>
</html>