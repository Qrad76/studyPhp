<?php
rename('./data/'.$_POST['past_title'], './data/'.$_POST['title']);
file_put_contents('./data/'.$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.$_POST['title']);
?>