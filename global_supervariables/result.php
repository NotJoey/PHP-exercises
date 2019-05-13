<?php
if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    echo 'Top 5 TV shows:<br>';
    foreach(explode("\n", $_POST['tvshows']) as $line) {
        echo $line . '<br>';
    }
    echo '<br>Top 5 best Movies:<br>';
    foreach(explode("\n", $_POST['bestmovies']) as $line) {
        echo $line . '<br>';
    }
}

if($_SERVER['REQUEST_METHOD'] === 'GET') {
    ?>
<style>table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}</style>
<table>
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
<?php foreach ($_GET as $key => $value): ?>
        <tr><td><?php echo $key; ?></td><td><?php echo $value ?></td></tr>
    <?php endforeach;?>
    </table>
<?php } ?>