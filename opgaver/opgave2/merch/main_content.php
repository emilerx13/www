<?php
  $motive = '../img/merch/dummy_text.png';
  $motive_id = null;
  if(isset($_GET['motive'])){
    switch($_GET['motive']){
      default:
        $motive = '../img/merch/dummy_text.png';
        $motive_id = null;
        break;
      case 0:
        $motive = '../img/merch/tee_chouun.png';
        $motive_id = 'chouun';
        break;
      case 1:
        $motive = '../img/merch/tee_chouun2.png';
        $motive_id = 'chouun2';
        break;
      case 2:
        $motive = '../img/merch/tee_samurai.png';
        $motive_id = 'samurai';
        break;
    }
  }
?>
<h3>Design din egne T-shirt</h3>
<div class="tshirt">
  <div class="canvas">
    <img src="<?=$motive?>" alt="" />
  </div>
  <form class="motive_form" action="" method="get">
    <div class="form_motive_0">
      <label for="radio_0"><img src="../img/merch/tee_chouun_small.png" alt="" /></label>
      <input id="radio_0" type="radio" name="motive" value="0" <?php if($motive_id == 'chouun') echo 'checked'; ?>>
    </div>
    <div class="form_motive_1">
      <label for="radio_1"><img src="../img/merch/tee_chouun2_small.png" alt="" /></label>
      <input id="radio_1" type="radio" name="motive" value="1" <?php if($motive_id == 'chouun2') echo 'checked'; ?>>
    </div>
    <div class="form_motive_2">
      <label for="radio_2"><img src="../img/merch/tee_samurai_small.png" alt="" /></label>
      <input id="radio_2" type="radio" name="motive" value="2" <?php if($motive_id == 'samurai') echo 'checked'; ?>>
    </div>
    <div class="form_submit">
      <input type="submit" value="vælg">
    </div>
  </form>
</div>
<h3>Bestil t-shirt med det valgte motiv</h3>
<div class="order input_form">
  <form class="order_form" action="index.html" method="post">
    <input type="hidden" name="motive" value="<?=$motive_id?>">
    <div class="form_name">
      <label for="order_name">navn:</label>
      <input id="order_name" type="text" name="name">
    </div>
    <div class="form_address">
      <label for="order_address">adresse:</label>
      <input id="order_address" type="text" name="address">
    </div>
    <div class="form_zipcode">
      <label for="order_zipcode">postnr.:</label>
      <input id="order_zipcode" type="text" name="zipcode">
    </div>
    <div class="form_city">
      <label for="order_city">by:</label>
      <input id="order_city" type="text" name="city">
    </div>
    <div class="form_email">
      <label for="order_email">email:</label>
      <input id="order_email" type="text" name="email">
    </div>
    <div class="form_submit">
      <input type="submit" name="" value="send">
    </div>
  </form>
</div>
