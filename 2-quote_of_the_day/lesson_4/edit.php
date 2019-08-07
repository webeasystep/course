<!DOCTYPE html>
<html>
<head>
    <title>quote of the day</title>
</head>
<body>

<form action="functions.php" method="post">
    <input type="text" name="quote" value="<?= $current_line ?>">
    <input type="hidden" name="current_id" value="<?= $current_id ?>">
    <button type="submit" name="update" value="1">Submit</button>
</form>

</body>
</html>