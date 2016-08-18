<h3>slet nyheder</h3>
<div class="delete_news">
  <?php
    require('../../../functions/conn_db.php');
    $sql_req = 'SELECT id, title from mangalicious_news ORDER BY upload_date desc';
    $sql_result = $obj_conn->query($sql_req);
    while($result = $sql_result->fetch_object()){
echo <<< EOT
  <div class="delete_entry">
    <p>$result->title</p>
    <form action="crud.php" method="post">
      <input type="hidden" name="type" value="delete">
      <input type="hidden" name ="id" value="$result->id">
      <input type="submit" value="">
    </form>
  </div>
EOT;
    }
  ?>
</div>
