<?php
file_put_contents('./data/'.$_POST['title'], $_POST['description']);

echo "<p>".$_POST['title']."<br /><p>";

echo "<p>".$_POST['description']."<br /><p>";
?>