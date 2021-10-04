<?php
require_once('lib/print.php');
?>

<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>    
    <?php
print_title();
?>
   </title>
</head>
<body>
  <h1> <a href="/index.php">WEB</a> </h1>
  <ol>
    <?php
print_menu();
?>
 </ol>