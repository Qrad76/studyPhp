<?php
require_once('lib/print.php');
require_once('view/top.php');
?>

 <form action="create_process.php" method="POST">
    <p><input type="text" placehorder="Title" name="title"></p>

  <textarea name="description" placeholder="Description"></textarea>
  <input type="submit">

 </form>

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