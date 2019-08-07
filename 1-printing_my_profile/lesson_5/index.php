<!DOCTYPE html>
<html>
<head>
    <title>Printing My Profile</title>
</head>
<body>
<?php
include "functions.php";
$name = "fakhr";
$age = 25;
$is_married = true;
$tall = 178.5;
$weight = "80";
?>

<p>Name: <?= $name ?></p>
<p>Age: <?= $age ?> </p>
<p>Tall: <?= $tall ?></p>
<p>weight: <?= $weight ?></p>
<p>size Recommendation: <?= format_size_recommendation($tall, $weight) ?></p>
<p>is_married:<?= $is_married ?> </p>
<p>Languages: <?= format_languages() ?></p>
<p>Favorites: <?= format_favorites() ?></p>

</body>
</html>