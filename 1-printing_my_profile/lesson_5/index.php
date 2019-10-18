<!DOCTYPE html>
<html>
<head>
    <title>Printing My Profile</title>
    <style>
        ul {
            list-style-type: none; /* Remove bullets */
            padding: 0; /* Remove padding */
            margin: 0; /* Remove margins */
        }

        ul li {
            border: 1px solid #ddd; /* Add a thin border to each list item */
            margin-top: -1px; /* Prevent double borders */
            background-color: #f6f6f6; /* Add a grey background color */
            padding: 12px; /* Add some padding */
        }
    </style>
</head>
<body>
<?php include "functions.php"; ?>
<h2>Personal Profile</h2>

<ul>
    <li><b>Name:</b> <?= $name ?></li>
    <li><b>Age:</b> <?= $age ?></li>
    <li><b>Tall:</b> <?= $tall ?></li>
    <li><b>Weight:</b> <?= $weight ?></li>
    <li><b>Size Recommendation:</b> <?= format_size_recommendation($tall, $weight) ?></li>
    <li><b>Is married:</b> <?= $is_married == true ? "Yes" : "NO" ; ?></li>
    <li><b>Languages:</b> <?= format_languages() ?></li>
    <li><b>Favorites:</b> <?= format_favorites() ?></li>
    <li><b>Best Numbers:</b> <?= format_best_numbers() ?></li>
</ul>

</body>
</html>