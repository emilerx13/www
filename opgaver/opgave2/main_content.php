<?php
  require('../../functions/conn_db.php');
  $sql_req = 'SELECT title, content, upload_date from mangalicious_news ORDER BY upload_date desc';
  $sql_result = $obj_conn->query($sql_req);
  while($result = $sql_result->fetch_object()){
    $content = preg_split("/\\r\\n|\\r|\\n/", $result->content);
    $date = new DateTime($result->upload_date);
    $upload_date = array($date -> format('j'), $date -> format('F'), $date -> format('Y'));

echo <<< EOT
  <article class="mangalicious_news">
    <div class="article_body">
      <h3>$result->title</h3>
EOT;
  for($i = 0; $i < count($content); $i++){
    echo '<p>'.$content[$i].'</p>';
  }

echo <<< EOT
    </div>
    <div class="date">
      <p>
        $upload_date[0].
      </p>
      <p>
        $upload_date[1]
      </p>
      <p>
        $upload_date[2]
      </p>
    </div>
  </article>
EOT;
  }
?>
