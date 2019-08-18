<!DOCTYPE html>
<html>
<head>
    <title>Quote of the day</title>
</head>
<body>
<?php
// control all quotes
include "functions.php";
$quotes = read();

?>
<form action="functions.php" method="post" enctype="multipart/form-data">
    <input type="file" name="quotes">
    <div id='alert'>
        <div class=' alert alert-block alert-info fade in center'>
            <?= isset($_SESSION['message']) ? $_SESSION['message'] : "";; ?>
        </div>
    </div>
    <button type="submit" name="upload" value="1">Submit</button>
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
    <?php }
    session_unset();

    session_destroy();; ?>

</table>

</body>
</html>