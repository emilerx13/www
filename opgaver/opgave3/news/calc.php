<?php
  session_start();
  require('../../../functions/conn_db.php');

  $level_range = array();
  $cpm_range = array();
  $stat = array('hp'=>'','atk'=>'','spatk'=>'','def'=>'','spdef'=>'','spd'=>'');

  $stardust = intval($_POST['stardust']);
  $pokemon_name = $_POST['pokemon_name'];
  $cp_target = $_POST['pokemon_cp'];

  $sql_req_level = $obj_conn->prepare('SELECT level, cpm FROM pg_level WHERE stardust=?');
  $sql_req_level->bind_param('i', $stardust);
  $sql_req_level->execute();
  $sql_req_level->bind_result($sql_level, $sql_cpm);
  while($sql_req_level->fetch()){
    $level_range[] = $sql_level;
    $cpm_range[] = floatval($sql_cpm);
  }

  $sql_req_stat = $obj_conn->prepare('SELECT hp,atk,spatk,def,spdef,spd FROM pg_stat WHERE pokemon=?');
  $sql_req_stat->bind_param('s', $pokemon_name);
  $sql_req_stat->execute();
  $sql_req_stat->bind_result($sql_hp,$sql_atk,$sql_spatk,$sql_def,$sql_spdef,$sql_spd);
  $sql_req_stat->fetch();
  $stat['hp'] = $sql_hp;
  $stat['atk'] = $sql_atk;
  $stat['spatk'] = $sql_spatk;
  $stat['def'] = $sql_def;
  $stat['spdef'] = $sql_spdef;
  $stat['spd'] = $sql_spd;

  $base_atk = 2 * (pow(($stat['atk']*$stat['spatk']), 0.5) + pow($stat['spd'], 0.5));
  $base_def = 2 * (pow(($stat['def']*$stat['spdef']), 0.5) + pow($stat['spd'], 0.5));
  $base_hp = 2 * $stat['hp'];

  $iv_atk = array();
  $iv_def = array();
  $iv_hp = array();
  $iv_procent = array();

  for($i = 0; $i < count($cpm_range); $i++){
    for($atk_counter = 0; $atk_counter < 16; $atk_counter++){
      for($def_counter = 0; $def_counter < 16; $def_counter++){
        for($hp_counter = 0; $hp_counter < 16; $hp_counter++){
          $cp = ($base_atk+$atk_counter) * pow(($base_def+$def_counter),0.5) * pow(($base_hp+$hp_counter),0.5) * pow($cpm_range[$i],2) / 10;
          if($cp < ($cp_target+0.1) && $cp > ($cp_target-0.1)){
            $iv_atk[] = $atk_counter;
            $iv_def[] = $def_counter;
            $iv_hp[] = $hp_counter;
            $iv_procent[] = ($atk_counter+$def_counter+$hp_counter)/45*100;
          }
        }
      }
    }
  }
  $_SESSION['test'] = $iv_procent;
  asort($_SESSION['test']);
  var_dump($_SESSION['test']);
?>
