<?php
require_once('lib/print.php');
require_once('view/top.php');
?>

 <h1><a href="/create.php">create</a></h1>
 <?php if (isset($_GET['id'])){ ?>
    <h1><a href="/update.php?id=<?php echo $_GET['id'] ?>">update</a></h1>
    <?php } ?>



<form action="update_process.php" method="POST">
    <p><input type="text" placehorder="Title" name="title" value ="<?php print_title() ?>"></p>
    <input type="hidden" name ="past_title" value ="<?php echo $_GET['id'] ?>">
  <textarea name="description" placeholder="Description"><?php print_content() ?></textarea>
  <input type="submit">
 </form>


 <?php
require_once('view/bottom.php');
?>