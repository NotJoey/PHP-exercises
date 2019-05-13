<?php
$array = [
    ["tv-show" => "Naruto", "rating" => 1],
    ["tv-show" => "Firefly", "rating" => 2],
    ["tv-show" => "Big bang theory", "rating" => 4],
    ["tv-show" => "Family Guy", "rating" => 3],
    ["tv-show" => "Tokyo ghoul", "rating" => 4],
    ["tv-show" => "The simpsons", "rating" => 4],
    ["tv-show" => "Moonshiners", "rating" => 5],
    ["tv-show" => "Breaking bad", "rating" => 2]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TV show ratings</title>
</head>
<body>
<table>
    <tr>
        <th>TV show</th>
        <th>Rating</th>
    </tr>
    <?php foreach($array as $arr): ?>
        <tr>
            <td><?php echo $arr["tv-show"]; ?></td>
            <td><?php
                $x = 1;
                while($x <= $arr["rating"]): ?>
                    echo "<span class=\"fa fa-star checked\"></span>";
                    $x++;
                <?php endwhile; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
    }
    .checked {
        color: #FFD700;
    }
</style>
</body>
</html>

