<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Global supervariables</title>
</head>
<body>
<h1>POST:</h1>
<form action="result.php" method="POST">
    <label>Top 5 TV shows:</label><br>
    <textarea name="tvshows" cols="40" rows="5">
1. Planet Earth II (2016)
2. Band of Brothers (2001)
3. Game of Thrones (2011)
4. Planet Earth (2006)
5. Breaking Bad (2008)
    </textarea><br>
    <label>Top 5 best movies:</label><br>
    <textarea name="bestmovies" cols="40" rows="5">
1. The Shawshank Redemption (1994)
2. The Godfather (1972)
3. The Godfather: Part II (1974)
4. The Dark Knight (2008)
5. 12 Angry Men (1957)
    </textarea><br><br>
    <input type="submit" name="post">
</form>
<hr>
<h1>GET:</h1>
<form action="result.php" method="GET">
    <label>Favourite country:</label><br>
    <input type="text" value="Norway" name="favcountry"><br>
    <label>Worst movie:</label><br>
    <input type="text" value="The room (2003)" name="worstmovie"><br><br>
    <input type="submit">
</form>
</body>
</html>
