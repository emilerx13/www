<?php
  $obj_conn = new mysqli('phpmyadmin.wi.sde.dk', 'alew02.wi5', 'pk3z53k2', 'alew02_wi5_sde_dk');
  if ($obj_conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $obj_conn -> set_charset('utf8');
?>
