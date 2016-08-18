<?php
  require('style/template.php');
  header('Content-Type: text/html; charset=utf-8');
  $page_title='Forside'
?>

<!DOCTYPE html>
<html>
  <?php page_header($page_title); ?>
  <body>
    <?php page_content($page_title); ?>
  </body>
</html>
