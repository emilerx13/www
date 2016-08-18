<?php
  require('../../../functions/conn_db.php');
  $sql_req = 'SELECT title, content, image, link from mangalicious_aside';
  $sql_result = $obj_conn->query($sql_req);
  echo '<h3>Nyeste album</h3>';
  echo '<div class="album">';
  while($result = $sql_result->fetch_object()){
    $content_result = substr($result->content, 0, 165).'...';
    $content = preg_split("/\\r\\n|\\r|\\n/", $content_result);
echo <<< EOT
    <h4 class="album_title">
      $result->title
    </h4>
    <img src="$result->image" alt"Album cover">
EOT;
    for($i = 0; $i < count($content); $i++){
      echo '<p>'.$content[$i].'</p>';
    }
echo <<< EOT
    <a href="$result->link">Læs Mere</a>
EOT;
  }
  echo '</div>';
?>
