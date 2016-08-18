<?php
  if(empty($_POST['type'])){
    header('location: ../admin/');
    exit();
  }
  require('../../../functions/conn_db.php');
  switch($_POST['type']){
    default:
      header('location: ../admin/');
      break;
    case 'create':
      $obj_date = new DateTime();
      $obj_date->setTimezone(new DateTimeZone('Europe/Copenhagen'));
      $date = $obj_date->format('Y-m-d H:i:s');
      if(!empty($_POST['title'])) $title = $obj_conn->real_escape_string($_POST['title']);
      if(!empty($_POST['content'])) $content = filter_var($_POST['content'], FILTER_SANITIZE_STRING);
      else header('location: ../admin/');
      var_dump($date);
      $sql_req = $obj_conn->prepare('INSERT INTO mangalicious_news(title, content, upload_date) VALUES(?,?,?)');
      $sql_req->bind_param('sss', $title, $content, $date);
      $sql_req->execute();
      break;
    case 'delete':
      if(!empty($_POST['id'])) $id = $obj_conn->real_escape_string($_POST['id']);
      else header('location: ../admin/');
      $sql_req = $obj_conn->prepare('DELETE FROM mangalicious_news WHERE id = ?');
      $sql_req->bind_param('i', $id);
      $sql_req->execute();
      break;
  }
  header('location: ../admin/');
  // header_remove();
?>
