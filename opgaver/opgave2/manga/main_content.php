<div class="random_images">
  <h3>Seraphim siger "Nyaaaan" (Japansk for "Miaaaaaauv")</h3>
  <p>
    Sandsynligheden for at samle billedet korrekt er 1:256!
  </p>

  <div class="manga_image">
    <?php
      $images = array(
      '/opgaver/opgave2/img/manga/sera01.jpg',
      '/opgaver/opgave2/img/manga/sera02.jpg',
      '/opgaver/opgave2/img/manga/sera03.jpg',
      '/opgaver/opgave2/img/manga/sera04.jpg'
    );
    for ($i=0; $i < count($images); $i++) {
      echo '<img src="'.$images[mt_rand(0,count($images)-1)].'" id="image_'.$i.'">';
    }
    ?>
  </div>
  <button onclick="randomImage()">Prøv Igen</button>

</div>
