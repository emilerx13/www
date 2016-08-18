<?php
  $n_date = new DateTime();
  $c_date = new Datetime('12/24');

  $diff = $c_date->diff($n_date);
  $v = $diff -> format('%a');
?>

<h3>Nedtælling</h3>

<p>
  Der er <?=$v?> dage til juleaften
</p>

<div class="image_counter">
  <div id="image_countdown">
  </div>
</div>
