<?php
  header('Content-Type: text/html; charset=utf-8');
  require('../style/template.php');
  $page_title='Manga';
?>

<!DOCTYPE html>
<html>
  <?php page_header($page_title); ?>
  <body>
    <?php page_content($page_title); ?>

    <script>
      function randomImage(){
        var imgCount = 4;
        var dir = '/opgaver/opgave2/img/manga/';
        var randomCount = new Array;
        for (var i = 0; i < 4; i++) {
          randomCount[i] = Math.round(Math.random() * (imgCount - 1)) + 0;
        }

        var images = new Array;
        images[0] = "sera01.jpg";
        images[1] = "sera02.jpg";
        images[2] = "sera03.jpg";
        images[3] = 'sera04.jpg';

        document.getElementById("image_0").src = dir + images[randomCount[0]];
        document.getElementById("image_1").src = dir + images[randomCount[1]];
        document.getElementById("image_2").src = dir + images[randomCount[2]];
        document.getElementById("image_3").src = dir + images[randomCount[3]];
      }

      var nDate = new Date();
      var cThisYear = '12/24/'+nDate.getFullYear();
      var cDate = new Date(cThisYear);
      var timeDiff = Math.abs(cDate.getTime() - nDate.getTime());

      var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));
      var pDate = Math.abs(((365-diffDays)/365)*100);

      document.getElementById("image_countdown").style.height = pDate + "%";
    </script>
  </body>
</html>
