<?php
require_once('lib/print.php');
require_once('view/top.php');
?>

 <h1><a href="/create.php">create</a></h1>
 <?php if (isset($_GET['id'])){ ?>
    <h1><a href="/update.php?id=<?php echo $_GET['id'] ?>">update</a></h1>
    <form action="/delete_process.php" method="POST">
    <input type="hidden" name="id" value ="<?php echo $_GET['id'] ?>">
    <input type="submit" value = "삭제">
    </form>
   
    <?php } ?>
  <h2>
    <?php
print_title();
?>
 </h2>
  <?php
print_content();
?>
<?php
require_once('view/bottom.php');
?>