<?php
  require_once('functions/conn_db.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>test</title>
  </head>
  <body>
    <?php
    $sql_req = 'SELECT test1,test2,test3,test4 from test';
    $sql_result = $obj_conn->query($sql_req);
    $result = $sql_result->fetch_object();
    echo $result->test1;
    ?>
  </body>
</html>
