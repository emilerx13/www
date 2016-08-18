<section class="headlines">
  <article class="head_news">
    <a class="page_link" href="#">
      <img src="<?=$root_dir?>/img/placeimg_640_280_tech.jpg" alt="" />
    </a>
    <a class="page_link" href="#">
      <h3>Some headline</h3>
      <h4>Such SubHeadline</h4>
    </a>
  </article>
  <aside class="news_list">
    <ul>
      <?php
        for ($i=0; $i < 5; $i++) {
          echo '
          <li>
            <a class="page_link" href="#">Wow newline</a>
          </li>';
        }
      ?>
    </ul>
  </aside>
</section>
<section class="bullet_news">
  <?php
    for ($i=0; $i < 9; $i++) {
      echo <<< EOT
      <article>
        <a class="page_link" href="#">
          <img src="$root_dir/img/placeimg_240_240_tech.jpg" alt="" />
        </a>
        <a class="page_link" href="#">
          <h3>Some more HEadlines</h3>
          <p>
            by someone
          </p>
        </a>
      </article>
EOT;
    }
  ?>
</section>
