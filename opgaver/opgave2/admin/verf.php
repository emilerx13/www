<?php
  //Starting session, includes & requires and set variables
  session_start();
  require('../../../functions/conn_db.php');
  $sql_result = array();
  $input = array('username'=>'','password'=>'');

  //Sanitize user input
  if(!empty($_POST['username'])) $input['username'] = $obj_conn->real_escape_string($_POST['username']);
  if(!empty($_POST['password'])) $input['password'] = $obj_conn->real_escape_string($_POST['password']);

  //Prepare, bind, execute and bind results
  $sql_req = $obj_conn->prepare('SELECT id, username, password FROM mangalicious_users WHERE username=?');
  $sql_req->bind_param('s', $input['username']);
  $sql_req->execute();
  $sql_req->bind_result($sql_result[0],$sql_result[1],$sql_result[2]);

  //Compare input with DB data
  if(!empty($sql_req->fetch())){
    $pw_array = explode('$', $sql_result[2]);
    $hash_password = crypt($input['password'], '$6$'.$pw_array[2].'$');
    if($hash_password == $sql_result[2]){
      //Login Success
      header('location: ../admin/');
      // $_SESSION['login_id'] = $sql_result[0];
    }
    else{
      //Login failed
      header('location: ../');
    }
  }
  else{
    //Login failed
    header('location: ../');
  }
?>
